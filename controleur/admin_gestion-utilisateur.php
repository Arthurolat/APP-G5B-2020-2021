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
    <link rel="stylesheet" href="../css/admin_gestion-utilisateur.css" />
    <link rel="stylesheet" href="../css/header.css" />
    <link rel="stylesheet" href="../css/footer.css" />
    <title>Gestion Utilisateur</title>
    

</head>

<body>
    
    <?php include("header.php"); ?>

   
    <section>
        <div id=menuGauche>
            <ul id=barre_nav>
                <li id="ongletdebut">
                    <a href="admin_mon-profil.php"><img class="img-responsive" src="../images/icones/icone_profil.png" alt="icone profil" width=10px> Mon profil</a>
                </li>
                <li>
                    <a href="admin_lancer-test1_connu.php"><img class="img-responsive" src="../images/icones/icon-survey.png" alt="icone resultats" width=10px> Lancer une session de tests </a>
                </li>
                <li>
                    <a href="admin_rechercher.php"><img class="img-responsive" src="../images/icones/icone_loupe.png" alt="icone loupe" width=10px> Recherche </a>
                </li>
                <li>
                    <a href="admin_analyse-test.php"><img class="img-responsive" src="../images/icones/icone_engrenage.png" alt="icone engrenage" width=10px> Analyse tests psychotechniques </a>
                </li>

                <p> Réglages :</p>
                <li>
                    <a class="active" href=#><img class="img-responsive" src="../images/icones/icone_utilisateurs.png" alt="icone utilisateurs" width=10px> Utilisateurs</a>
                </li>
                <li>
                    <a href="admin_gestion-des-capteurs.php"><img class="img-responsive" src="../images/icones/icone_capteur.png" alt="icone capteur" width=10px> Capteurs</a>
                </li>
                <li id="ongletfin">
                    <a href="admin_gestion-faq.php"><img class="img-responsive" src="../images/icones/icone_faq.png" alt="icone faq" width=10px> F.A.Q</a>
                </li>

            </ul>

        </div>
            
        <div id="contenu">

            <div id="searchbar">
                <h2>Rechercher un utilisateur : </h2>
                <form method="post" action="#">
                    <input class="champ" type="text" value="">
                    <input type="image" id="image" alt="Login" src="../images/icones/icone_loupe.png" width="30px" >  
                </form>
            </div>

            <table class=tableau align="center" width="1300px">
                <tr class="theader">
                    <th>Nom</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                </tr>
                <tr>
                    <td>Clara Augie</td>
                    <td>
                        <p><a href="admin_modifier-profil.php">Modifier</a></p>
                    </td>
                    <td>
                        <p>Supprimer</p>
                    </td>
                </tr>
                <tr>
                    <td>Sanae El Messadi </td>
                    <td>
                        <p><a href="admin_modifier-profil.php">Modifier</a></p>
                    </td>
                    <td>
                        <p>Supprimer</p>
                    </td>
                </tr>
                <tr>
                    <td>Guillaume Jolly</td>
                    <td>
                        <p><a href="admin_modifier-profil.php">Modifier</a></p>
                    </td>
                    <td>
                        <p>Supprimer</p>
                    </td>
                </tr>
                <tr>
                    <td>Constantin Chevalier</td>
                    <td>
                        <p><a href="admin_modifier-profil.php"">Modifier</a></p>
                    </td>
                    <td>
                        <p>Supprimer</p>
                    </td>
                </tr>
                <tr>
                    <td>Arthur Latourette</td>
                    <td>
                        <p><a href="admin_modifier-profil.php">Modifier</a></p>
                    </td>
                    <td>
                        <p>Supprimer</p>
                    </td>
                </tr>
                <tr>
                <td>Thomas Le Deventec</td>
                <td>
                    <p><a href="admin_modifier-profil.php">Modifier</a></p>
                </td>
                <td>
                    <p>Supprimer</p>
                </td>
                </tr>
                    <tr>
                    <td>Nom</td>
                    <td>
                        <p><a href="admin_modifier-profil.php">Modifier</a></p>
                    </td>
                    <td>
                        <p>Supprimer</p>
                    </td>
                </tr>
                    <tr>
                    <td>Nom</td>
                    <td>
                        <p><a href="admin_modifier-profil.php">Modifier</a></p>
                    </td>
                    <td>
                        <p>Supprimer</p>
                    </td>
                </tr>
                    <tr>
                    <td>Nom</td>
                    <td>
                        <p><a href="admin_modifier-profil.php">Modifier</a></p>
                    </td>
                    <td>
                        <p>Supprimer</p>
                    </td>
                </tr>
                    <tr>
                    <td>Nom</td>
                    <td>
                        <p><a href="admin_modifier-profil.php">Modifier</a></p>
                    </td>
                    <td>
                        <p>Supprimer</p>
                    </td>
                </tr>
                <tr>
                <td>Nom</td>
                <td>
                    <p><a href="admin_modifier-profil.php">Modifier</a></p>
                </td>
                <td>
                    <p>Supprimer</p>
                </td>
                </tr>
                    <tr>
                    <td>Nom</td>
                    <td>
                        <p><a href="admin_modifier-profil.php">Modifier</a></p>
                    </td>
                    <td>
                        <p>Supprimer</p>
                    </td>
                </tr>
                    <tr>
                    <td>Nom</td>
                    <td>
                        <p><a href="admin_modifier-profil.php">Modifier</a></p>
                    </td>
                    <td>
                        <p>Supprimer</p>
                    </td>
                </tr>
                    <tr>
                    <td>Nom</td>
                    <td>
                        <p><a href="admin_modifier-profil.php">Modifier</a></p>
                    </td>
                    <td>
                        <p>Supprimer</p>
                    </td>
                </tr>
            </table>
        

            <br>
            
            <br>
        </div>
    
    </section>
    
    <?php include("footer.php"); ?>

</body>
</html>
