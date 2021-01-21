<?php 
require("../modele/connexionbdd.php");



if(!isset($_SESSION['mail'])) {
    header('Location: http://localhost/APP-G5B-2020-2021/accueil.php');
    exit();
}

$query = "SELECT * FROM personne";
$params = [];

if (!empty($_GET['q'])){
	$query .= " WHERE nom LIKE :nom";
	$params['nom'] = '%' . $_GET['q'] . '%';

}

$statement = $bdd ->prepare($query);
$statement -> execute($params);
$personne=$statement->fetchAll();

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
                    <a href="admin_messagerie-accueil.php"><img class="img-responsive" src="../images/icones/icone_messagerie.png" alt="icone messagerie" width=10px> Messagerie</a>
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
                <h1>Rechercher un utilisateur : </h1>
                <form action="">
                   
                   <input class="champ" type="text" value="" name="q" placeholder="Rechercher par nom">
                   <button class="btn">Rechercher</button>
                    
                </form>
            </div>
        

                        
            <table class="tableau" align="center" width="1300px">

            	<thead>
                <tr class="theader">
                    <th>Prénom</th>
                    <th>Nom</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                </tr>
            </thead>

            <tbody>
            	<?php foreach($personne as $personne): ?>
                <tr>
                    <td><?= $personne['prenom'] ?></td>
                    <td><?= $personne['nom'] ?></td>
                    <td>
                        <p><a href="admin_modifier-profil.php?numPersonne=<?=$personne['idacteur']?>">Modifier</a></p>
                    </td>
                    <td>
           
        	
        		<p>
        		<a class="supprimer" 
        		href="supprimer.php?action=delete&id=' . $result->client_id . '&validationWait=true">Supprimer</a>
        		
    			</p>
    			
                    </td>
                </tr>
                
            <?php endforeach ?>
                 
             </tbody>  
            </table>
        

            <br>
            <br>
            <div class="pagination">
                <div class="pages">
                    <a class="desactive"> &#60; Précédent</a>
                    <a class="active"> 1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#">4</a>
                    <a href="#">5</a>
                    <a class="etc">...</a>
                    <a href="#">Suivant &#62;</a>
                </div>
            </div>
            <br>
            <br>
        </div>
    
    </section>
    
    <?php include("footer.php"); ?>

</body>
</html>
