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
    <link rel="stylesheet" href="../css/gestionnaire_chrono&insert.css" />
    <title>lancement session choix test et capteur</title>

</head>

<?php 
require("../modele/gestionnaire_lancer_test3_bdd.php"); 
?>

<body>

    <h1>Préparez vous pour le test [nom du test] </h1>
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

    </br>
    </br>
    </br>

    <div>
        <p>Enregistrer la mesure du test manuellement :</p>
        <form method="post" action="gestionnaire_lancer-test3.php">
            <label>Valeur : <input type="text" name="valeur"></label>
            <p class="bouton"><input type="submit" value="Valider le test" /></p>
        </form>
    </div>
</body>

</html>