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
    <link rel="stylesheet" href="../css/gestionnaire_lancer-test4.css" />
    <link rel="stylesheet" href="../css/header.css" />
    <link rel="stylesheet" href="../css/footer.css" />
    <title>lancement session récapitulatif et clôture</title>

</head>

<body>

    <?php include("header.php"); ?>

    <section>

        <div id=menuGauche>
            <ul id=barre_nav>
                <li id="ongletdebut">
                    <a href="admin_mon-profil.php"><img class="img-responsive" src="../images/icones/icone_profil.png" alt="icone profil" width=10px> Mon profil</a>
                </li>
                <li>
                    <a href="admin_messagerie-accueil.php"><img class="img-responsive" src="../images/icones/icone_messagerie.png" alt="icone messagerie" width=10px> Messagerie</a>
                </li>
                <li>
                    <a class="active" href=#><img class="img-responsive" src="../images/icones/icon-survey.png" alt="icone resultats" width=10px> Lancer une session de tests </a>
                </li>
                <li>
                    <a href="admin_rechercher.php"><img class="img-responsive" src="../images/icones/icone_loupe.png" alt="icone loupe" width=10px> Recherche </a>
                </li>
                <li>
                    <a href="admin_analyse-test.php"><img class="img-responsive" src="../images/icones/icone_engrenage.png" alt="icone engrenage" width=10px> Analyse tests psychotechniques </a>
                </li>

                <p> Réglages :</p>
                <li>
                    <a href="admin_gestion-utilisateur.php"><img class="img-responsive" src="../images/icones/icone_utilisateurs.png" alt="icone utilisateurs" width=10px> Utilisateurs</a>
                </li>
                <li>
                    <a href="admin_gestion-des-capteurs.php"><img class="img-responsive" src="../images/icones/icone_capteur2.png" alt="icone capteur" width=10px> Capteurs</a>
                </li>
                <li id="ongletfin">
                    <a href="admin_gestion-faq"><img class="img-responsive" src="../images/icones/icone_faq.png" alt="icone faq" width=10px> F.A.Q</a>
                </li>

            </ul>

        </div>

        <div id=contenu>
            <h2> Lancement d'une session de tests </h2>

            <p>Voici un récapitulatif des tests réalisés. Cliquez sur "Clôturer" pour clôturer la session de tests psychotechniques. </p>

            <div class="step_progress">
                <ul>
                    <li class="ok">Démarrage session</li>
                    <li class="ok">Choisir le boitier</li>
                    <li class="ok">Phase tests</li>
                    <li class="ok">Validation</li>
                </ul>
            </div>

            <div class=formulaire>

                <table>
                    <tr class="theader">
                        <th>Heure</th>
                        <th>Test</th>
                        <th>Valeur</th>
                        <th>Unité de mesure</th>
                    </tr>
                    <tr>
                        <td>2020-11-11 16h45</td>
                        <td>Température superficielle de la peau avant effort</td>
                        <td>36.8</td>
                        <td>degrés</td>
                    </tr>
                    <tr>
                        <td>2020-11-11 16h50</td>
                        <td>Température superficielle de la peau après effort</td>
                        <td>37.9</td>
                        <td>degrés</td>
                    </tr>
                    <tr>
                        <td>2020-11-11 17h10</td>
                        <td>Fréquence cardiaque avant effort</td>
                        <td>80 </td>
                        <td>battement/s</td>
                    </tr>
                    <tr>
                        <td>2020-11-11 17h10</td>
                        <td>Fréquence cardiaque après effort</td>
                        <td>110 </td>
                        <td>battement/s</td>
                    </tr>
                    <tr>
                        <td>2020-11-11 17h10</td>
                        <td>Fréquence cardiaque après effort</td>
                        <td>110 </td>
                        <td>battement/s</td>
                    </tr>
                    <tr>
                        <td>xxx</td>
                        <td>xxx</td>
                        <td>xxx</td>
                        <td>xxx</td>
                    </tr>
                    <tr>
                        <td>xxx</td>
                        <td>xxx</td>
                        <td>xxx</td>
                        <td>xxx</td>
                    </tr>
                    <tr>
                        <td>xxx</td>
                        <td>xxx</td>
                        <td>xxx</td>
                        <td>xxx</td>
                    </tr>
                    <tr>
                        <td>xxx</td>
                        <td>xxx</td>
                        <td>xxx</td>
                        <td>xxx</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>ff</td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>


            </div>
            </br>
            <div class=controle>
                <div class="element1">
                    <p><a href="admin_lancer-test3.php">Retour</a></p>
                </div>
                <div class="element2">
                    <p><a href="admin_lancer-test1_connu.php">Clôturer</a></p>
                </div>
            </div>
        </div>
    </section>

    <?php include("footer.php"); ?>

</body>