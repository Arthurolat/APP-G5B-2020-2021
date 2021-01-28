<?php  
require("../modele/connexionbdd.php");

if(!isset($_SESSION['mail'])) {
    header('Location: http://localhost/APP-G5B-2020-2021/accueil.php');
    exit();
}

$pdoStat = $bdd ->prepare('SELECT * FROM faq WHERE idfaq=:num');
$pdoStat-> bindValue(':num',$_GET['numfaq'], PDO :: PARAM_INT);
$executeIsOk = $pdoStat->execute();
$faq= $pdoStat ->fetch();


?>


<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="../css/admin_modifier-faq.css" />

    <link rel="stylesheet" href="../css/header.css" />
    <link rel="stylesheet" href="../css/footer.css" />
    <title>Gestion FAQ</title>
    

</head>

<body>
    
    <?php include("header.php"); ?>
        
    <section>

        <div id=menuGauche>
            <ul id=barre_nav>
                <li id="ongletdebut">
                    <a href="admin_mon-profil.php"><img class="img-responsive" src="../images/icone_profil.png" alt="icone profil" width=10px> Mon profil</a>
                </li>
                <li>
                    <a href="admin_lancer-test1_connu.php"><img class="img-responsive" src="../images/icon-survey.png" alt="icone resultats" width=10px> Lancer une session de tests </a>
                </li>
                <li>
                    <a href="admin_rechercher.php"><img class="img-responsive" src="../images/icone_loupe.png" alt="icone loupe" width=10px> Recherche </a>
                </li>


                <p> Réglages :</p>
                <li>
                    <a href="admin_gestion-utilisateur.php"><img class="img-responsive" src="../images/icone_utilisateurs.png" alt="icone utilisateurs" width=10px> Utilisateurs</a>
                </li>
                <li>
                    <a href="admin_gestion-des-capteurs.php"><img class="img-responsive" src="../images/icone_capteur2.png" alt="icone capteur" width=10px> Capteurs</a>
                </li>
                <li id="ongletfin">
                    <a class="active" href="admin_gestion-faq.php"><img class="img-responsive" src="../images/icone_faq.png" alt="icone faq" width=10px> F.A.Q</a>
                </li>

            </ul>

        </div>
            
        <div id=contenu>
            <h2> Modification de la FAQ </h2>


            <div class=formulaire >
                <form method="post" action="modifierfaq.php">
                    <fieldset>

                        <input type="hidden" name="numfaq" value="<?= $faq['idfaq'] ?>">


                        <p><label for="question">Question : </label><input id="question" type="text" name="question" placeholder="question" value="<?= $faq['question'];?>"></p>

                        <p><label for="reponse">Réponse : </label><input id="reponse" type="text" name="reponse" placeholder="reponse" value="<?= $faq['reponse'];?>"></p>

        


                       
                        
                        <p class="bouton"><input type="submit" name="submit" value="Valider" align="right"></p>

                    </fieldset>
                    
                </form>
        
            </div>
        </div>

    </section>
        

    <?php include("footer.php"); ?>

</body>

</html>
