<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/gestionnaire_mon-profil-mdp.css" />
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
                    <a class="active" href="gestionnaire_mon-profil-mdp.php"><img class="img-responsive" src="../images/icones/icone_profil.png" alt="icone profil" width=10px> Mon profil</a>
                </li>
                <li>
                    <a href="gestionnaire_messagerie-accueil.php"><img class="img-responsive" src="../images/icones/icone_messagerie.png" alt="icone messagerie" width=10px> Messagerie</a>
                </li>
                <li>
                    <a href="gestionnaire_lancer-test1_connu.php"><img class="img-responsive" src="../images/icones/icon-survey.png" alt="icone resultats" width=10px> Lancer une session de tests </a>
                </li>
                <li>
                    <a  href="gestionnaire_rechercher.php"><img class="img-responsive" src="../images/icones/icone_loupe.png" alt="icone loupe" width=10px> Recherche </a>
                </li>
                <li id="ongletfin">
                    <a href="gestionnaire_analyse-test.php"><img class="img-responsive" src="../images/icones/icone_engrenage.png" alt="icone engrenage" width=10px> Analyse tests psychotechniques </a>
                </li>

            </ul>

        </div>

        <div id=contenu>
            <?php require"../modele/connexionbdd.php";
                $requete = "SELECT * FROM personne where mail = '".$_SESSION['mail']."'";
                $exec_requete = mysqli_query($db,$requete);
                $reponse      = mysqli_fetch_array($exec_requete);
            ?>


            <h2>
                <IMG class="profil" src="<?= $reponse['photo']; ?>" alt="<?=" ". ucfirst($reponse['prenom'])." ".mb_strtoupper($reponse['nom']) ?>" width=120px><?=" ". ucfirst($reponse['prenom'])." ".mb_strtoupper($reponse['nom']) ?>
            </h2>


            <div class=onglet>
                <div class=element1>
                    <p>Confidentialité et Sécurité</p>
                </div>
                <div class=element2>
                    <p><a href="gestionnaire_mon-profil.php">Informations personnelles</a></p>
                </div>
            </div>
            <div class=formulaire>
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