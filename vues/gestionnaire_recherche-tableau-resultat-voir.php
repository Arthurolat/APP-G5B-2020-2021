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
                    <a href="gestionnaire_mon-profil.php"><img class="img-responsive" src="../images/icones/icone_profil.png" alt="icone profil" width=10px> Mon profil</a>
                </li>
                <li>
                    <a href="gestionnaire_messagerie-accueil.php"><img class="img-responsive" src="../images/icones/icone_messagerie.png" alt="icone messagerie" width=10px> Messagerie</a>
                </li>
                <li>
                    <a href="gestionnaire_lancer-test1_connu.php"><img class="img-responsive" src="../images/icones/icon-survey.png" alt="icone resultats" width=10px> Lancer une session de tests </a>
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
                    <div class="titre2"><h2>Temps de réaction à un son</h2></div>

                    <div class="div-test-son-inattendu"><h3>Son inattendu</h3>
                        <?php
                        $soninnatendu=0;
                        while ($donnees = $reponse->fetch()){
                            if ($donnees['idcapteur']==1){
                                $soninnatendu=$donnees['valeur'];
                            }
                         } 
                            
                        
                          ?>
                    <p>Temps: <?php echo $soninnatendu ?> s</p>
                    <p><img src="../images/rond_jaune.png"> </p>
                    </div>   
                 </div>


                <div id="div-test-lumière">
                    <div class="titre3"><h2>Temps de réaction à une lumière</h2></div>
                    <div class="div-test-lumière-attendue">
                        <div class= "titre-lumière-attendue"><h3>Lumière attendue</h3></div>
                        
                        <div class="lumière-attendue-nuit">
                            <?php
                        $lumiere_attendue_noir=0;
                        while ($donnees = $reponse->fetch()){
                            if ($donnees['idcapteur']==2){
                                $lumiere_attendue_noir=$donnees['valeur'];
                            }
                         } 
                            
                        
                          ?>
                            <h4>Nuit</h4>
                            <p>Temps: <?php echo $lumiere_attendue_noir ?> s</p>
                            <p><img src="../images/rond_jaune.png"></p></div>
                        
                    </div>
                   
                    
                    <div class="div-test-lumière-inattendue">
                        <div class="titre-lumière-inattendue"><h3>Lumière inattendue</h3></div>
                        <div class="lumière-inattendue-jour">
                             <?php
                        $lumiere_inattendue_jour=0;
                        while ($donnees = $reponse->fetch()){
                            if ($donnees['idcapteur']==3){
                                $lumiere_inattendue_jour=$donnees['valeur'];
                            }
                         } 
                            
                        
                          ?>
                            <h4>Jour</h4>
                            <p>Temps: <?php echo $lumiere_inattendue_jour ?> s </p>
                            <p><img src="../images/rond_rouge.png"></p></div>
                        
                    </div>
                </div>

                <div id="div-test-freq">
                    <div class="titre4"><h2>Fréquence cardiaque</h2></div>
                    <div class="div-effort">
                        <?php
                        $freq_effort=0;
                        while ($donnees = $reponse->fetch()){
                            if ($donnees['idcapteur']==6){
                                $freq_effort=$donnees['valeur'] AND
                                $donnees['apres_effort']='oui' ;
                            }
                         } 
                         ?>
                        <h3>Effort</h3>
                        <p><?php echo $freq_effort ?> bits/s</p>
                    </div>
                        
                    <div class="div-sans-effort">
                        <?php
                        $freq_sans_effort=0;
                        while ($donnees = $reponse->fetch()){
                            if ($donnees['idcapteur']==6){
                                $freq_sans_effort=$donnees['valeur'] AND
                                $donnees['apres_effort']='non' ;
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
                        while ($donnees = $reponse->fetch()){
                            if ($donnees['idcapteur']==4){
                                $temp_effort=$donnees['valeur'] AND
                                $donnees['apres_effort']='non' ;
                            }
                         } 
                         ?>

                        <h3>Effort</h3>
                        <p> <?php echo $temp_effort ?> °</p>
                    </div>
                    <div class="div-sans-effort">
                        <?php
                        $temp_sans_effort=0;
                        while ($donnees = $reponse->fetch()){
                            if ($donnees['idcapteur']==4){
                                $temp_sans_effort=$donnees['valeur'] AND
                                $donnees['apres_effort']='non' ;
                            }
                         } 
                         ?>
                        <h3>Sans effort</h3>
                        <p> <?php echo $temp_sans_effort ?> °</p>
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