<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/gestionnaire_lancer-test3.css" />
    <link rel="stylesheet" href="../css/header.css" />
    <link rel="stylesheet" href="../css/footer.css" />
    <title>lancement session choix test et capteur</title>

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
                    <a class="active" href=#><img class="img-responsive" src="../images/icones/icon-survey.png" alt="icone resultats" width=10px> Lancer une session de tests </a>
                </li>
                <li>
                    <a href="gestionnaire_rechercher.php"><img class="img-responsive" src="../images/icones/icone_loupe.png" alt="icone loupe" width=10px> Recherche </a>
                </li>
                <li id="ongletfin">
                    <a href="gestionnaire_analyse-test.php"><img class="img-responsive" src="../images/icones/icone_engrenage.png" alt="icone engrenage" width=10px> Analyse tests psychotechniques </a>
                </li>

            </ul>

        </div>

        <div id=contenu>
            <h2> Lancement d'une session de tests </h2>

            <p>Vous êtes dans la phase de tests. Lancer les tests psychotechniques que vous souhaitez et passez à l'étape suivante pour clôturer la session de tests.</p>

            <div class="step_progress">
                <ul>
                    <li class="ok">Démarrage session</li>
                    <li class="ok">Choisir le boitier</li>
                    <li class="ok">Phase tests</li>
                    <li>Validation</li>
                </ul>
            </div>

            <!--
            <p> <span id="countdowntimer">10</span></p>
            <script type="text/javascript">
                var timeleft = 10;
                var downloadTimer = setInterval(function() {
                    timeleft--;
                    document.getElementById("countdowntimer").textContent = timeleft;
                    if (timeleft <= 0)
                        clearInterval(downloadTimer);
                }, 1000);
            </script>
            -->
            <form method="post" action="#">
                <p> Choisissez votre capteur :
                    <label>
                    <select name="capteur">
                        <option value="c1">Capteur 1</option>  
                        <option value="c2">Capteur 2</option> 
                        <option value="c3">Capteur 3</option> 
                        <option value="c4">Capteur 4</option> 
                    </select>
                </label>
                </p>
            </form>
            <div class=formulaire>
                <div class="test1">
                    <img class="img-responsive" src="../images/test_temperature.jpg">
                    <div class="lancer_test">

                        <form method="post" action="#">
                            <p>Température superficielle de la peau</p>
                        </form>
                        <p class="bouton"><a href="gestionnaire_chrono&insert.html">Lancer</a></p>
                    </div>
                </div>
                <div class="test2">
                    <img class="img-responsive" src="../images/test_frequence.jpg">
                    <div class="lancer_test">
                        <p> Fréquence cardiaque</p>
                        <p class="bouton"><a href="gestionnaire_chrono&insert.html">Lancer</a></p>
                    </div>
                </div>
                <div class="test3">
                    <img class="img-responsive" src="../images/test_tonalite.jpg">
                    <div class="lancer_test">
                        <p> Reconnaissance de la tonalité d'un son </p>
                        <p class="bouton"><a href="gestionnaire_chrono&insert.html">Lancer</a></p>
                    </div>
                </div>
                <div class="test4">
                    <img class="img-responsive" src="../images/test_sonore.jpg">
                    <div class="lancer_test">
                        <p> Réaction à un stimulus sonore</p>
                        <p class="bouton"><a href="gestionnaire_chrono&insert.html">Lancer</a></p>
                    </div>
                </div>
                <div class="test5">
                    <img class="img-responsive" src="../images/test_visuel_attendu.jpg">
                    <div class="lancer_test">
                        <p> Réaction à un stimulus visuel attendu</p>
                        <p class="bouton"><a href="gestionnaire_chrono&insert.html">Lancer</a></p>
                    </div>
                </div>
                <div class="test6">
                    <img class="img-responsive" src="../images/test_visuel_inattendu.jpg">
                    <div class="lancer_test">
                        <p> Réaction à un stimulus visuel inattendu</p>
                        <p class="bouton"><a href="gestionnaire_chrono&insert.html">Lancer</a></p>
                    </div>
                </div>


            </div>
            </br>

            <div class=controle>
                <div class="element1">
                    <p><a href="gestionnaire_lancer-test2.php">Retour</a></p>
                </div>
                <div class="element2">
                    <p><a href="gestionnaire_lancer-test4.php">Suivant</a></p>
                </div>
            </div>
        </div>
    </section>

    <?php include("footer.php"); ?>

</body>