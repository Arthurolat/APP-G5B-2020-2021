<?php
require("../modele/connexionbdd.php");
require("../modele/fonctions.php");

add_utilisateur($bdd);

function chaine_aleatoire($nb_car, $chaine = 'azertyuiopqsdfghjklmwxcvbn123456789')
{
    $nb_lettres = strlen($chaine) - 1;
    $generation = '';
    for($i=0; $i < $nb_car; $i++)
    {
        $pos = mt_rand(0, $nb_lettres);
        $car = $chaine[$pos];
        $generation .= $car;
    }
    return $generation;
}

$motdepasse=chaine_aleatoire(9);  //génère mdp aléatoire 
//echo $motdepasse; 

$requete= $bdd->prepare("UPDATE personne SET mdp=sha1('$motdepasse') WHERE idacteur=(SELECT max(idacteur) FROM personne)");
$requete->execute();        //crypte mdp dans la bdd

$requete_mail=$bdd->prepare("SELECT mail FROM personne WHERE idacteur=(SELECT max(idacteur) FROM personne)");
$requete_mail->execute();
while ($donnees = $requete_mail->fetch()){
    $mail_destination=$donnees['mail'];
}
//echo $mail_destination;
//echo $nom_uti;

//fonction envoi du mot de passe par mail à l'utilisateur
use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\Exception;
        use PHPMailer\PHPMailer\SMTP;

    // Load Composer's autoloader
    require_once ('../PHPMailer/autoload.php'); 
    require ('../PHPMailer/phpmailer/src/Exception.php');
    require ('../PHPMailer/phpmailer/src/PHPMailer.php');
    require ('../PHPMailer/phpmailer/src/SMTP.php');

    /* Récupération des valeurs des champs du formulaire */
    
    $mail = new PHPMailer();

    $mail->isSMTP();                                          // Send using SMTP
    $mail->SMTPAuth     = true;
    $mail->SMTPSecure   = 'ssl';                               
    $mail->Host         = 'smtp.gmail.com';                   // Set the SMTP server to send through
    $mail->Port         = 465;                                // TCP port to connect to, use 465 
    $mail->isHTML();                                   
    $mail->Username     = 'appg5b@gmail.com';                 // SMTP username
    $mail->Password     = 'appg5b2020';                       // SMTP password

    //from
    $mail->setFrom('appg5b@gmail.com');

    //reply to
    $mail->addReplyTo('no-reply-appg5b@gmail.com');

    //mail content
    $mail->Subject = 'Identifiant compte SYSTERRE';
    $mail->Body    = '<p style="color:black;">Bonjour '.$prenom_uti.',</p>';
    $mail->Body   .= '<p style="color:black;">Votre compte SYSTERRE a été créé avec succès. Vous pouvez d\'ors et déjà consulter les résultats de votre session de test.</p>'; 
    $mail->Body   .= '<p style="color:black;">Veuillez trouver ci-joint les informations nécessaires pour vous connecter :</p>';
    $mail->Body   .= '<p style="color:black;">- Votre identifiant : '.$mail_destination.'<br>';
    $mail->Body   .= '- Votre mot de passe : '.$motdepasse.'</p>';
    $mail->Body   .= '<p style="color:black;">(Pensez à personnaliser votre mot de passe lors de la première connexion.)</p>';
    $mail->Body   .= '<p>Bien cordialement,</p>';



    //to
    $mail->addAddress($mail_destination);

    $mail->send(); 
    
    /*if (!$mail->send()) {
        echo 'Erreur de Mailer : ' . $mail->ErrorInfo;
    } else {
        echo 'Le message a été envoyé.';
    }*/

header('Location:http://localhost/APP-G5B-2020-2021/controleur/gestionnaire_lancer-test1_connu.php'); 

?>