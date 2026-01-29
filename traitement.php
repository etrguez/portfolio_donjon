<?php 
// Headers de sécurité
header("X-Content-Type-Options: nosniff");
header("X-Frame-Options: DENY");
header("X-XSS-Protection: 1; mode=block");
header("Content-Security-Policy: default-src 'self'; script-src 'self' 'unsafe-inline'; style-src 'self' 'unsafe-inline' https://fonts.googleapis.com https://cdn.jsdelivr.net; font-src 'self' https://fonts.gstatic.com https://cdn.jsdelivr.net; img-src 'self' data: https:;");

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
        
        // Template HTML stylisé
        $emailTemplate = '
        <!DOCTYPE html>
        <html>
        <head>
            <meta charset="UTF-8">
            <style>
                body {
                    font-family: "Arial", sans-serif;
                    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                    margin: 0;
                    padding: 20px;
                }
                .email-container {
                    max-width: 600px;
                    margin: 0 auto;
                    background: #ffffff;
                    border-radius: 12px;
                    overflow: hidden;
                    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
                }
                .email-header {
                    background: linear-gradient(135deg, #1a3d5d 0%, #2e1a47 100%);
                    color: #ffd700;
                    padding: 30px;
                    text-align: center;
                }
                .email-header h1 {
                    margin: 0;
                    font-size: 28px;
                    font-weight: bold;
                }
                .email-header p {
                    margin: 10px 0 0 0;
                    color: #add8e6;
                    font-size: 14px;
                }
                .email-body {
                    padding: 40px 30px;
                }
                .info-row {
                    margin-bottom: 20px;
                    padding: 15px;
                    background: #f8f9fa;
                    border-left: 4px solid #ffd700;
                    border-radius: 5px;
                }
                .info-label {
                    color: #1a3d5d;
                    font-weight: bold;
                    font-size: 14px;
                    margin-bottom: 5px;
                }
                .info-value {
                    color: #333;
                    font-size: 16px;
                    line-height: 1.6;
                }
                .message-box {
                    background: #f0f8ff;
                    border: 1px solid #add8e6;
                    border-radius: 8px;
                    padding: 20px;
                    margin-top: 20px;
                }
                .email-footer {
                    background: #f8f9fa;
                    padding: 20px;
                    text-align: center;
                    color: #666;
                    font-size: 12px;
                }
                .divider {
                    height: 2px;
                    background: linear-gradient(to right, transparent, #ffd700, transparent);
                    margin: 20px 0;
                }
            </style>
        </head>
        <body>
            <div class="email-container">
                <div class="email-header">
                    <h1>✨ {TITLE} ✨</h1>
                    <p>🦉 Bureau des Chouettes 🦉</p>
                </div>
                <div class="email-body">
                    <div class="info-row">
                        <div class="info-label">{LABEL_NAME}</div>
                        <div class="info-value">{NAME}</div>
                    </div>
                    <div class="info-row">
                        <div class="info-label">{LABEL_EMAIL}</div>
                        <div class="info-value">{EMAIL}</div>
                    </div>
                    <div class="divider"></div>
                    <div class="info-label" style="margin-bottom: 10px;">{LABEL_MESSAGE}</div>
                    <div class="message-box">
                        <div class="info-value">{MESSAGE}</div>
                    </div>
                </div>
                <div class="email-footer">
                    <p>© 2025 Elisabeth - Portfolio Donjon Développe use</p>
                    <p style="margin-top: 5px; color: #999;">Ce message a été envoyé via le formulaire de contact du portfolio</p>
                </div>
            </div>
        </body>
        </html>
        ';
        
        if ($currentLang === 'es') {
            $mail->Subject = "📨 Nuevo mensaje de contacto de " . $name;
            $mail->Body = str_replace(
                ['{TITLE}', '{LABEL_NAME}', '{NAME}', '{LABEL_EMAIL}', '{EMAIL}', '{LABEL_MESSAGE}', '{MESSAGE}'],
                ['Nuevo mensaje de contacto', 'Nombre', $name, 'Correo electrónico', $email, 'Mensaje', nl2br($message)],
                $emailTemplate
            );
        } elseif ($currentLang === 'en') {
            $mail->Subject = "📨 New contact message from " . $name;
            $mail->Body = str_replace(
                ['{TITLE}', '{LABEL_NAME}', '{NAME}', '{LABEL_EMAIL}', '{EMAIL}', '{LABEL_MESSAGE}', '{MESSAGE}'],
                ['New contact message', 'Name', $name, 'Email', $email, 'Message', nl2br($message)],
                $emailTemplate
            );
        } else {
            $mail->Subject = "📨 Nouveau message de contact de " . $name;
            $mail->Body = str_replace(
                ['{TITLE}', '{LABEL_NAME}', '{NAME}', '{LABEL_EMAIL}', '{EMAIL}', '{LABEL_MESSAGE}', '{MESSAGE}'],
                ['Nouveau message de contact', 'Nom', $name, 'Adresse e-mail', $email, 'Message', nl2br($message)],
                $emailTemplate
            );
        }

        $mail->AltBody = strip_tags($mail->Body);

        $mail->send();
        echo t('form_success');

    } catch (Exception $e) {
        error_log("Erreur PHPMailer: " . $mail->ErrorInfo);
        echo t('form_error') . $mail->ErrorInfo;
    }
}


