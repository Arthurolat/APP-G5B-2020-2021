<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="pageutilisateur.css" />
    <title>Page d'accueil</title>
    

</head>

<body>


    <?php include("header.php"); ?>

    <section>

        <div id=menuGauche>
            <ul>
                <li id="ongletdebut">
                    <a href=#><img class="img-responsive" src="icone_profil.png" alt="icone messagerie" width=10px> Mon profil</a>
                </li>
                <li>
                    <a href=#><img class="img-responsive" src="icone_messagerie.png" alt="icone messagerie" width=10px> Messagerie</a>
                </li>
                <li>
                    <a href=#><img class="img-responsive" src="icone_resultat.png" alt="icone resultats" width=10px> Consulter mes résultats</a>
                </li>
                <li>
                    <a href="uti-accueil_mes_tests.html"><img class="img-responsive" src="icone_capteur.png" alt="icone report" width=10px> Analyse de mes tests</a>
                    <ul>
                        <li><a href="uti-accueil_mes_tests.html#test-1">1. Temps de réaction à un son</a></li>
                        <li><a href="uti-accueil_mes_tests.html#test-2">2. Temps de réaction à une lumière</a></li>
                        <li><a href="uti-accueil_mes_tests.html#test-3">3. Fréquence cardiaque</a></li>
                        <li><a href="uti-accueil_mes_tests.html#test-4">4. Température de la peau</a></li>
                        <li id="ongletfin"><a href="uti-accueil_mes_tests.html#test-5">5. Reconnaissance de tonalité</a></li>
                    </ul>
                </li>

            </ul>
    </section>

   <?php include("footer.php"); ?>

</body>