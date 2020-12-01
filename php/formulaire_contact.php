<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8" />
        <title>Formulaire de contact</title>
        <link rel="stylesheet" href="formulaire_contact.css">
    </head>

    <body>
        
        <div id="corps">
            <div id="titre_contact">
                <h1>Formulaire de contact</h1>
                <h2>Envoyez-nous un petit message !</h2>
            </div>
            
            <div id="formulaire_contact">
                <form action="" method="POST">
                    <input type="text" name="prenom" id="form_control" placeholder="Nom" required /></br>
                    <input type="text" name="nom" id="form_control" placeholder="Prénom" required /></br>
                    <textarea name="message" id="form_control" placeholder="Message" row="4" required></textarea></br>
                    <input type="submit" id="bouton_envoyer" value="ENVOYER" />
                </form>
            </div>
        </div>
    </body>
</html>