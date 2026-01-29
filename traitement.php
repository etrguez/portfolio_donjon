<?php 
include 'i18n.php';

// Charger les variables d'environnement du .env
$envFile = __DIR__ . '/.env';
if (file_exists($envFile)) {
    $lines = file($envFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        if (strpos($line, '=') !== false && strpos($line, '#') === false) {
            list($key, $value) = explode('=', $line, 2);
            $_ENV[trim($key)] = trim($value);
        }
    }
}

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Récupérer et nettoyer les données du formulaire
    $name = htmlspecialchars(trim($_POST['name'] ?? ''));
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $message = htmlspecialchars(trim($_POST['message'] ?? ''));

    if (empty($name) || empty($_POST['email']) || empty($message)) {
        echo t('form_required_fields');
    } elseif (!$email) {
        echo t('form_invalid_email');
    } else {
        $phpmailer = new PHPMailer(true);
        try {
            $phpmailer->isSMTP();
            $phpmailer->Host = $_ENV['SMTP_HOST'] ?? 'smtp.gmail.com';
            $phpmailer->SMTPAuth = true;
            $phpmailer->Username = $_ENV['SMTP_USERNAME'] ?? '';
            $phpmailer->Password = $_ENV['SMTP_PASSWORD'] ?? '';
            $phpmailer->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $phpmailer->Port = $_ENV['SMTP_PORT'] ?? 587;
            $phpmailer->SMTPDebug = $_ENV['SMTP_DEBUG'] ?? 0;
            $phpmailer->Debugoutput = 'html';
            $phpmailer->CharSet = $_ENV['SMTP_CHARSET'] ?? 'UTF-8';

            // Utiliser eli_tr@hotmail.es comme From (expéditeur affiché)
            $fromEmail = $_ENV['FROM_EMAIL'] ?? 'eli_tr@hotmail.es';
            $fromName = $_ENV['FROM_NAME'] ?? 'Elisabeth - Portfolio';
            $phpmailer->setFrom($_ENV['SMTP_USERNAME'], $fromName);
            $phpmailer->addReplyTo($fromEmail, $fromName);
            
            $phpmailer->addAddress($fromEmail);

            $phpmailer->isHTML(true);
            $phpmailer->Subject = 'Nouveau message du Bureau des Chouettes';
            
            if ($currentLang === 'es') {
                $phpmailer->Subject = 'Nuevo mensaje de la Oficina de Búhos';
                $emailBody = "Has recibido un nuevo mensaje de:<br>";
                $emailBody .= "Nombre: " . $name . "<br>";
                $emailBody .= "Correo: " . $email . "<br>";
                $emailBody .= "Mensaje: <br>" . nl2br($message);
            } elseif ($currentLang === 'en') {
                $phpmailer->Subject = 'New message from the Owl Office';
                $emailBody = "You have received a new message from:<br>";
                $emailBody .= "Name: " . $name . "<br>";
                $emailBody .= "Email: " . $email . "<br>";
                $emailBody .= "Message: <br>" . nl2br($message);
            } else {
                $emailBody = "Vous avez reçu un nouveau message de :<br>";
                $emailBody .= "Nom: " . $name . "<br>";
                $emailBody .= "Email: " . $email . "<br>";
                $emailBody .= "Message: <br>" . nl2br($message);
            }
            
            $phpmailer->Body = $emailBody;
            $phpmailer->AltBody = strip_tags($emailBody);

            $phpmailer->send();

            // Envoyer un email de confirmation à l'utilisateur
            $phpmailer->clearAddresses();
            $phpmailer->clearReplyTos();
            $phpmailer->addAddress($email);
            
            if ($currentLang === 'es') {
                $phpmailer->Subject = "Confirmación de recepción de su mensaje";
                $confirmBody = "Hola " . $name . ",<br><br>Gracias por tu interés. Hemos recibido tu mensaje y te responderemos lo antes posible.<br><br>Saludos,<br>Elisabeth - Portfolio Donjon";
            } elseif ($currentLang === 'en') {
                $phpmailer->Subject = "Confirmation of receipt of your message";
                $confirmBody = "Hello " . $name . ",<br><br>Thank you for your interest. We have received your message and will get back to you as soon as possible.<br><br>Best regards,<br>Elisabeth - Portfolio Donjon";
            } else {
                $phpmailer->Subject = "Confirmation de réception de votre message";
                $confirmBody = "Bonjour " . $name . ",<br><br>Merci de votre intérêt. Nous avons bien reçu votre message et nous vous répondrons dès que possible.<br><br>Cordialement,<br>Elisabeth - Portfolio Donjon";
            }
            
            $phpmailer->Body = $confirmBody;
            $phpmailer->AltBody = strip_tags($confirmBody);

            $phpmailer->send();

            echo t('form_success');

        } catch (Exception $e) {
            echo t('form_error') . $phpmailer->ErrorInfo;
            error_log("Erreur PHPMailer: " . $e->getMessage());
        }
    }
}
?>

