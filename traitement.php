<?php 
include 'i18n.php';

// Charger les variables d'environnement du .env
$envFile = __DIR__ . '/.env';
$envVars = [];
if (file_exists($envFile)) {
    $lines = file($envFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        if (strpos($line, '=') !== false && strpos($line, '#') === false) {
            list($key, $value) = explode('=', $line, 2);
            $envVars[trim($key)] = trim($value);
        }
    }
}

// Activer le mode debug pour voir les erreurs
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Récupérer et nettoyer les données du formulaire
    $name = htmlspecialchars(trim($_POST['name'] ?? ''));
    $email = filter_var(trim($_POST['email'] ?? ''), FILTER_VALIDATE_EMAIL);
    $message = htmlspecialchars(trim($_POST['message'] ?? ''));

    if (empty($name) || empty($_POST['email']) || empty($message)) {
        echo t('form_required_fields');
        exit;
    } 
    
    if (!$email) {
        echo t('form_invalid_email');
        exit;
    }

    // Configuration PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Configuration SMTP
        $mail->isSMTP();
        $mail->Host = $envVars['SMTP_HOST'] ?? 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = $envVars['SMTP_USERNAME'] ?? '';
        $mail->Password = $envVars['SMTP_PASSWORD'] ?? '';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = $envVars['SMTP_PORT'] ?? 587;
        $mail->CharSet = 'UTF-8';

        // Destinataire
        $mail->setFrom($envVars['SMTP_USERNAME'] ?? 'camara.enc@gmail.com', 'Portfolio Contact Form');
        $mail->addAddress('eli_tr@hotmail.es', 'Elisabeth');
        $mail->addReplyTo($email, $name);

        // Contenu du mail
        $mail->isHTML(true);
        
        if ($currentLang === 'es') {
            $mail->Subject = "Nuevo mensaje de contacto de " . $name;
            $mail->Body = "<h2>Nuevo mensaje de contacto</h2>";
            $mail->Body .= "<p><strong>Nombre:</strong> " . $name . "</p>";
            $mail->Body .= "<p><strong>Email:</strong> " . $email . "</p>";
            $mail->Body .= "<p><strong>Mensaje:</strong></p>";
            $mail->Body .= "<p>" . nl2br($message) . "</p>";
        } elseif ($currentLang === 'en') {
            $mail->Subject = "New contact message from " . $name;
            $mail->Body = "<h2>New contact message</h2>";
            $mail->Body .= "<p><strong>Name:</strong> " . $name . "</p>";
            $mail->Body .= "<p><strong>Email:</strong> " . $email . "</p>";
            $mail->Body .= "<p><strong>Message:</strong></p>";
            $mail->Body .= "<p>" . nl2br($message) . "</p>";
        } else {
            $mail->Subject = "Nouveau message de contact de " . $name;
            $mail->Body = "<h2>Nouveau message de contact</h2>";
            $mail->Body .= "<p><strong>Nom:</strong> " . $name . "</p>";
            $mail->Body .= "<p><strong>Email:</strong> " . $email . "</p>";
            $mail->Body .= "<p><strong>Message:</strong></p>";
            $mail->Body .= "<p>" . nl2br($message) . "</p>";
        }

        $mail->AltBody = strip_tags($mail->Body);

        $mail->send();
        echo t('form_success');

    } catch (Exception $e) {
        error_log("Erreur PHPMailer: " . $mail->ErrorInfo);
        echo t('form_error') . $mail->ErrorInfo;
    }
}


