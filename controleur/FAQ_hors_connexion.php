<?php 
require("../modele/connexionbdd.php");
require("../modele/fonctions.php");

?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/FAQ_hors_connexion.css" />
    <link rel="stylesheet" href="../css/footer.css" />
    <title>Page d'accueil</title>

</head>


<body>
    
        <header> <!-- Bande du haut de page -->
			<div id="logo_infinite"> <!-- Logo Infinite Measures dans logo -->
				<img src="../images/logo_infinite.gif" alt="Logo Infinite Measures" />
            </div> 
                
            <nav id="menu_principal"> <!-- Menu principal de navigation dans bande du haut -->
				<ul>
					<li><a href="#">Accueil</a></li>
					<li><a href="#a_propos">A propos</a></li>
					<li><a href="#team">La team</a></li>
                    <li><a href="#corps">Contact</a></li>
                </ul>
            </nav>

            <a id="connexion" href="../controleur/page_connexion.php"><button>Connexion</button></a>  
        </header> 
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