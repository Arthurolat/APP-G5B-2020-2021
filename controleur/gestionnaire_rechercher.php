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
    <!--<link rel="stylesheet" type ="text/css" href="../css/cssaccueil_admin.css" />-->
    <link rel="stylesheet" type="text/css" href="../css/Interface_RechercherCSS.css">   <!-- css idem que admin -->
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
                    <a href="gestionnaire_mon-profil.php"><img class="img-responsive" src="../images/icones/icone_profil.png" alt="icone profil" width=10px> Mon profil</a>
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

        <div id="contenu">

            <h2> Rechercher un test </h2>
                <form method="post" action="gestionnaire_recherche-tableau-resultat.php">
                    <fieldset>
                    <div class="div1">
                        <label for="Nomdutilisateurinput">Nom de l'utilisateur :</label>
                        <input type="text" name="Nomutilisateur" id="nomdutilisateurinput" placeholder="">
                    </div><br>  
                    <div class="div2">
                        <label id="datefrom">Sessions réalisée du :</label>
                        <input type="Date" name="DatedesTestsFrom" id="Dateinput1" placeholder="">
 
                        <label id="dateto"> Au :</label>
                        <input type="Date" name="DatedesTestsTo" id="Dateinput2" placeholder="">
                    </div><br>
                    <div class="div3">
                        <label>Test psychotechniques réalisés : </label>
                            </br>  
                            <input type="checkbox" name="Testpsychotechniques[]" id="Testtempérature" value="température de la peau" >
                            <label for="Testtempérature">Test de température de la peau</label>
                            </br>                   
                            <input type="checkbox" name="Testpsychotechniques[]" id="Testfréquencecardiaque" value="fréquence cardiaque">
                            <label for="Testfréquence cardiaque">Test de fréquence cardiaque</label>
                            </br>                          
                            <input type="checkbox" name="Testpsychotechniques[]" id="Testson" value="temps réaction à un son inattendu" >
                            <label for="Testson">Test du temps de réaction à un son inattendu</label>
                            </br>                          
                            <input type="checkbox" name="Testpsychotechniques[]" id="Testlumière" value="temps de réaction à une lumière attendue dans le noir (clignotement)">
                            <label for="Testlumière">Test du temps de réaction à une lumière attendue dans le noir</label>
                            </br>                          
                            <input type="checkbox" name="Testpsychotechniques[]" id="Testlumière2" value="temps de réaction à une lumière inattendue en extérieur">
                            <label for="Testlumière">Test du temps de réaction à une lumière inattendue en extérieur</label>
                            </br>                          
                            <input type="checkbox" name="Testpsychotechniques[]" id="Testtonalité" value="reconnaissance de tonalité">
                            <label for="Testtonalité">Test de reconnaissance de tonalité</label>
                        
                    </div>
                    <div class="container">
                        <input class="btn" type="submit" name="bouton" value="Rechercher">
                    </div>

                    </fieldset>
                </form>
        </div>  
    </section>

    <?php include("footer.php"); ?>

</body>