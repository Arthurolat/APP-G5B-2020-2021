
<?php 
require_once("../modele/connexionbdd.php");

if(!isset($_SESSION['mail'])) {
    header('Location: http://localhost/APP-G5B-2020-2021/accueil.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../css/admin_ajouter-capteurs.css">
    <link rel="stylesheet" type="text/css" href="../css/header.css">
    <link rel="stylesheet" type="text/css" href="../css/footer.css">
    <title>Page d'accueil</title>
</head>

<body>

    <?php include("header.php"); ?>

    <div id="image_fond">    
    
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
                    <li>
                        <a href="admin_analyse-test.php"><img class="img-responsive" src="../images/icone_engrenage.png" alt="icone engrenage" width=10px> Analyse tests psychotechniques </a>
                    </li>

                    <p> Réglages :</p>
                    <li>
                        <a href="admin_gestion-utilisateur.php"><img class="img-responsive" src="../images/icone_utilisateurs.png" alt="icone utilisateurs" width=10px> Utilisateurs</a>
                    </li>
                    <li>
                        <a class="active" href="admin_gestion-des-capteurs.php"><img class="img-responsive" src="../images/icone_capteur2.png" alt="icone capteur" width=10px> Capteurs</a>
                    </li>
                    <li id="ongletfin">
                        <a href="admin_gestion-faq.php"><img class="img-responsive" src="../images/icone_faq.png" alt="icone faq" width=10px> F.A.Q</a>
                    </li>

                </ul>

            </div>
            <div id="contenu">
                <?php require_once"../modele/connexionbdd.php";
                        $requete = "SELECT nomcapteur FROM typecapteur";
                        $exec_requete = mysqli_query($db,$requete);
                    ?>

                <h2> Gestion des capteurs </h2>
                <h3>Ajouter un nouveau capteur</h3>
                <?php if($_SESSION['message']!=NULL):?>
                   <h3><?=$_SESSION['message'] ?></h3>
                <?php endif ?>
                        <section class="section1">
                            <form action="../modele/ajouter_capteur.php" method="POST">
                                    <label for="Nomcapteurinput">Nom du capteur :</label>
                                    <select name="capteurs" id="nomcapteurinput">
                                    <?php while ($reponse=mysqli_fetch_array($exec_requete)): ?>
                                        <option><?=$reponse['nomcapteur'];?></option>
                                    <?php endwhile ?>
                                    </select>
                                    <label for="Quantitéinput">Veuillez saisir une quantité :</label>
                                    <input type="number" name="quantité" id="Quantitéinput" placeholder="Quantité">
                                    <button>Enregistrer</button> 
                            </form>
                        </section>
                        <?php $_SESSION['message']=NULL ;?>

            </div>
        </section>
       
    </div> 

    <?php include("footer.php"); ?>

</body>