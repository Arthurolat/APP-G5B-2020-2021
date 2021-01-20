<?php 
require("../modele/connexionbdd.php");
//<link rel="stylesheet" href="../css/header.css" />
?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/FAQ.css" />
    
    <link rel="stylesheet" href="../css/footer.css" />
    <link rel="stylesheet" href="css/accueil2.css"> 
    <title>Page d'accueil</title>

</head>

<body>
    
    <?php 
        if(!isset($_SESSION['mail'])) {
           echo '<header> 
           <div id="logo_infinite"> <!-- Logo Infinite Measures dans logo -->
               <img src="http://localhost/APP-G5B-2020-2021/images/logo_infinite.gif" alt="Logo Infinite Measures" />
           </div> 
           
           <nav id="menu_principal"> <!-- Menu principal de navigation dans bande du haut -->
               <ul>
               <li><a href="http://localhost/APP-G5B-2020-2021/accueil.php">Accueil</a></li>
               <li><a href="http://localhost/APP-G5B-2020-2021/accueil.php#a_propos">A propos</a></li>
               <li><a href="http://localhost/APP-G5B-2020-2021/accueil.php#team">La team</a></li>
               <li><a href="http://localhost/APP-G5B-2020-2021/accueil.php#contact">Contact</a></li>
               </ul>
           </nav>

           <a id="connexion" href="page_connexion.php"><button>Connexion</button></a>  
       </header>';  
    }else{
        include("header.php");
    } 
    ?>

    <section>

        <div id="contenu">
            <h2> F.A.Q. </h2><br>
            <p>
                <h3 id="test-1">1. Question :</h3>
                <div class="div-test1"><p>Réponse</p></div><br>

                <h3 id="test-2">2. Question :</h3>
                <div class="div-test2"><p>Réponse</p></div><br>

                <h3 id="test-3">3. Question :</h3>
                <div class="div-test3"><p>Réponse</p></div><br>

                <h3 id="test-4">4. Question :</h3>
                <div class="div-test4"><p>Réponse</p></div><br>

                <h3 id="test-5">5. Question :</h3>
                <div class="div-test5"><p>Réponse</p></div><br>

            </p>

        </div>
    </section>

    <?php include("footer.php"); ?>

</body>
</html>