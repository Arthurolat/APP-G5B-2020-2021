<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8" />
        <title>Formulaire de contact</title>
        <link rel="stylesheet" href="../APP-G5B-2020-2021/css/formulaire_contact.css">
    </head>
    <body>
        
        <div id="corps">
            <div id="titre_contact">
                <h1>Formulaire de contact</h1>
                <h2>Envoyez-nous un petit message !</h2>
            </div>
            <div id="formulaire_contact">
                <form action="../APP-G5B-2020-2021/modele/envoi_mail.php" method="POST">
                    <input type="text" name="nom" id="form_control" placeholder="Nom" required /></br>
                    <input type="text" name="email" id="form_control" placeholder="Mail" required /></br>
                    <textarea name="message" id="form_control" placeholder="Message" rows="4" required></textarea></br>
                    <input type="submit" id="bouton_envoyer" value="ENVOYER" />
                </form>
            </div>
            <?php
                include('../vues/reponse-messagerie-externe.php');
            ?>
        </div>
    </body>
</html>