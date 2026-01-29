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

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Récupérer et nettoyer les données du formulaire
    $name = htmlspecialchars(trim($_POST['name'] ?? ''));
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $message = htmlspecialchars(trim($_POST['message'] ?? ''));

    if (empty($name) || empty($_POST['email']) || empty($message)) {
        echo t('form_required_fields');
        exit;
    } 
    
    if (!$email) {
        echo t('form_invalid_email');
        exit;
    }

    // Email destination (ton email)
    $to = 'eli_tr@hotmail.es';
    
    // Headers
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    $headers .= "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    
    // Subject selon la langue
    if ($currentLang === 'es') {
        $subject = "Nuevo mensaje de contact de " . $name;
        $body = "<h2>Nuevo mensaje de contact</h2>";
        $body .= "<p><strong>Nombre:</strong> " . $name . "</p>";
        $body .= "<p><strong>Email:</strong> " . $email . "</p>";
        $body .= "<p><strong>Mensaje:</strong></p>";
        $body .= "<p>" . nl2br($message) . "</p>";
    } elseif ($currentLang === 'en') {
        $subject = "New contact message from " . $name;
        $body = "<h2>New contact message</h2>";
        $body .= "<p><strong>Name:</strong> " . $name . "</p>";
        $body .= "<p><strong>Email:</strong> " . $email . "</p>";
        $body .= "<p><strong>Message:</strong></p>";
        $body .= "<p>" . nl2br($message) . "</p>";
    } else {
        $subject = "Nouveau message de contact de " . $name;
        $body = "<h2>Nouveau message de contact</h2>";
        $body .= "<p><strong>Nom:</strong> " . $name . "</p>";
        $body .= "<p><strong>Email:</strong> " . $email . "</p>";
        $body .= "<p><strong>Message:</strong></p>";
        $body .= "<p>" . nl2br($message) . "</p>";
    }
    
    // Envoyer l'email
    if (mail($to, $subject, $body, $headers)) {
        echo t('form_success');
    } else {
        echo t('form_error') . " mail() function failed";
    }
}
?>

?>

