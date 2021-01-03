<?php
require("../modele/connexionbdd.php");

/* Récupération des valeurs des champs du formulaire */
$prenom = $_POST['prenom'];
$nom = $_POST['nom'];
$mail = $_POST['mail'];
$message = $_POST['message'];

/* Destinataire */
$to = 'claraaugie92@gmail.com';
 
/* Message */
$msg = 'Mail envoyé depuis le formulaire de contact du site "SYSTERRE"';
$msg .= 'Envoyé par '.$prenom.' '.$nom."\r\n\r\n";
$msg .= 'Voici le message adressé :'."\r\n";
$msg .= '****************************************'."\r\n";
$msg .= $message."\r\n";
$msg .= '****************************************'."\r\n";
 
/* En-têtes de l'e-mail */
$headers = 'Expéditeur: '.$nom.' <'.$mail.'>'."\r\n\r\n";
 
/* Envoi de l'e-mail */
$objet = 'Formulaire de contact';
if (mail($to, $objet, $msg, $headers)){
    echo "Votre message a bien été envoyé."; 
} else {
    echo "Votre message n'a pas pu être envoyé. ";
}


?>