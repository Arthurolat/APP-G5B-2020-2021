<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/FAQ.css" />
    <link rel="stylesheet" href="../css/header.css" />
    <link rel="stylesheet" href="../css/footer.css" />
    <title>Page d'accueil</title>

</head>
<?php 
require("../modele/connexionbdd.php");
$requete = "SELECT question  FROM faq ";
                        $exec_requete = mysqli_query($db,$requete);
                        $question      = mysqli_fetch_array($exec_requete);
$requete2 = "SELECT reponse  FROM faq ";
                        $exec_requete2 = mysqli_query($db,$requete2);
                        $reponse      = mysqli_fetch_array($exec_requete2);                        


mysqli_close($db); // fermer la connexion
?>

<body>


    <?php include("header.php"); ?>

    <section>

        <div id="contenu">
            <h2> F.A.Q. </h2><br>
            <p>
                <h3 id="test-1"><?php echo $question['question1']; ?></h3>
                <div class="div-test1"><p><?php echo $reponse['reponse1']; ?></p></div><br>

                <h3 id="test-2"><?php echo $question['question2']; ?></h3>
                <div class="div-test2"><p><?php echo $reponse['reponse2']; ?></p></div><br>

                <h3 id="test-3"><?php echo $question['question3']; ?></h3>
                <div class="div-test3"><p><?php echo $reponse['reponse3']; ?></p></div><br>

                <h3 id="test-4"><?php echo $question['question4'] ?></h3>
                <div class="div-test4"><p><?php echo $reponse['reponse4']; ?></p></div><br>

                <h3 id="test-5"><?php echo $question['question5']; ?></h3>
                <div class="div-test5"><p><?php echo $reponse['reponse5']; ?></p></div><br>

            </p>

        </div>
    </section>

    <?php include("footer.php"); ?>

</body>
</html>