<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/gestionnaire_lancer-test2.css" />
    <link rel="stylesheet" href="../css/header.css" />
    <link rel="stylesheet" href="../css/footer.css" />
    <title>lancement session selection du boitier</title>

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

            <p>Pour lancer une session de tests, vous devez commencer par attribuer la session à un utilisateur.</p>

            <div class="step_progress">
                <ul>
                    <li class="ok">Démarrage session</li>
                    <li class="ok">Choisir le boitier</li>
                    <li>Phase tests</li>
                    <li>Validation</li>
                </ul>
            </div>


            <div class=formulaire>
                <form method="post" action="#">
                    <p> Choisissez votre boitier :
                        <label>
                        <select name="capteur">
                            <option value="b1">boitier 1</option>  
                            <option value="b2">boitier 2</option> 
                            <option value="b3">boitier 3</option> 
                            <option value="b4">boitier 4</option> 
                        </select>
                    </label>
                    </p>
                </form>
                </br>
                </br>
                </br>

            </div>
            </br>
            <div class=controle>
                <div class="element1">
                    <p><a href="gestionnaire_lancer-test1_connu.php">Retour</a></p>
                </div>
                <div class="element2">
                    <p><a href="gestionnaire_lancer-test3.php">Suivant</a></p>
                </div>
            </div>
        </div>
    </section>

    <?php include("footer.php"); ?>

</body>