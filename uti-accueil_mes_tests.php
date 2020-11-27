<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="uti-accueil_mes_tests.css" />
    <title>Page d'accueil</title>

</head>

<body>

    <?php include("header.php"); ?>


    <section>

        <div id=menuGauche>
            <ul id=barre_nav>
                <li id="ongletdebut">
                    <a href=#><img class="img-responsive" src="images/icones/icone_profil.png" alt="icone profil"> Mon profil</a>
                </li>
                <li>
                    <a href=#><img class="img-responsive" src="images/icones/icone_messagerie.png" alt="icone messagerie"> Messagerie</a>
                </li>
                <li>
                    <a href="../html/uti-accueil_resultat_date.html"><img class="img-responsive" src="images/icones/icon-survey.png" alt="icone resultats"> Consulter mes résultats</a>
                </li>
                <li>
                    <a class="active" href=#><img class="img-responsive" src="images/icones/icone_folder.png" alt="icone report"> Analyse de mes tests</a>
                    <ul>
                        <li><a href="#test-1">1. Temps de réaction à un son</a></li>
                        <li><a href="#test-2">2. Temps de réaction à une lumière</a></li>
                        <li><a href="#test-3">3. Fréquence cardiaque</a></li>
                        <li><a href="#test-4">4. Température de la peau</a></li>
                        <li id="ongletfin"><a href="#test-5">5. Reconnaissance de tonalité</a></li>
                    </ul>
                </li>
            </ul>
        </div>

        <div id=contenu>
            <h2> Sythèse des tests </h2>

            <h3 id="test-1">1. Temps de réaction à un son</h3>
            <div class="div-test-son"></div>

            <h3 id="test-2">2. Temps de réaction à une lumière</h3>
            <div class="div-test-lumière"></div>

            <h3 id="test-3">3. Fréquence cardiaque</h3>
            <div class="div-test-freq"></div>

            <h3 id="test-4">4. Température de la peau</h3>
            <div class="div-test-temperature"></div>

            <h3 id="test-5">5. Reconnaissance de tonalité</h3>
            <div class="div-test-tonalite"></div>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>

        </div>

    </section>

    <?php include("footer.php"); ?>

</body>