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
    <link rel="stylesheet" href="../css/gestionnaire_messagerie-accueil.css" />
    <link rel="stylesheet" href="../css/header.css" />
    <link rel="stylesheet" href="../css/footer.css" />
    <title>Messagerie</title>

</head>

<body>

    <?php include("header.php"); ?>

    <section>

    <div id=menuGauche>
            <ul id=barre_nav>
                <li id="ongletdebut">
                    <a href="gestionnaire_mon-profil.php"><img class="img-responsive" src="../images/icones/icone_profil.png" alt="icone profil" width=10px> Mon profil</a>
                </li>
                <li>
                    <a class="active" href=#><img class="img-responsive" src="../images/icones/icone_messagerie.png" alt="icone messagerie" width=10px> Messagerie</a>
                </li>
                <li>
                    <a href="gestionnaire_lancer-test1_connu.php"><img class="img-responsive" src="../images/icones/icon-survey.png" alt="icone resultats" width=10px> Lancer une session de tests </a>
                </li>
                <li>
                    <a  href="gestionnaire_rechercher.php"><img class="img-responsive" src="../images/icones/icone_loupe.png" alt="icone loupe" width=10px> Recherche </a>
                </li>
                <li id="ongletfin">
                    <a href="gestionnaire_analyse-test.php"><img class="img-responsive" src="../images/icones/icone_engrenage.png" alt="icone engrenage" width=10px> Analyse tests psychotechniques </a>
                </li>

            </ul>

        </div>

        <div id=contenu>
            <h2> Boîte de réception </h2>
            <table>
                <tr class="theader">
                    <th>Date</th>
                    <th>Emetteur</th>
                    <th> </th>
                </tr>
                <tr>
                    <td>2020-11-11 à 16h45</td>
                    <td> Sanae EL MESSADI</td>
                    <td>
                        <p><a href=#>Ouvrir</a></p>
                    </td>
                </tr>
                <tr>
                    <td>2020-10-27 à 15h32</td>
                    <td>Thomas LE DEVENTEC</td>
                    <td>
                        <p><a href=#>Ouvrir</a></p>
                    </td>
                </tr>
                <tr>
                    <td>2020-10-27 à 15h32</td>
                    <td>Clara AUGIE</td>
                    <td>
                        <p><a href=#>Ouvrir</a></p>
                    </td>
                </tr>
                <tr>
                    <td>2020-10-27 à 15h16</td>
                    <td>Constantin CHEVALIER</td>
                    <td>
                        <p><a href=#>Ouvrir</a></p>
                    </td>
                </tr>
                <tr>
                    <td>2020-10-27 à 15h10</td>
                    <td>Guillaume JOLLY</td>
                    <td>
                        <p><a href=#>Ouvrir</a></p>
                    </td>
                </tr>
                <tr>
                    <td>2020-10-27 à 15h02</td>
                    <td>Arthur LATOURRETTE</td>
                    <td>
                        <p><a href=#>Ouvrir</a></p>
                    </td>
                </tr>
                <tr>
                    <td>2020-10-27 à 15h32</td>
                    <td>.....</td>
                    <td>
                        <p><a href=#>Ouvrir</a></p>
                    </td>
                </tr>
                <tr>
                    <td>2020-10-27 à 15h32</td>
                    <td>.....</td>
                    <td>
                        <p><a href=#>Ouvrir</a></p>
                    </td>
                </tr>
                <tr>
                    <td>2020-10-27 à 15h32</td>
                    <td>.....</td>
                    <td>
                        <p><a href=#>Ouvrir</a></p>
                    </td>
                </tr>
                <tr>
                    <td>2020-10-27 à 15h32</td>
                    <td>.....</td>
                    <td>
                        <p><a href=#>Ouvrir</a></p>
                    </td>
                </tr>
                
            </table>
            <br>
            <br>
            <div class="pagination">
                <div class="pages">
                    <a class="desactive"> &#60; Précédent</a>
                    <a class="active"> 1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#">4</a>
                    <a href="#">5</a>
                    <a class="etc">...</a>
                    <a href="#">Suivant &#62;</a>
                </div>
            </div>
            <br>
            <br>
        </div>
    </section>

    <?php include("footer.php"); ?>

</body>
