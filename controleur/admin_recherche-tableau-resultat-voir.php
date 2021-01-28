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
    <link rel="stylesheet" href="../css/gestionnaire_recherche-tableau-resultat-voir.css" />   <!-- css idem -->
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
                    <a href="admin_mon-profil.php"><img class="img-responsive" src="../images/icones/icone_profil.png" alt="icone profil" width=10px> Mon profil</a>
                </li>
                <li>
                    <a  href="admin_lancer-test1_connu.php"><img class="img-responsive" src="../images/icones/icon-survey.png" alt="icone resultats" width=10px> Lancer une session de tests </a>
                </li>
                <li>
                    <a class="active" href="admin_rechercher.php"><img class="img-responsive" src="../images/icones/icone_loupe.png" alt="icone loupe" width=10px> Recherche </a>
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
                    <a href="admin_gestion-faq.php"><img class="img-responsive" src="../images/icones/icone_faq.png" alt="icone faq" width=10px> F.A.Q</a>
                </li>

            </ul>

        </div>


        <div id=contenu>
                <div class="titre"><h1>RESULTATS SESSION DU 2020-12-01</h1></div>
                <div class="div-legende">
                    <div class="titre-legende"><h2>Légende</h2></div>
                    <div class="div-rond-vert"><h3>Temps de réaction compris entre 0s-2s</h3></div>
                    <div class="div-rond-jaune"><h3>Temps de réaction compris entre 2s-4s</h3></div>
                    <div class="div-rond-orange"><h3>Temps de réaction compris entre 4s-6s</h3></div>
                    <div class="div-rond-rouge"><h3>Temps de réaction compris entre 6s-8s</h3></div>
                    <div class="div-rond-noir"><h3>Temps de réaction > 8s</h3></div>

                    
                </div>

                <div id="div-test-son">
                    <div class="titre2" name="Tempsson"><h2>Temps de réaction à un son</h2></div>

                    <div class="div-test-son-attendu"><h3>Son attendu</h3>
                        <p>Temps: 1:02 s</p>
                        <p><img src="../images/rond_vert.png"></p>
                    </div>
                    <div class="div-test-son-inattendu"><h3>Son inattendu</h3>
                    <p>Temps: 2:06 s</p>
                    <p><img src="../images/rond_jaune.png"> </p>
                    </div>   
                 </div>


                <div id="div-test-lumière">
                    <div class="titre3" name=Tempslumière><h2>Temps de réaction à une lumière</h2></div>
                    <div class="div-test-lumière-attendue">
                        <div class= "titre-lumière-attendue"><h3>Lumière attendue</h3></div>
                        <div class="lumière-attendue-jour">
                            <h4>Jour</h4>
                            <p>Temps: 5.03s </p>
                            <p><img src="../images/rond_orange.png"></p></div>
                        <div class="lumière-attendue-nuit">
                            <h4>Nuit</h4>
                            <p>Temps: 3.01 s</p>
                            <p><img src="../images/rond_jaune.png"></p></div>
                        <div class="champ-de-vision">
                        <h4>Champ de vision</h4>
                        <p>170°</p></div>
                    </div>
                   
                    
                    <div class="div-test-lumière-inattendue">
                        <div class="titre-lumière-inattendue"><h3>Lumière inattendue</h3></div>
                        <div class="lumière-inattendue-jour">
                            <h4>Jour</h4>
                            <p>Temps: 7.03s </p>
                            <p><img src="../images/rond_rouge.png"></p></div>
                        <div class="lumière-inattendue-nuit">
                                <h4>Nuit</h4>
                                <p>Temps: 5.01 s</p>
                                <p><img src="../images/rond_orange.png"></p></div>
                    </div>
                </div>

                <div id="div-test-freq" name="Freqcardiaque">
                    <div class="titre4"><h2>Fréquence cardiaque</h2></div>
                    <div class="div-effort">
                        <h3>Effort</h3>
                        <p>80 bits/s</p>
                    </div>
                        
                    <div class="div-sans-effort">
                        <h3>Sans effort</h3>
                        <p>100 bits/s</p>
                    </div>
                </div>

                <div id="div-test-temperature" name="Température">
                    <div class="titre5"><h2>Température de la peau</h2></div>
                    <div class="div-effort">
                        <h3>Effort</h3>
                        <p>36.5°</p>
                    </div>
                    <div class="div-sans-effort"> 
                        <h3>Sans effort</h3>
                        <p>39.2°</p>
                    </div>
                </div>
                <div id="div-test-tonalite" name="Tonalité"> 
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