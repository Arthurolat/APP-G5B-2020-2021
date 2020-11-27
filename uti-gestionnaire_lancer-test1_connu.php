<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="uti-gestionnaire_lancer-test1_connu.css" />
    <title>Page d'accueil</title>

</head>

<body>

    <?php include("header.php"); ?>

    <section>

        <div id=menuGauche>
            <ul id=barre_nav>
                <li id="ongletdebut">
                    <a href=#><img class="img-responsive" src="images/icones/icone_profil.png" alt="icone profil" width=10px> Mon profil</a>
                </li>
                <li>
                    <a href=#><img class="img-responsive" src="images/icones/icone_messagerie.png" alt="icone messagerie" width=10px> Messagerie</a>
                </li>
                <li>
                    <a class="active" href=#><img class="img-responsive" src="images/icones/icon-survey.png" alt="icone resultats" width=10px> Lancer une session de tests </a>
                </li>
                <li>
                    <a href=#><img class="img-responsive" src="images/icones/icone_loupe.png" alt="icone loupe" width=10px> Recherche </a>
                </li>
                <li id="ongletfin">
                    <a href=#><img class="img-responsive" src="images/icones/icone_engrenage.png" alt="icone engrenage" width=10px> Analyse tests psychotechniques </a>
                </li>

            </ul>

        </div>

        <div id=contenu>
            <h2> Lancement d'une session de tests </h2>

            <p>Pour lancer une session de tests, vous devez commencer par attribuer la session à un utilisateur.</p>

            <div class="step_progress">
                <ul>
                    <li class="ok">Démarrage session</li>
                    <li>Phase tests</li>
                    <li>Validation</li>
                </ul>
            </div>

            <div class=onglet>
                <div class=element1>
                    <p>Utilisateur déjà existant</p>
                </div>
                <div class=element2>
                    <p><a href="uti-gestionnaire_lancer-test1_inconnu.html">Créer un nouveau compte utilisateur</a></p>
                </div>
            </div>
            <div class=formulaire>
                <p>ici le formulaire</p>
                </br>
                </br>
                </br>
                </br>
                </br>
                </br>
                </br>
                </br>
                <p>
                    <a href="uti-gestionnaire_lancer-test2.html">Suivant</a>
                </p>

            </div>
            </br>

        </div>
    </section>

    <?php include("footer.php"); ?>

</body>