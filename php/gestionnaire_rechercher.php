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

        <div id="contenu">

            <h2> Rechercher </h2>
                <form method="post" action="gestionnaire_recherche-tableau-resultat.php">
                    <fieldset>
                        <legend>Filtres de recherche</legend>
                    <div class="div1">
                        <label for="Nomdutilisateurinput">Votre nom d'utilisateur :</label>
                        <input type="text" name="Nomutilisateur" id="nomdutilisateurinput" placeholder="Pierre Dupont">
                    </div><br>  
                    <div class="div2">
                        <label for="Dateinput1">Date du :</label>
                        <input type="Date" name="DatedesTestsFrom" id="Dateinput1" placeholder="2020-01-01">

                        <label for="Dateinput2"> à : </label>
                        <input type="Date" name="DatedesTestsTo" id="Dateinput2" placeholder="2020-01-01">
                    </div><br>
                    <div class="div3">
                        <label>Test psychotechniques : </label>
                        <div class="div4"><br>
                            <input type="checkbox" name="Testpsychotechniques[]" id="Testtempérature" value="température de la peau" >
                            <label for="Testtempérature">Test de température de la peau</label>
                        </div>
                        <div class="div5"><br>
                            <input type="checkbox" name="Testpsychotechniques[]" id="Testfréquencecardiaque" value="fréquence cardiaque">
                            <label for="Testfréquence cardiaque">Test de fréquence cardiaque</label>
                        </div>
                        <div class="div5"><br>
                            <input type="checkbox" name="Testpsychotechniques[]" id="Testson" value="temps réaction à un son">
                            <label for="Testson">Test du temps de réaction à un son</label>
                        </div>
                        <div class="div6"><br>
                            <input type="checkbox" name="Testpsychotechniques[]" id="Testlumière" value="temps de réaction à une lumière attendue">
                            <label for="Testlumière">Test du temps de réaction à une lumière attendue</label>
                        </div>
                        <div class="div7"><br>
                            <input type="checkbox" name="Testpsychotechniques[]" id="Testlumière" value="temps de réaction à une lumière inattendue">
                            <label for="Testlumière">Test du temps de réaction à une lumière inattendue</label>
                        </div>
                        <div class="div8"><br>
                            <input type="checkbox" name="Testpsychotechniques[]" id="Testtonalité" value="reconnaissance de tonalité">
                            <label for="Testtonalité">Test de reconnaissance de tonalité</label>
                        </div>
                    </div>
                    <div class="container">
                    <input class="btn" type="submit" name="bouton" value="Rechercher">
                    </div>

                    </fieldset>
                </form>
            

    </section>

    <?php include("footer.php"); ?>

</body>