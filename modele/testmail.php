<?php
/* la fonction n'utilise pas la bdd */
/* la variable $corp est récuperée à l'aide d'un formulaire html */

//mdp boite mail : appg5b2020

ini_set("SMTP", "gmail-smtp-in.l.google.com"); //gmail-smtp-in.l.google.com
ini_set("smtp_port", 25);
ini_set("sendmail_from","appg5b@gmail.com");//appg5b@gmail.com
  $dest = "appg5b@gmail.com";
  $sujet = "formulaire de contact";
  $corp = "Aujourd'hui, je teste la fonction d'envoi d'un mail html en php. 
          Si le mail a été reçu dans la boite mail alors le test est validé. Sinon, c'est un echec.
          En espèrant que ça ne prendra pas trop longtemps pour résoudre ce problème.";
  $headers  = 'MIME-Version: 1.0' . "\n";
  $headers .= "From: appg5b@gmail.com";//appg5b@gmail.com


  if (mail($dest, $sujet, $corp, $headers)) {
    echo "Email envoyé avec succès à $dest ...";
  } else {
    echo "Échec de l'envoi de l'email...";
  }

?>