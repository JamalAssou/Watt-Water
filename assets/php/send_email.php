<?php
if(isset($_POST['submit'])) {
    $to = "devilmanpro.08@gmail.com"; // Adresse e-mail où vous souhaitez recevoir le message
    $from = $_POST['email']; // Adresse e-mail de l'expéditeur
    $name = $_POST['name']; // Nom de l'expéditeur
    $subject = $_POST['subject']; // Sujet du message
    $message = $_POST['message']; // Contenu du message

    // Construction du corps de l'e-mail
    $email_body = "Nom: $name\n".
                  "Email: $from\n".
                  "Message:\n$message";

    // Envoi de l'e-mail
    mail($to, $subject, $email_body);
}
?>
