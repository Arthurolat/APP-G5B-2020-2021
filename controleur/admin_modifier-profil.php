<?php 
require("../modele/connexionbdd.php");



if(!isset($_SESSION['mail'])) {
    header('Location: http://localhost/APP-G5B-2020-2021/accueil.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/admin_modifier-profil.css" />
    <link rel="stylesheet" href="../css/header.css" />
    <link rel="stylesheet" href="../css/footer.css" />
    <title>Gestion Utilisateur</title>
    

</head>

<body>
    
    <?php include("header.php"); ?>
        
    <section>

        <div id=menuGauche>
            <ul id=barre_nav>
                <li id="ongletdebut">
                    <a href="admin_mon-profil.php"><img class="img-responsive" src="../images/icone_profil.png" alt="icone profil" width=10px> Mon profil</a>
                </li>
                <li>
                    <a href="admin_messagerie-accueil.php""><img class="img-responsive" src="../images/icone_messagerie.png" alt="icone messagerie" width=10px> Messagerie</a>
                </li>
                <li>
                    <a href="admin_lancer-test1_connu.php"><img class="img-responsive" src="../images/icon-survey.png" alt="icone resultats" width=10px> Lancer une session de tests </a>
                </li>
                <li>
                    <a href="admin_rechercher.php"><img class="img-responsive" src="../images/icone_loupe.png" alt="icone loupe" width=10px> Recherche </a>
                </li>
                <li>
                    <a href="admin_analyse-test.php"><img class="img-responsive" src="../images/icone_engrenage.png" alt="icone engrenage" width=10px> Analyse tests psychotechniques </a>
                </li>

                <p> Réglages :</p>
                <li>
                    <a class="active" href="admin_gestion-utilisateur.php"><img class="img-responsive" src="../images/icone_utilisateurs.png" alt="icone utilisateurs" width=10px> Utilisateurs</a>
                </li>
                <li>
                    <a href="admin_gestion-des-capteurs.php"><img class="img-responsive" src="../images/icone_capteur2.png" alt="icone capteur" width=10px> Capteurs</a>
                </li>
                <li id="ongletfin">
                    <a href="admin_gestion-faq"><img class="img-responsive" src="../images/icone_faq.png" alt="icone faq" width=10px> F.A.Q</a>
                </li>

            </ul>

        </div>
            
        <div id=contenu>
            <h2> Modification du profil </h2>


            <div class=formulaire >
                <form method="post" action="#">
                    <fieldset>

                        <p><label>Nom : <input type="text" name="nom" size="50" placeholder="nom" value="<?= $personne['nom'];?>"></label></p>

                        <p><label>Prénom : <input type="text" name="prenom" size="50" placeholder="prénom" value="<?= $personne['prenom'];?>"></label></p>

                        <p><label>Email : <input type="email" name="email" size="50" placeholder="email" value="<?= $personne['mail'];?>"></label></p>

                        <p><label>Date de naissance : <input type="date" name="date" value="<?= $personne['dateNaissance'];?>"></label></p>

                        <p><label>Numero de téléphone : <input type="tel" name="tel" maxlength="10" placeholder="tel" value="<?= $personne['tel'];?>"></label></p>

                        <p><label>Adresse : <input type="text" name="adresse" size="50" placeholder="rue" value="<?= $personne['adresse'];?>"></label></p>

                        <p><label>Mot de passe : <input type="text" name="Mdp" size="50" placeholder="mot de passe" value="<?= $personne['mdp'];?>"></label></p>

                        <p><label>Statut : </label>
                            <select id="statut" name="idstatut"> 
                            <option value="Utilisateur">Utilisateur</option>
                            <option value="Gestionnaire">Gestionnaire</option>
                            <option value="Administrateur">Administrateur</option>
                            </select>
                        </p>
                        <p class="bouton"><input type="submit" value="Valider" align="right"></p>
                    
                    </fieldset>
                </form>
        
            </div>
        </div>

    </section>
        

    <?php include("footer.php"); ?>

</body>

</html>
