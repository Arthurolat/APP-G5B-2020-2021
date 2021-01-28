<?php 
require("../modele/connexionbdd.php");
require("../modele/fonctions.php");

if(!isset($_SESSION['mail'])) {
    header('Location: http://localhost/APP-G5B-2020-2021/controleur/FAQ_hors_connexion.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/FAQ.css" />
    <link rel="stylesheet" href="../css/header.css" />
    <link rel="stylesheet" href="../css/footer.css" />
    <title>Page d'accueil</title>

</head>


<body>
    
    <?php include("header.php"); ?>
    <section>
        <div id="contenu">
            <h2> F.A.Q. </h2><br>
            <?php 
                $reponse = affichage_faq($bdd);
                include("../vues/affichage_faq.php"); 
            ?>
         </div>
    </section>

    <?php include("footer.php"); ?>

</body>
</html>