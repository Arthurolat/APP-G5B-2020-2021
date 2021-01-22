<?php
use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\Exception;
        use PHPMailer\PHPMailer\SMTP;

function envoiMail(){
        // Load Composer's autoloader
        require_once ('../PHPMailer/autoload.php'); 
        require ('../PHPMailer/phpmailer/src/Exception.php');
        require ('../PHPMailer/phpmailer/src/PHPMailer.php');
        require ('../PHPMailer/phpmailer/src/SMTP.php');

        /* Récupération des valeurs des champs du formulaire */
        

        function valide_donnees($donnees){
            $donnees=trim($donnees); 
            $donnees=stripslashes($donnees); 
            $donnees=htmlspecialchars($donnees);
            $donnees=htmlentities($donnees); 
            return $donnees; 
        }
        $nom = valide_donnees($_POST['nom']);
        $email = valide_donnees($_POST['email']);
        $message = valide_donnees($_POST['message']);

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
        $mail->addReplyTo($email, $nom);

        //mail content
        $mail->Subject = 'Formulaire de contact SYSTERRE';
        $mail->Body    = '<p>Mail envoyé depuis le formulaire de contact du site "SYSTERRE" <br>';
        $mail->Body   .= 'Envoyé par : '.$nom.' &lt;'.$email.'&gt; </p>';
        $mail->Body   .= '<p>Voici le message adressé :</p>';
        $mail->Body   .= '<p>*******************************************************</p>';
        $mail->Body   .= $message;
        $mail->Body   .= '<p>*******************************************************</p>';


        //to
        $mail->addAddress('appg5b@gmail.com');

        if ($mail->send()) {
            echo '<script type="text/javascript" language="javascript">';
            echo "alert('Votre message a bien été envoyé !');";
            echo 'document.location.href="http://localhost/APP-G5B-2020-2021/accueil.php";';
            echo '</script>';
            //$notification="Votre message a bien été envoyé";
            //echo '<script type="text/javascript">window.alert("'.$notification.'");</script>';
            
        } else {
            echo '<script type="text/javascript" language="javascript">';
            echo "alert('Votre message n'a pas pu être envoyé.');";
            echo 'document.location.href="http://localhost/APP-G5B-2020-2021/accueil.php";';
            echo '</script>';
        }
        
}

envoiMail();

?>