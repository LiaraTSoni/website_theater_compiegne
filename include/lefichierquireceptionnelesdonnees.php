<?php


if (!isset($_POST["nom"]) OR mb_strlen($_POST["nom"]) == "") {
    die("Indiquez votre nom !");
}
if (!isset($_POST["email"]) OR mb_strlen($_POST["email"]) == "") {
    die("Indiquez votre email !");
}
if (!isset($_POST["message"]) OR mb_strlen($_POST["message"]) == "") {
    die("Indiquez votre message !");
}


$to  = 'regis@media-management.fr'; // Destinataire
$subject = 'Formulaire du site';



$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$headers .= 'From: info@media-management.fr' . "\r\n";

$message = "<p>Un message a été envoyé via le site Internet</p>";

$message .= "<pre>".print_r($_POST, true)."</pre>";


if (mail($to, $subject, $message, $headers)) {
    echo "Message envoye avec succes.";
} else {
    echo "Un erreur est survenue....Veuillez reessayer plus tard.";
}

?>