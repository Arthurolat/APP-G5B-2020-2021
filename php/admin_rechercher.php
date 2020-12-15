<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset="UTF-8">
    <!--<link rel="stylesheet" type ="text/css" href="../css/cssaccueil_admin.css" />-->
    <link rel="stylesheet" type="text/css" href="../css/Interface_RechercherCSS.css"> <!-- idem que gestionnaire -->
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
                    <a href="mon_profil.php"><img class="img-responsive" src="../images/icones/icone_profil.png" alt="icone profil" width=10px> Mon profil</a>
                </li>
                <li>
                    <a href="admin_messagerie.php"><img class="img-responsive" src="../images/icones/icone_messagerie.png" alt="icone messagerie" width=10px> Messagerie</a>
                </li>
                <li>
                    <a  href="admin_lancer-test1_connu.php"><img class="img-responsive" src="../images/icones/icon-survey.png" alt="icone resultat" width=10px> Lancer une session de tests </a>
                </li>
                <li>
                    <a class="active" href=#><img class="img-responsive" src="../images/icones/icone_loupe.png" alt="icone loupe" width=10px> Recherche </a>
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
                    <a href="admin_gestion-faq.php"><img class="img-responsive" src="../images/icones/icone_faq.png" alt="icone faq" width=10px> F.A.Q</a>
                </li>

            </ul>

        </div>

        <div id="contenu">

            <h2> Rechercher </h2>
                <form method="post" action="admin_recherche-tableau-resultat.php">
                    <fieldset>
                        <legend>Filtres de recherche</legend>
                    <div class="div1">
                        <label for="Nomdutilisateurinput">Votre nom d'utilisateur :</label>
                        <input type="text" name="Nom d'utilisateur" id="nomdutilisateurinput" placeholder="Pierre Dupont">
                    </div><br>  
                    <div class="div2">
                        <label for="Dateinput1">Date du :</label>
                        <input type="Date" name="DatedesTests1" id="Dateinput1" placeholder="2020-01-01">

                        <label for="Dateinput2"> à : </label>
                        <input type="Date" name="DatedesTests2" id="Dateinput2" placeholder="2020-01-01">
                    </div><br>
                    <div class="div3">
                        <label>Test psychotechniques : </label>
                        <div class="div4"><br>
                            <input type="checkbox" name="Testpsychotechniques" id="Testtempérature">
                            <label for="Testtempérature">Test température</label>
                        </div>
                        <div class="div5"><br>
                            <input type="checkbox" name="Testpsychotechniques" id="Testfréquencecardiaque">
                            <label for="Testfréquence cardiaque">Test fréquence cardiaque</label>
                        </div>
                        <div class="div5"><br>
                            <input type="checkbox" name="Testpsychotechniques" id="Testson">
                            <label for="Testson">Test son</label>
                        </div>
                        <div class="div6"><br>
                            <input type="checkbox" name="Testpsychotechniques" id="Testlumière">
                            <label for="Testlumière">Test lumière</label>
                        </div>
                        <div class="div7"><br>
                            <input type="checkbox" name="Testpsychotechniques" id="Testtonalité">
                            <label for="Testtonalité">Test tonalité</label>
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