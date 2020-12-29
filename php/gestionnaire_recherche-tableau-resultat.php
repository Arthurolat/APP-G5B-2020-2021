<?php
//connection à la bdd
try {
    $bdd = new PDO('mysql:host=mysql-appg5b.alwaysdata.net;dbname=appg5b_bdd;charset=utf8', 'appg5b', '@ppg5b2020');

}
catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
session_start();
?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/gestionnaire_recherche-tableau-resultat.css" /> <!-- css idem -->
    <link rel="stylesheet" href="../css/header.css" />
    <link rel="stylesheet" href="../css/footer.css" />
    <title>Page d'accueil</title>

</head>


<body>

    <?php include("header.php"); ?>

    <section>

    <div id=menuGauche>
            <ul id=barre_nav>
                <li id="ongletdebut">
                    <a href="gestionnaire_mon-profil.php"><img class="img-responsive" src="../images/icones/icone_profil.png" alt="icone profil" width=10px> Mon profil</a>
                </li>
                <li>
                    <a href="gestionnaire_messagerie-accueil.php"><img class="img-responsive" src="../images/icones/icone_messagerie.png" alt="icone messagerie" width=10px> Messagerie</a>
                </li>
                <li>
                    <a href="gestionnaire_lancer-test1_connu.php"><img class="img-responsive" src="../images/icones/icon-survey.png" alt="icone resultats" width=10px> Lancer une session de tests </a>
                </li>
                <li>
                    <a class="active" href="gestionnaire_rechercher.php"><img class="img-responsive" src="../images/icones/icone_loupe.png" alt="icone loupe" width=10px> Recherche </a>
                </li>
                <li id="ongletfin">
                    <a href="gestionnaire_analyse-test.php"><img class="img-responsive" src="../images/icones/icone_engrenage.png" alt="icone engrenage" width=10px> Analyse tests psychotechniques </a>
                </li>

            </ul>

        </div>

        <div id=contenu>
            <h2> Résultats </h2>
            
            <?php 
            $Nomutilisateur= $_POST['Nomutilisateur'];
            $DatedesTestsFrom= $_POST['DatedesTestsFrom'];
            $DatedesTestsTo= $_POST['DatedesTestsTo'];
            $Testpsychotechniques= isset($_POST['Testpsychotechniques']) ? $_POST['Testpsychotechniques'] : NULL;
            $tableau= array($Nomutilisateur, $DatedesTestsTo, $DatedesTestsFrom, $Testpsychotechniques);

            switch($tableau){
                case array(null, null, null, null): #recherche vide ok
                    echo "champs vide"; 
                    $reponse = $bdd->query("SELECT CONCAT(p.prenom, ' ', p.nom) as utilisateur , datesession, GROUP_CONCAT(distinct t.nom SEPARATOR ', ') as test
                    FROM sessiontest s, resultat r, testgenerique t, personne p
                    WHERE s.idsession=r.idsession AND r.idtest=t.idtest AND p.idacteur=s.idacteur 
                    GROUP BY datesession");
                break;

                case array(empty(trim($Nomutilisateur)), null, null, null): #recherche vide ok
                    echo "champs vide"; 
                    $reponse = $bdd->query("SELECT CONCAT(p.prenom, ' ', p.nom) as utilisateur , datesession, GROUP_CONCAT(distinct t.nom SEPARATOR ', ') as test
                    FROM sessiontest s, resultat r, testgenerique t, personne p
                    WHERE s.idsession=r.idsession AND r.idtest=t.idtest AND p.idacteur=s.idacteur 
                    GROUP BY datesession");
                break;

                case array($Nomutilisateur, null, null, null): #champs 1 ok
                    print_r($Nomutilisateur.'</br>'); 
                    $reponse = $bdd->query("SELECT CONCAT(p.prenom, ' ', p.nom) as utilisateur , datesession, GROUP_CONCAT(distinct t.nom SEPARATOR ', ') as test
                    FROM sessiontest s, resultat r, testgenerique t, personne p
                    WHERE s.idsession=r.idsession AND r.idtest=t.idtest AND p.idacteur=s.idacteur 
                    GROUP BY datesession
                    HAVING utilisateur LIKE '%$Nomutilisateur%'");
                     
                break;

                case array(null, $DatedesTestsTo, $DatedesTestsFrom, null): #champs 2 ok si selection des deux
                    print_r($DatedesTestsFrom.'</br>');
                    print_r($DatedesTestsTo.'</br>');  
                    $reponse = $bdd->query("SELECT CONCAT(p.prenom, ' ', p.nom) as utilisateur , datesession, GROUP_CONCAT(distinct t.nom SEPARATOR ', ') as test
                    FROM sessiontest s, resultat r, testgenerique t, personne p
                    WHERE s.idsession=r.idsession AND r.idtest=t.idtest AND p.idacteur=s.idacteur 
                    AND (datesession BETWEEN '$DatedesTestsFrom' AND '$DatedesTestsTo')
                    GROUP BY datesession"); 
                break;

                case array(empty(trim($Nomutilisateur)), $DatedesTestsTo, $DatedesTestsFrom, null): #champs 2 ok
                    print_r($DatedesTestsFrom.'</br>');
                    print_r($DatedesTestsTo.'</br>');  
                    $reponse = $bdd->query("SELECT CONCAT(p.prenom, ' ', p.nom) as utilisateur , datesession, GROUP_CONCAT(distinct t.nom SEPARATOR ', ') as test
                    FROM sessiontest s, resultat r, testgenerique t, personne p
                    WHERE s.idsession=r.idsession AND r.idtest=t.idtest AND p.idacteur=s.idacteur 
                    AND (datesession BETWEEN '$DatedesTestsFrom' AND '$DatedesTestsTo')
                    GROUP BY datesession");
                break;

                case array(null, null, null, $Testpsychotechniques): #champs 3 ok 
                   foreach ($Testpsychotechniques as $selected){
                       $reponse = $bdd->query("SELECT CONCAT(p.prenom, ' ', p.nom) as utilisateur , datesession, GROUP_CONCAT(distinct t.nom SEPARATOR ', ') as test
                       FROM sessiontest s, resultat r, testgenerique t, personne p
                       WHERE s.idsession=r.idsession AND r.idtest=t.idtest AND p.idacteur=s.idacteur
                       GROUP BY datesession
                       HAVING test LIKE '%$selected%'"); 
                   }
                                   
                       
                break;

                case array(empty(trim($Nomutilisateur)), null, null, $Testpsychotechniques): #champs 3 ok
                    foreach ($Testpsychotechniques as $selected){
                        $reponse = $bdd->query("SELECT CONCAT(p.prenom, ' ', p.nom) as utilisateur , datesession, GROUP_CONCAT(distinct t.nom SEPARATOR ', ') as test
                        FROM sessiontest s, resultat r, testgenerique t, personne p
                        WHERE s.idsession=r.idsession AND r.idtest=t.idtest AND p.idacteur=s.idacteur
                        GROUP BY datesession
                        HAVING test LIKE '%$selected%'"); 
                    }
                break;

                case array($Nomutilisateur, $DatedesTestsTo, $DatedesTestsFrom, null):
                    echo "champs 1+2";
                    $reponse = $bdd->query("SELECT CONCAT(p.prenom, ' ', p.nom) as utilisateur , datesession, GROUP_CONCAT(distinct t.nom SEPARATOR ', ') as test
                    FROM sessiontest s, resultat r, testgenerique t, personne p
                    WHERE s.idsession=r.idsession AND r.idtest=t.idtest AND p.idacteur=s.idacteur
                    AND (datesession BETWEEN '$DatedesTestsFrom' AND '$DatedesTestsTo') 
                    GROUP BY datesession
                    HAVING utilisateur LIKE '%$Nomutilisateur%'");
                break;

                case array($Nomutilisateur, null, null, $Testpsychotechniques): 
                    echo "champs 1+3";
                    foreach ($Testpsychotechniques as $selected){
                        $reponse = $bdd->query("SELECT CONCAT(p.prenom, ' ', p.nom) as utilisateur , datesession, GROUP_CONCAT(distinct t.nom SEPARATOR ', ') as test
                        FROM sessiontest s, resultat r, testgenerique t, personne p
                        WHERE s.idsession=r.idsession AND r.idtest=t.idtest AND p.idacteur=s.idacteur
                        GROUP BY datesession
                        HAVING (test LIKE '%$selected%') AND (utilisateur LIKE '%$Nomutilisateur%')"); 
                    }
                break;

                case array(null, $DatedesTestsTo, $DatedesTestsFrom, $Testpsychotechniques): 
                    echo "champs 2+3";
                    foreach ($Testpsychotechniques as $selected){
                        $reponse = $bdd->query("SELECT CONCAT(p.prenom, ' ', p.nom) as utilisateur , datesession, GROUP_CONCAT(distinct t.nom SEPARATOR ', ') as test
                        FROM sessiontest s, resultat r, testgenerique t, personne p
                        WHERE s.idsession=r.idsession AND r.idtest=t.idtest AND p.idacteur=s.idacteur
                        AND (datesession BETWEEN '$DatedesTestsFrom' AND '$DatedesTestsTo') 
                        GROUP BY datesession
                        HAVING test LIKE '%$selected%'"); 
                    }
                break;

                case array(empty(trim($Nomutilisateur)), $DatedesTestsTo, $DatedesTestsFrom, $Testpsychotechniques): 
                    echo "champs 2+3";
                    foreach ($Testpsychotechniques as $selected){
                        $reponse = $bdd->query("SELECT CONCAT(p.prenom, ' ', p.nom) as utilisateur , datesession, GROUP_CONCAT(distinct t.nom SEPARATOR ', ') as test
                        FROM sessiontest s, resultat r, testgenerique t, personne p
                        WHERE s.idsession=r.idsession AND r.idtest=t.idtest AND p.idacteur=s.idacteur
                        AND (datesession BETWEEN '$DatedesTestsFrom' AND '$DatedesTestsTo') 
                        GROUP BY datesession
                        HAVING test LIKE '%$selected%'"); 
                    }
                break;

                case array($Nomutilisateur, $DatedesTestsTo, $DatedesTestsFrom, $Testpsychotechniques): 
                    echo "all";
                    foreach ($Testpsychotechniques as $selected){
                        $reponse = $bdd->query("SELECT CONCAT(p.prenom, ' ', p.nom) as utilisateur , datesession, GROUP_CONCAT(distinct t.nom SEPARATOR ', ') as test
                        FROM sessiontest s, resultat r, testgenerique t, personne p
                        WHERE s.idsession=r.idsession AND r.idtest=t.idtest AND p.idacteur=s.idacteur
                        AND (datesession BETWEEN '$DatedesTestsFrom' AND '$DatedesTestsTo') 
                        GROUP BY datesession
                        HAVING (test LIKE '%$selected%') AND (utilisateur LIKE '%$Nomutilisateur%')"); 
                    }
                break;
            }
                        
            ?>

            <table>
                <tr class="theader">
                    <th>Utilisateur</th>
                    <th>Date</th>
                    <th>Tests réalisés</th>
                    <th> </th>
                </tr>
                <?php 
                while ($donnees = $reponse->fetch())
                { 
                ?>
                <tr>
                    <td><?php echo $donnees['utilisateur']?></td>
                    <td>Session réalisée le </br> <?php echo $donnees['datesession']?></td>
                    <td><?php echo $donnees['test']?></td>
                    <td>
                        <p><a href="gestionnaire_recherche-tableau-resultat-voir.php">Voir</a></p>
                    </td>
                </tr>
                <?php }
                    
                ?>
                <tr>
                    <td>Arthur Latourrette</td>
                    <td>Session réalisée le </br> 2020-10-27 à 15h32</td>
                    <td>test son, test lumière, test fréquence</td>
                    <td>
                        <p><a href="gestionnaire_recherche-tableau-resultat-voir.php">Voir</a></p>
                    </td>
                </tr>
                <tr>
                    <td>Sanae El Messadi</td>
                    <td>Session réalisée le </br> 2020-10-27 à 15h32</td>
                    <td>test son, test lumière, test fréquence</td>
                    <td>
                        <p><a href="gestionnaire_recherche-tableau-resultat-voir.php">Voir</a></p>
                    </td>
                </tr>
                <tr>
                    <td>Thomas Le Deventec</td>
                    <td>Session réalisée le </br> 2020-10-27 à 15h32</td>
                    <td>test son, test lumière, test fréquence</td>
                    <td>
                        <p><a href="gestionnaire_recherche-tableau-resultat-voir.php">Voir</a></p>
                    </td>
                </tr>
                <tr>
                    <td>Guillaume Jolly</td>
                    <td>Session réalisée le </br> 2020-10-27 à 15h32</td>
                    <td>test son, test lumière, test fréquence</td>
                    <td>
                        <p><a href="gestionnaire_recherche-tableau-resultat-voir.php">Voir</a></p>
                    </td>
                </tr>
                <tr>
                    <td>Costantin Chevalier</td>
                    <td>Session réalisée le </br> 2020-10-27 à 15h32</td>
                    <td>test son, test lumière, test fréquence</td>
                    <td>
                        <p><a href="gestionnaire_recherche-tableau-resultat-voir.php">Voir</a></p>
                    </td>
                </tr>

            </table>
            </br>
            </br>
            </br>

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
            </br>
            </br>
        </div>
    </section>

    <?php include("footer.php"); ?>
    
</body>