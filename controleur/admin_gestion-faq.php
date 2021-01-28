<?php 
require("../modele/connexionbdd.php");



if(!isset($_SESSION['mail'])) {
    header('Location: http://localhost/APP-G5B-2020-2021/accueil.php');
    exit();
}

$query = "SELECT * FROM faq";
$params = [];


$statement = $bdd ->prepare($query);
$statement -> execute($params);
$faq=$statement->fetchAll();

?>


<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/admin_gestion-faq.css" />
    <link rel="stylesheet" href="../css/header.css" />
    <link rel="stylesheet" href="../css/footer.css" />
    <title>Page gestion faq</title>

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
                    <a href="admin_messagerie-accueil.php"><img class="img-responsive" src="../images/icones/icone_messagerie.png" alt="icone messagerie" width=10px> Messagerie</a>
                </li>
                <li>
                    <a href="admin_lancer-test1_connu.php"><img class="img-responsive" src="../images/icones/icon-survey.png" alt="icone resultats" width=10px> Lancer une session de tests </a>
                </li>
                <li>
                    <a href="admin_rechercher.php"><img class="img-responsive" src="../images/icones/icone_loupe.png" alt="icone loupe" width=10px> Recherche </a>
                </li>
               

                <p> Réglages :</p>
                <li>
                    <a href="admin_gestion-utilisateur.php"><img class="img-responsive" src="../images/icones/icone_utilisateurs.png" alt="icone utilisateurs" width=10px> Utilisateurs</a>
                </li>
                <li>
                    <a href="admin_gestion-des-capteurs.php"><img class="img-responsive" src="../images/icones/icone_capteur2.png" alt="icone capteur" width=10px> Capteurs</a>
                </li>
                <li id="ongletfin">
                    <a class="active" href=#><img class="img-responsive" src="../images/icones/icone_faq.png" alt="icone faq" width=10px> F.A.Q</a>
                </li>

            </ul>

        </div>

        <div id="contenu">
            <h2> F.A.Q </h2>
            
            <table class="tableau" align="center">

                <thead>
                <tr class="theader">
                    <th>Question</th>
                    <th>Réponse</th>
                    <th>Modifier</th>
                </tr>
            </thead>

            <tbody>
            <?php foreach($faq as $faq): ?>
                <tr>
                    <td><?= $faq['question'] ?></td>
                    <td><?= $faq['reponse'] ?></td>
                    <td>
                        <p><a href="admin_modifier-faq.php?numfaq=<?=$faq['idfaq']?>">Modifier</a></p>
                    </td>
                    
            
            </tr>
                
            <?php endforeach ?>
                 
             </tbody>  
            </table>
        

            <br>
            
            <br>
        </div>
        
    </section>

    <?php include("footer.php"); ?>

</body>
