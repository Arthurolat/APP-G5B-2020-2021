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
    <link rel="stylesheet" href="../css/gestionnaire_mon-profil.css" />
    <link rel="stylesheet" href="../css/header.css" />
    <link rel="stylesheet" href="../css/footer.css" />
    <title>Mon profil</title>
    

</head>

<body>
    
    <?php include("header.php"); ?>

    <section>

        <div id=menuGauche>
            <ul id=barre_nav>
                <li id="ongletdebut">
                    <a class="active" href=#><img class="img-responsive" src="../images/icones/icone_profil.png" alt="icone profil" width=10px> Mon profil</a>
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
                <?php 
                    $requete = "SELECT * FROM personne where mail = '".$_SESSION['mail']."'";
                    $exec_requete = mysqli_query($db,$requete);
                    $reponse      = mysqli_fetch_array($exec_requete);
                ?>


            <h2>
                <IMG class="profil" src="<?= $reponse['photo']; ?>" alt="<?=" ". ucfirst($reponse['prenom'])." ".mb_strtoupper($reponse['nom']) ?>" width=120px><?=" ". ucfirst($reponse['prenom'])." ".mb_strtoupper($reponse['nom']) ?>
            </h2>


            <div class=onglet>
                <div class=element1>
                    <p>Informations personnelles</p>
                </div>
                <div class=element2>
                    <p><a href="gestionnaire_mon-profil-mdp.php">Confidentialité et Sécurité</a></p>
                </div>
            </div>
            <div class="tableau">

                <table class=tableau align="center" width="1300px">

                    <tr>
                        <td>Prénom</td>

                        <td>
                            <p><?= ucfirst($reponse['prenom'])?></p>

                        </td>
                    </tr>
                    <tr>
                        <td>Nom</td>

                        <td>
                            <p><?=mb_strtoupper($reponse['nom']) ?></p>
                        </td>
                    </tr>
                    <tr>
                        <td>Adresse mail</td>

                        <td>
                            <p><?=$reponse['mail']?></p>
                        </td>
                    </tr>
                    <tr>
                        <td>Société et fonction</td>

                        <td>
                            <p>ISEP </br>
                                Etudiant en A1</p>
                        </td>
                    </tr>
                    <tr>
                        <td>Adresse</td>

                        <td>
                            <p><?=ucfirst($reponse['adresse'])?></p>
                        </td>
                    </tr>
                    <tr>
                        <td>Téléphone</td>

                        <td>
                            <p><?=$reponse['tel']?></p>
                        </td>
                    </tr>

                </table>
            </div>
            </br>

        </div>
        </section>

        <?php include("footer.php"); ?>

</body>
</html>