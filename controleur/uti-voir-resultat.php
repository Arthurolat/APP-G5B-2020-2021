<?php 
require("../modele/connexionbdd.php");
require("../modele/fonctions.php"); 

if(!isset($_SESSION['mail'])) {
    header('Location: http://localhost/APP-G5B-2020-2021/accueil.php');
    exit();
}
?>


<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/uti-accueil_mes_tests.css" />   <!-- css idem -->
    <link rel="stylesheet" href="../css/header.css" />
    <link rel="stylesheet" href="../css/footer.css" />
    <title>Page résutat des tests utilisateur</title>

</head>

<body>
    
    <?php include("header.php"); ?>


    <section>

        <div id=menuGauche>
            <ul id=barre_nav>
                <li id="ongletdebut">
                    <a href="uti-mon_profil.php"><img class="img-responsive" src="../images/icones/icone_profil.png" alt="icone messagerie" width=10px> Mon profil</a>
                </li>
                <li>
                    <a href=#><img class="img-responsive" src="../images/icones/icone_messagerie.png" alt="icone messagerie" width=10px> Messagerie</a>
                </li>
                <li>
                    <a class="active" href="uti-accueil_resultat_date.php"><img class="img-responsive" src="../images/icones/icon-survey.png" alt="icone resultats" width=10px> Consulter mes résultats</a>
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
                <div class="titre"><h1>RESULTATS SESSION DU </h1>
                <?php 
                //print_r($_SESSION['sessiontest_uti']); 
                
                    echo $_GET['datesession'];
                
                ?>
                </div>
                <div class="div-legende">
                    <div class="titre-legende"><h2>Légende</h2></div>
                    <div class="div-rond-vert"><h3>Temps de réaction compris entre 0s-2s</h3></div>
                    <div class="div-rond-jaune"><h3>Temps de réaction compris entre 2s-4s</h3></div>
                    <div class="div-rond-orange"><h3>Temps de réaction compris entre 4s-6s</h3></div>
                    <div class="div-rond-rouge"><h3>Temps de réaction compris entre 6s-8s</h3></div>
                    <div class="div-rond-noir"><h3>Temps de réaction > 8s</h3></div>

                    
                </div>

                <div id="div-test-son">
                    <div class="titre2"><h2>Temps de réaction à un son</h2></div>

                    <div class="div-test-son-inattendu"><h3>Son inattendu</h3>
                    <p>Temps: </p>
                    <p><img src="../images/rond_jaune.png"> </p>
                    </div>   
                 </div>


                <div id="div-test-lumière">
                    <div class="titre3"><h2>Temps de réaction à une lumière</h2></div>
                    <div class="div-test-lumière-attendue">
                        <div class= "titre-lumière-attendue"><h3>Lumière attendue</h3></div>
                        <div class="lumière-attendue-jour">
                            <h4>Noir</h4>
                            <p>Temps: </p>
                            <p><img src="../images/rond_orange.png"></p></div>
                    
                        <div class="champ-de-vision">
                        <h4>Champ de vision</h4>
                        <p>170°</p></div>
                    </div>
                   
                    
                    <div class="div-test-lumière-inattendue">
                        <div class="titre-lumière-inattendue"><h3>Lumière inattendue</h3></div>
                        <div class="lumière-inattendue-jour">
                            <h4>Jour</h4>
                            <p>Temps:  </p>
                            <p><img src="../images/rond_rouge.png"></p></div>
                    </div>
                </div>

                <div id="div-test-freq">
                    <div class="titre4"><h2>Fréquence cardiaque</h2></div>
                    <div class="div-effort">
                        <h3>Effort</h3>
                        <p></p>
                    </div>
                        
                    <div class="div-sans-effort">
                        <h3>Sans effort</h3>
                        <p></p>
                    </div>
                </div>

                <div id="div-test-temperature">
                    <div class="titre5"><h2>Température de la peau</h2></div>
                    <div class="div-effort">
                        <h3>Effort</h3>
                        <p></p>
                    </div>
                    <div class="div-sans-effort"> 
                        <h3>Sans effort</h3>
                        <p></p>
                    </div>
                </div>
                <div id="div-test-tonalite"> 
                <div class="titre6"><h2>Reconnaissance de tonalité</h2></div>
                <div class="div-test-tonalité-tableau">
                    <p>
                        <table>
                        <tr>
                            <th>Fréquence (Hz)</th>
                            <th>Son reproduit</th>

                        </tr>
                        <tr>
                            <td>250</td>
                            <td>oui</td>
                        </tr>
                        <tr>
                            <td>500</td>
                            <td>oui</td>
                            
                        </tr>
                        <tr>
                            <td>1000</td>
                            <td>oui</td>
                        </tr>
                        <tr>
                            <td>2000</td>
                            <td>oui</td>
                            
                        </tr>
                        <tr>
                            <td>3000</td>
                            <td>oui</td>
                            
                        </tr>
                        <tr>
                            <td>4000</td>
                            <td>oui</td>
                            
                        </tr>
                        <tr>
                            <td>8000</td>
                            <td>non</td>
                        
                        </tr>
                        </table>
                    </p>
            </div>

        </div>
    </section>

    <?php include("footer.php"); ?>


</body>