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
    <title>Page résultat des tests utilisateur</title>

</head>

<body>
    
<<<<<<< HEAD
    <?php include("../controleur/header.php"); ?>
=======
    <?php include("header.php"); ?>
>>>>>>> dc8f9ba45104f468320d2556e885f39733bba52f

    <section>
        <form action='impression.php' method="POST">
                        <input type="hidden" value="<?php echo $idacteur ?>" name="idacteur">
                        <input type="hidden" value= " <?php echo $datesession ?>" name="datesession">
                        <button type="submit"> Imprimer </button>
                    </form>

        <div id=menuGauche>
            <ul id=barre_nav>
                <li id="ongletdebut">
                    <a href="gestionnaire_mon-profil.php"><img class="img-responsive" src="../images/icones/icone_profil.png" alt="icone profil" width=10px> Mon profil</a>
                </li>
                <li>
<<<<<<< HEAD
                    <a href="admin_lancer-test1_connu.php"><img class="img-responsive" src="../images/icon-survey.png" alt="icone resultats" width=10px> Lancer une session de tests </a>
=======
                    <a href="gestionnaire_messagerie-accueil.php"><img class="img-responsive" src="../images/icones/icone_messagerie.png" alt="icone messagerie" width=10px> Messagerie</a>
                </li>
                <li>
                    <a href="gestionnaire_lancer-test1_connu.php"><img class="img-responsive" src="../images/icones/icon-survey.png" alt="icone resultats" width=10px> Lancer une session de tests </a>

                    <a href="admin_lancer-test1_connu.php"><img class="img-responsive" src="../images/icon-survey.png" alt="icone resultats" width=10px> Lancer une session de tests </a>

