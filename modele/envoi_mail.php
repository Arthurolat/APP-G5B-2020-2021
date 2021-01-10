<?php
require("../modele/connexionbdd.php");
ini_set("SMTP", "gmail-smtp-in.l.google.com");
ini_set("smtp_port", 25);
ini_set("sendmail_from","appg5b@gmail.com");

/* Récupération des valeurs des champs du formulaire */
$nom = $_POST['nom'];
$mail = $_POST['mail'];
$message = $_POST['message'];

ini_set("SMTP", "gmail-smtp-in.l.google.com");
ini_set("smtp_port", 25);
ini_set("sendmail_from","appg5b@gmail.com");
  $dest = "appg5b@gmail.com";
  $sujet = "Formulaire de contact du site SYSTERRE";
  $msg = 'Mail envoyé depuis le formulaire de contact du site "SYSTERRE"';
  $msg .= 'Envoyé par '.$nom."\r\n\r\n";
  $msg .= 'Voici le message adressé :'."\r\n";
  $msg .= '****************************************'."\r\n\r\n";
  $msg .= $message."\r\n\r\n";
  $msg .= '****************************************'."\r\n";
 
  $headers = "From: appg5b@gmail.com";


  if (mail($dest, $sujet, $msg, $headers)) {
    echo "Email envoyé avec succès à $dest ...";
  } else {
    echo "Échec de l'envoi de l'email...";
  }

  
/*
$dest = 'appg5b@gmail.com';
$objet = 'Formulaire de contact';
*/

/* Message 
$msg = 'Mail envoyé depuis le formulaire de contact du site "SYSTERRE"';
$msg .= 'Envoyé par '.$prenom.' '.$nom."\r\n\r\n";
$msg .= 'Voici le message adressé :'."\r\n";
$msg .= '****************************************'."\r\n\r\n";
$msg .= $message."\r\n\r\n";
$msg .= '****************************************'."\r\n";
*/
/* En-têtes de l'e-mail 
$header = "From: <".$mail.">\n";
$header .= "Reply-To: ".$mail."\n";
$header .= "Content-Type: text/plain; charset=\"utf-8\"";
*/
/* Envoi de l'e-mail 
if (mail($dest, $objet, $msg, $header)){
    echo "Votre message a bien été envoyé."; 
} else {
    echo "Votre message n'a pas pu être envoyé.";
}
*/

?>