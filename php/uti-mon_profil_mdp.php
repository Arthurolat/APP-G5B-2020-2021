<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/uti-mon_profil_mdp.css" />
    <link rel="stylesheet" href="../css/header.css" />
    <link rel="stylesheet" href="../css/footer.css" />
    <title>Confidentialité et Sécurité</title>
    

</head>

<body>
    <?php include("header.php"); ?>

    <section>

        <div id=menuGauche>
            <ul id=barre_nav>
                <li id="ongletdebut">
                    <a class="active" href=#><img class="img-responsive" src="../images/icones/icone_profil.png" alt="icone messagerie" width=10px> Mon profil</a>
                </li>
                <li>
                    <a href="#"><img class="img-responsive" src="../images/icones/icone_messagerie.png" alt="icone messagerie" width=10px> Messagerie</a>
                </li>
                <li>
                    <a href="uti-accueil_resultat_date.php"><img class="img-responsive" src="../images/icones/icon-survey.png" alt="icone resultats" width=10px> Consulter mes résultats</a>
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
            <h2><IMG class="profil" src="../images/photos_membres/thomas.png" alt="Thomas LE DEVENTEC" width=120px>
            Thomas Le Deventec</h2>
            


            <div class=onglet>
                <div class=element1>
                    <p>Confidentialité et Sécurité</p>
                </div>
                <div class=element2>
                    <p><a href="uti-mon_profil.php">Informations personnelles</a></p>
                </div>
            </div>
           <div class=formulaire >
                <form method="post" action="#">
                    <p>
                        <fieldset>
                            
                            <p><label>Mot de passe actuel : <input type="text" name="Mdp" size="50" placeholder="mot de passe"></label></p>
                            <p><label>Nouveau mot de passe : <input type="text" name="Mdp" size="50" placeholder="nouveau mot de passe"></label></p>
                            <p><label>Confirmer le nouveau mot de passe : <input type="text" name="Mdp" size="50" placeholder="confirmer mot de passe"></label></p>
                            
                            <p class="bouton"><input type="submit" value="Valider" align="right"></p>
                            
                        </fieldset>
                    </p>
                
                </form>
            </div>
            </br>

        </div>
        </section>

        <?php include("footer.php"); ?>

</body>
</html>