>>>>>>> dc8f9ba45104f468320d2556e885f39733bba52f
                </li>
                <li>
                    <a class="active" href=#><img class="img-responsive" src="../images/icones/icone_loupe.png" alt="icone loupe" width=10px> Recherche </a>
                </li>
                <li id="ongletfin">
                    <a href="gestionnaire_analyse-test.php"><img class="img-responsive" src="../images/icones/icone_engrenage.png" alt="icone engrenage" width=10px> Analyse tests psychotechniques </a>
                </li>

            </ul>

        </div>


        <div id=contenu>
                <div class="titre"><h1>ANALYSE DES RESULTATS </h1></div>
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
                        <?php
                        $soninnatendu=0;
                        $table= array();
                        while ($donnees = $reponse->fetch()){
                            array_push($table, $donnees);
                            
                         } 
                         for ($i=0; $i < count($table) ; $i++) { 
                            if ($table[$i]['idcapteur']==1){
                                $soninnatendu=$table[$i]['valeur'];
                            }
                         }
                         
                            //print_r($table);
                        
                          ?>
                    <p>Temps: <?php echo $soninnatendu ?> s</p>
                    <p><?php 
                    if (floatval($soninnatendu) >= 0 && floatval($soninnatendu) <= 2) {?>
                        <img src="../images/rond_vert.png">
                    <?php
                }elseif (floatval($soninnatendu) > 2 && floatval($soninnatendu) <= 4) {?>
                    <img src="../images/rond_jaune.png"> 
                    <?php
                }elseif (floatval($soninnatendu) > 4 && floatval($soninnatendu) <= 6) {?>
                    <img src="../images/rond_orange.png"> 
                    <?php
                }elseif (floatval($soninnatendu) > 6 && floatval($soninnatendu) <= 8) {?>
                    <img src="../images/rond_rouge.png"> 
                    <?php
                }elseif (floatval($soninnatendu) > 8) {?>
                    <img src="../images/rond_noir.png"> 
                    <?php
                }  
                    ?> </p>
                    </div>   
                 </div>


                <div id="div-test-lumière">
                    <div class="titre3"><h2>Temps de réaction à une lumière</h2></div>
                    <div class="div-test-lumière-attendue">
                        <div class= "titre-lumière-attendue"><h3>Lumière attendue</h3></div>
                        
                        <div class="lumière-attendue-nuit">
                            <?php
                        $lumiere_attendue_noir=0;
                        for ($i=0; $i < count($table) ; $i++) { 
                            if ($table[$i]['idcapteur']==2){
                                $lumiere_attendue_noir=$table[$i]['valeur'];
                            }
                         }
                            
                        
                          ?>
                            <h4>Nuit</h4>
                            <p>Temps: <?php echo $lumiere_attendue_noir ?> s</p>
                            <p><?php 
                    if (floatval($lumiere_attendue_noir) >= 0 && floatval($lumiere_attendue_noir) <= 2) {?>
                        <img src="../images/rond_vert.png">
                    <?php
                }elseif (floatval($lumiere_attendue_noir) > 2 && floatval($lumiere_attendue_noir) <= 4) {?>
                    <img src="../images/rond_jaune.png"> 
                    <?php
                }elseif (floatval($lumiere_attendue_noir) > 4 && floatval($lumiere_attendue_noir) <= 6) {?>
                    <img src="../images/rond_orange.png"> 
                    <?php
                }elseif (floatval($lumuiere_attendue_noir) > 6 && floatval($lumiere_attendue_noir) <= 8) {?>
                    <img src="../images/rond_rouge.png"> 
                    <?php
                }elseif (floatval($lumiere_attendue_noir) > 8) {?>
                    <img src="../images/rond_noir.png"> 
                    <?php
                }  
                    ?> </p>
                            </div>
                        
                    </div>
                   
                    
                    <div class="div-test-lumière-inattendue">
                        <div class="titre-lumière-inattendue"><h3>Lumière inattendue</h3></div>
                        <div class="lumière-inattendue-jour">
                             <?php
                        $lumiere_inattendue_jour=0;
                       for ($i=0; $i < count($table) ; $i++) { 
                            if ($table[$i]['idcapteur']==3){
                                $lumiere_inattendue_jour=$table[$i]['valeur'];
                            }
                         }
                            
                        
                          ?>
                            <h4>Jour</h4>
                            <p>Temps: <?php echo $lumiere_inattendue_jour ?> s </p>
                            <p><?php 
                    if (floatval($lumiere_inattendue_jour) >= 0 && floatval($lumiere_inattendue_jour) <= 2) {?>
                        <img src="../images/rond_vert.png">
                    <?php
                }elseif (floatval($lumiere_inattendue_jour) > 2 && floatval($lumiere_inattendue_jour) <= 4) {?>
                    <img src="../images/rond_jaune.png"> 
                    <?php
                }elseif (floatval($lumiere_inattendue_jour) > 4 && floatval($lumiere_inattendue_jour) <= 6) {?>
                    <img src="../images/rond_orange.png"> 
                    <?php
                }elseif (floatval($lumiere_inattendue_jour) > 6 && floatval($lumiere_inattendue_jour) <= 8) {?>
                    <img src="../images/rond_rouge.png"> 
                    <?php
                }elseif (floatval($lumiere_inattendue_jour) > 8) {?>
                    <img src="../images/rond_noir.png"> 
                    <?php
                }  
                    ?> </p>
                            
                            </div>
                        
                    </div>
                </div>

                <div id="div-test-freq">
                    <div class="titre4"><h2>Fréquence cardiaque</h2></div>
                    <div class="div-effort">
                        <?php
                        $freq_effort=0;
                        for ($i=0; $i < count($table) ; $i++) { 
                            if ($table[$i]['idcapteur']==6 && $table[$i]['apres_effort']== 'oui'){
                                $freq_effort=$table[$i]['valeur'];
                            }
                         }
                         ?>
                        <h3>Effort</h3>
                        <p><?php echo $freq_effort ?> bits/s</p>
                    </div>
                        
                    <div class="div-sans-effort">
                        <?php
                        $freq_sans_effort=0;
                        for ($i=0; $i < count($table) ; $i++) { 
                            if ($table[$i]['idcapteur']==6 && $table[$i]['apres_effort']== 'non'){
                                $freq_sans_effort=$table[$i]['valeur'];
                            }
                         }
                         ?>
                        <h3>Sans effort</h3>
                        <p>  <?php echo $freq_sans_effort ?> bits/s</p>
                    </div>
                </div>

                <div id="div-test-temperature">
                    <div class="titre5"><h2>Température de la peau</h2></div>
                    <div class="div-effort">
                        <?php
                        $temp_effort=0;
                        for ($i=0; $i < count($table) ; $i++) { 
                            if ($table[$i]['idcapteur']==4 && $table[$i]['apres_effort']== 'oui'){
                                $freq_effort=$table[$i]['valeur'];
                            }
                         }
                         ?>

                        <h3>Effort</h3>
                        <p> <?php echo $temp_effort ?> °</p>
                    </div>
                    <div class="div-sans-effort">
                        <?php
                        $temps_sans_effort=0;
                        for ($i=0; $i < count($table) ; $i++) { 
                            if ($table[$i]['idcapteur']==4 && $table[$i]['apres_effort']== 'oui'){
                                $temps_sans_effort=$table[$i]['valeur'];
                            }
                         }
                         ?>
                        <h3>Sans effort</h3>
                        <p> <?php echo $temps_sans_effort ?> °</p>
                    </div>
                </div>
                <div id="div-test-tonalite"> 
                <div class="titre6"><h2>Reconnaissance de tonalité</h2></div>
                <div class="div-test-tonalité-tableau">
                    <?php
                        $tonalite=0;
                        
                            
                        
                          ?>
                    
                    <p>
                        <table>
                        <tr>
                            <th>Fréquence (Hz)</th>
                            <th>Son reproduit</th>

                        </tr>
                        <tr>
                            <td>250</td>
                            <td><?php 
                            for ($i=0; $i < count($table) ; $i++) { 
                            if ($table[$i]['idcapteur']==5 && $table[$i]['valeur']== 250){
                                echo $table[$i]['son_reproduit'];
                            }
                         }?></td>
                        </tr>
                        <tr>
                            <td>500</td>
                            <td><?php 
                            for ($i=0; $i < count($table) ; $i++) { 
                            if ($table[$i]['idcapteur']==5 && $table[$i]['valeur']== 500){
                                echo $table[$i]['son_reproduit'];
                            }
                         }?></td>
                            
                        </tr>
                        <tr>
                            <td>1000</td>
                            <td><?php 
                            for ($i=0; $i < count($table) ; $i++) { 
                            if ($table[$i]['idcapteur']==5 && $table[$i]['valeur']== 1000){
                                echo $table[$i]['son_reproduit'];
                            }
                         }?></td>
                        </tr>
                        <tr>
                            <td>2000</td>
                            <td><?php 
                            for ($i=0; $i < count($table) ; $i++) { 
                            if ($table[$i]['idcapteur']==5 && $table[$i]['valeur']== 2000){
                                echo $table[$i]['son_reproduit'];
                            }
                         }?></td>
                            
                        </tr>
                        <tr>
                            <td>3000</td>
                            <td><?php 
                            for ($i=0; $i < count($table) ; $i++) { 
                            if ($table[$i]['idcapteur']==5 && $table[$i]['valeur']== 3000){
                                echo $table[$i]['son_reproduit'];
                            }
                         }?></td>
                            
                        </tr>
                        <tr>
                            <td>4000</td>
                            <td><?php 
                            for ($i=0; $i < count($table) ; $i++) { 
                            if ($table[$i]['idcapteur']==5 && $table[$i]['valeur']== 4000){
                                echo $table[$i]['son_reproduit'];
                            }
                         }?></td>
                            
                        </tr>
                        <tr>
                            <td>8000</td>
                            <td><?php 
                            for ($i=0; $i < count($table) ; $i++) { 
                            if ($table[$i]['idcapteur']==5 && $table[$i]['valeur']== 8000){
                                echo $table[$i]['son_reproduit'];
                            }
                         }?></td>
                        
                        </tr>
                        </table>
                    </p>
            </div>

        </div>
    </section>

    <?php include("footer.php"); ?>


</body>