<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = htmlspecialchars($_POST['name']);
    $email   = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to      = "eli_tr@hotmail.es";
    $subject = "Nouveau message du Bureau des Chouettes";
    $body    = "Nom: $name\nEmail: $email\nMessage:\n$message";

    
    $headers = "From: \"Chouette Messagère\" <contact@caba3973.odns.fr>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";


    ini_set('sendmail_from', 'contact@caba3973.odns.fr');

    if (mail($to, $subject, $body, $headers)) {
        echo "Merci, ton message a bien été envoyé aux chouettes !";
    } else {
        echo "Désolé, une erreur est survenue lors de l'envoi de ton message.";
    }
}
?>
