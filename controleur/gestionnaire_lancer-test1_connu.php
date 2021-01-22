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
    <link rel="stylesheet" href="../css/gestionnaire_lancer-test1_connu.css" />
    <link rel="stylesheet" href="../css/header.css" />
    <link rel="stylesheet" href="../css/footer.css" />
    <title>lancement session attribution utilisateur connu-test </title>

</head>
<?php 
if ($_SERVER['HTTP_REFERER']="http://localhost/APP-G5B-2020-2021/controleur/gestionnaire_lancer-test1_inconnu.php")
    require("../modele/creation_nouvel_utilisateur.php");
}
?>
<body>

    <?php include("header.php"); ?>

    
    <section>

        <div id=menuGauche>
            <ul id=barre_nav>
                <li id="ongletdebut">
                    <a href="gestionnaire_mon-profil.php"><img class="img-responsive" src="../images/icone_profil.png" alt="icone profil" width=10px> Mon profil</a>
                </li>
                <li>
                    <a class="active" href=#><img class="img-responsive" src="../images/icon-survey.png" alt="icone resultats" width=10px> Lancer une session de tests </a>
                </li>
                <li>
                    <a href="gestionnaire_rechercher.php"><img class="img-responsive" src="../images/icone_loupe.png" alt="icone loupe" width=10px> Recherche </a>
                </li>
                <li id="ongletfin">
                    <a href="gestionnaire_analyse-test.php"><img class="img-responsive" src="../images/icone_engrenage.png" alt="icone engrenage" width=10px> Analyse tests psychotechniques </a>
                </li>

            </ul>

        </div>

        <div id=contenu>
            <h2> Lancement d'une session de tests </h2>

            <p>Pour lancer une session de tests, vous devez commencer par attribuer la session à un utilisateur.</p>

            <div class="step_progress">
                <ul>
                    <li class="ok">Démarrage session</li>
                    <li>Choisir le boitier</li>
                    <li>Phase tests</li>
                    <li>Validation</li>
                </ul>
            </div>

            <div class=onglet>
                <div class=element1>
                    <p>Utilisateur déjà existant</p>
                </div>
                <div class=element2>
                    <p><a href="gestionnaire_lancer-test1_inconnu.php">Créer un nouveau compte utilisateur</a></p>
                </div>
            </div>
            <div class=formulaire>

                <form method="post" action="gestionnaire_lancer-test2.php">
                    <p>
                        <fieldset>
                            <p><label>Nom de famille: </label>
                            <input type="text" name="nom" size="50" placeholder="" required></p>
                            <p><label>Prénoms :</label>
                            <input type="text" name="prenom" size="50" placeholder="" required></p>
                            <p><label>Date et heure : </label>
                            <input type="datetime-local" name="date" required></p>
                            <p class="bouton"><input type="submit" value="Suivant" /></p>
                        </fieldset>
                    </p>
                </form>

                <!-- <p>
                    <a href="uti-gestionnaire_lancer-test2.html">Suivant</a>
                </p>
                -->

            </div>
            </br>

        </div>
    </section>


    <?php include("footer.php"); ?>

</body>