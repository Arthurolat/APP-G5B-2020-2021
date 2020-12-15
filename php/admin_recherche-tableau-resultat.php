<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/gestionnaire_recherche-tableau-resultat.css" /> <!-- css idem -->
    <link rel="stylesheet" href="../css/header.css" />
    <link rel="stylesheet" href="../css/footer.css" />
    <title>Page d'accueil</title>

</head>


<body>

    <?php include("header.php"); ?>

    <section>

    <div id=menuGauche>
            <ul id=barre_nav>
                <li id="ongletdebut">
                    <a href=mon_profil.php><img class="img-responsive" src="../images/icones/icone_profil.png" alt="icone profil" width=10px> Mon profil</a>
                </li>
                <li>
                    <a href=messagerie.php><img class="img-responsive" src="../images/icones/icone_messagerie.png" alt="icone messagerie" width=10px> Messagerie</a>
                </li>
                <li>
                    <a  href="admin_lancer-test1_connu.php"><img class="img-responsive" src="../images/icones/icon-survey.png" alt="icone resultats" width=10px> Lancer une session de tests </a>
                </li>
                <li>
                    <a class="active" href="admin_rechercher.php"><img class="img-responsive" src="../images/icones/icone_loupe.png" alt="icone loupe" width=10px> Recherche </a>
                </li>
                <li>
                    <a href=#><img class="img-responsive" src="../images/icones/icone_engrenage.png" alt="icone engrenage" width=10px> Analyse tests psychotechniques </a>
                </li>

                <p> Réglages :</p>
                <li>
                    <a href="admin_gestion-utilisateur.php"><img class="img-responsive" src="../images/icones/icone_utilisateurs.png" alt="icone utilisateurs" width=10px> Utilisateurs</a>
                </li>
                <li>
                    <a href="admin_gestion-des-capteurs.php"><img class="img-responsive" src="../images/icones/icone_capteur2.png" alt="icone capteur" width=10px> Capteurs</a>
                </li>
                <li id="ongletfin">
                    <a href=#><img class="img-responsive" src="../images/icones/icone_faq.png" alt="icone faq" width=10px> F.A.Q</a>
                </li>

            </ul>

        </div>

        <div id=contenu>
            <h2> Résultats </h2>
            <table>
                <tr class="theader">
                    <th>Utilisateur</th>
                    <th>Date</th>
                    <th>Tests réalisés</th>
                    <th> </th>
                </tr>
                <tr>
                    <td>Clara Augié</td>
                    <td>Session réalisée le </br> 2020-11-11 à 16h45</td>
                    <td>test son, test fréquence, test température de peau</td>
                    <td>
                        <p>Voir</p>
                    </td>
                </tr>
                <tr>
                    <td>Arthur Latourrette</td>
                    <td>Session réalisée le </br> 2020-10-27 à 15h32</td>
                    <td>test son, test lumière, test fréquence</td>
                    <td>
                        <p>Voir</p>
                    </td>
                </tr>
                <tr>
                    <td>Sanae El Messadi</td>
                    <td>Session réalisée le </br> 2020-10-27 à 15h32</td>
                    <td>test son, test lumière, test fréquence</td>
                    <td>
                        <p>Voir</p>
                    </td>
                </tr>
                <tr>
                    <td>Thomas Le Deventec</td>
                    <td>Session réalisée le </br> 2020-10-27 à 15h32</td>
                    <td>test son, test lumière, test fréquence</td>
                    <td>
                        <p>Voir</p>
                    </td>
                </tr>
                <tr>
                    <td>Guillaume Jolly</td>
                    <td>Session réalisée le </br> 2020-10-27 à 15h32</td>
                    <td>test son, test lumière, test fréquence</td>
                    <td>
                        <p>Voir</p>
                    </td>
                </tr>
                <tr>
                    <td>Costantin Chevalier</td>
                    <td>Session réalisée le </br> 2020-10-27 à 15h32</td>
                    <td>test son, test lumière, test fréquence</td>
                    <td>
                        <p>Voir</p>
                    </td>
                </tr>

            </table>
            </br>
            </br>
            </br>

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
            </br>
            </br>
        </div>
    </section>

    <?php include("footer.php"); ?>
    
</body>