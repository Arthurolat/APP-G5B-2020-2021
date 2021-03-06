<?php
require("../modele/connexionbdd.php");
require("../modele/fonctions.php");
?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/uti-accueil_resultat_date.css" />
    <link rel="stylesheet" href="../css/header.css" />
    <link rel="stylesheet" href="../css/footer.css" />
    <title>Page résultat par date de l'utilisateur</title>

</head>

<body>

    <?php include("header.php"); ?>

    <section>

        <div id=menuGauche>
            <ul id=barre_nav>
                <li id="ongletdebut">
                    <a href="uti-mon_profil.php"><img class="img-responsive" src="../images/icones/icone_profil.png" alt="icone profil" width=10px> Mon profil</a>
                </li>
                <li>
                    <a href="#"><img class="img-responsive" src="../images/icones/icone_messagerie.png" alt="icone messagerie" width=10px> Messagerie</a>
                </li>
                <li>
                    <a class="active" href=#><img class="img-responsive" src="../images/icones/icon-survey.png" alt="icone resultats" width=10px> Consulter mes résultats</a>
                </li>
                <li>
                    <a href="uti-accueil_mes_tests.php"><img class="img-responsive" src="../images/icones/icone_folder.png" alt="icone report" width=10px> Analyse de mes tests</a>
                    <ul>
                        <li><a href="uti-accueil_mes_tests.php#div-test-son">1. Temps de réaction à un son</a></li>
                        <li><a href="uti-accueil_mes_tests.php#div-test-lumière">2. Temps de réaction à une lumière</a></li>
                        <li><a href="uti-accueil_mes_tests.php#div-test-freq">3. Fréquence cardiaque</a></li>
                        <li><a href="uti-accueil_mes_tests.php#div-test-temperature">4. Température de la peau</a></li>
                        <li id="ongletfin"><a href="uti-accueil_mes_tests.php#div-test-tonalite">5. Reconnaissance de tonalité</a></li>
                    </ul>
                </li>

            </ul>

        </div>

        <div id=contenu>
            <h2> Mes résultats </h2>
            <?php
                $reponse=session_users ($bdd, $_SESSION['mail']);
            ?>                 
            
            <table>
                <tr class="theader">
                    <th>Date</th>
                    <th>Tests réalisés</th>
                    <th> </th>
                </tr>

                <?php 
                while ($donnees = $reponse->fetch())                                      
                {   
                ?>
                <tr>
                    <td>Session réalisée le <?php echo $donnees['datesession']?></td>
                    <td><?php echo '- '.$donnees['test']?></td>
                    <?php
                        echo 
                        '<td>
                            <p><a href="uti-voir-resultat.php?datesession='.$donnees['datesession'].'">Voir</a></p>
                        </td>'
                    ?>
                </tr>
                <?php }   
                ?>
            </table>    
            
            
            <br>
            <br>
            
            <!-- 
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
            -->
            <br>
            <br>
        </div>
    </section>

    <?php include("footer.php"); ?>

</body>