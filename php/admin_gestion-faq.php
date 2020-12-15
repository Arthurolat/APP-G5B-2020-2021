<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/admin_gestion-faq.css" />
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
                    <a href=#><img class="img-responsive" src="../images/icones/icone_profil.png" alt="icone profil" width=10px> Mon profil</a>
                </li>
                <li>
                    <a href=#><img class="img-responsive" src="../images/icones/icone_messagerie.png" alt="icone messagerie" width=10px> Messagerie</a>
                </li>
                <li>
                    <a href="admin_lancer-test1_connu.php"><img class="img-responsive" src="../images/icones/icon-survey.png" alt="icone resultats" width=10px> Lancer une session de tests </a>
                </li>
                <li>
                    <a href="admin_rechercher.php"><img class="img-responsive" src="../images/icones/icone_loupe.png" alt="icone loupe" width=10px> Recherche </a>
                </li>
                <li>
                    <a href=#><img class="img-responsive" src="../images/icones/icone_engrenage.png" alt="icone engrenage" width=10px> Analyse tests psychotechniques </a>
                </li>

                <p> Réglages :</p>
                <li>
                    <a  href=#><img class="img-responsive" src="../images/icones/icone_utilisateurs.png" alt="icone utilisateurs" width=10px> Utilisateurs</a>
                </li>
                <li>
                    <a href="admin_gestion-des-capteurs.php"><img class="img-responsive" src="../images/icones/icone_capteur.png" alt="icone capteur" width=10px> Capteurs</a>
                </li>
                <li id="ongletfin">
                    <a class="active" href=#><img class="img-responsive" src="../images/icones/icone_faq.png" alt="icone faq" width=10px> F.A.Q</a>
                </li>

            </ul>

        </div>

        <div id="contenu">
            <h2> F.A.Q </h2><br>
            <p>
                <h3 id="test-1">1. Question :</h3>
                <div class="div-test1"><p>Réponse</p></div><br>

                <h3 id="test-2">2. Question :</h3>
                <div class="div-test2"><p>Réponse</p></div><br>

                <h3 id="test-3">3. Question :</h3>
                <div class="div-test3"><p>Réponse</p></div><br>

                <h3 id="test-4">4. Question :</h3>
                <div class="div-test4"><p>Réponse</p></div><br>

                <h3 id="test-5">5. Question :</h3>
                <div class="div-test5"><p>Réponse</p></div><br>

            </p>

        </div>

    </section>

    <?php include("footer.php"); ?>

</body>