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
<?php 

$question1 = $_POST['question1'];
$reponse1 = $_POST['reponse1'];
$question2 = $_POST['question2'];
$reponse2 = $_POST['reponse2'];
$question3 = $_POST['question3'];
$reponse3 = $_POST['reponse3'];
$question4 = $_POST['question4'];
$reponse4 = $_POST['reponse4'];
$question5 = $_POST['question5'];
$reponse5 = $_POST['reponse5'];
?>

    <?php include("header.php"); ?>

    <section>

        <div id="contenu">
            <h2> F.A.Q. </h2><br>
            <p>
                <h3 id="test-1"><?php echo $question1; ?></h3>
                <div class="div-test1"><p><?php echo $reponse1; ?></p></div><br>

                <h3 id="test-2"><?php echo $question2; ?></h3>
                <div class="div-test2"><p><?php echo $reponse2; ?></p></div><br>

                <h3 id="test-3"><?php echo $question3; ?></h3>
                <div class="div-test3"><p><?php echo $reponse3; ?></p></div><br>

                <h3 id="test-4"><?php echo $question4; ?></h3>
                <div class="div-test4"><p><?php echo $reponse4; ?></p></div><br>

                <h3 id="test-5"><?php echo $question5; ?></h3>
                <div class="div-test5"><p><?php echo $reponse5; ?></p></div><br>

            </p>

        </div>
    </section>

    <?php include("footer.php"); ?>

</body>
</html>