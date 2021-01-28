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
            <p>
                <h3 id="test-1"><?php echo 'SELECT question FROM faq WHERE idfaq=1'; ?></h3>
                <div class="div-test1"><p><?php echo 'SELECT reponse FROM faq WHERE idfaq=1'; ?></p></div><br>

                <h3 id="test-2"><?php echo 'SELECT question FROM faq WHERE idfaq=2'; ?></h3>
                <div class="div-test2"><p><?php echo 'SELECT reponse FROM faq WHERE idfaq=2'; ?></p></div><br>

                <h3 id="test-3"><?php echo 'SELECT question FROM faq WHERE idfaq=3'; ?></h3>
                <div class="div-test3"><p><?php echo 'SELECT reponse FROM faq WHERE idfaq=3'; ?></p></div><br>

                <h3 id="test-4"><?php echo 'SELECT question FROM faq WHERE idfaq=4' ?></h3>
                <div class="div-test4"><p><?php echo 'SELECT reponse FROM faq WHERE idfaq=4'; ?></p></div><br>

                <h3 id="test-5"><?php echo 'SELECT question FROM faq WHERE idfaq=5'; ?></h3>
                <div class="div-test5"><p><?php echo 'SELECT question FROM faq WHERE idfaq=5'; ?></p></div><br>

            </p>

        </div>
    </section>

    <?php include("footer.php"); ?>

</body>
</html>