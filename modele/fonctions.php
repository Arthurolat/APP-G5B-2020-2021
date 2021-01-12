<?php

#----------------------------------recherche d'un test par un ou plusieurs criteres----------------------------
#interface admin et gestionnaire

function recherchetest_all ($bdd){
	$reponse = $bdd->prepare("SELECT CONCAT(p.prenom, ' ', p.nom) as utilisateur , DATE_FORMAT(datesession, '%d/%m/%Y à %Hh%imin%ss') as datesession, GROUP_CONCAT(distinct t.nom SEPARATOR ', ') as test
    FROM sessiontest s, resultat r, testgenerique t, personne p
    WHERE s.idsession=r.idsession AND r.idtest=t.idtest AND p.idacteur=s.idacteur 
    GROUP BY datesession");
    $reponse->execute();
    return $reponse; 

}

function recherchetest_users ($bdd, $Nomutilisateur){
    $reponse = $bdd->prepare("SELECT CONCAT(p.prenom, ' ', p.nom) as utilisateur , DATE_FORMAT(datesession, '%d/%m/%Y à %Hh%imin%ss') as datesession, GROUP_CONCAT(distinct t.nom SEPARATOR ', ') as test
    FROM sessiontest s, resultat r, testgenerique t, personne p
    WHERE s.idsession=r.idsession AND r.idtest=t.idtest AND p.idacteur=s.idacteur 
    GROUP BY datesession
    HAVING utilisateur LIKE '%$Nomutilisateur%'");
    $reponse->execute();
    return $reponse; 

}

function recherchetest_date ($bdd, $DatedesTestsTo, $DatedesTestsFrom){
    $reponse = $bdd->query("SELECT CONCAT(p.prenom, ' ', p.nom) as utilisateur , DATE_FORMAT(datesession, '%d/%m/%Y à %Hh%imin%ss') as datesession, GROUP_CONCAT(distinct t.nom SEPARATOR ', ') as test
    FROM sessiontest s, resultat r, testgenerique t, personne p
    WHERE s.idsession=r.idsession AND r.idtest=t.idtest AND p.idacteur=s.idacteur 
    AND (datesession BETWEEN '$DatedesTestsFrom' AND '$DatedesTestsTo')
    GROUP BY datesession"); 
    $reponse->execute();
    return $reponse;
}      

function recherchetest_test ($bdd, $selected){
    $reponse = $bdd->query("SELECT CONCAT(p.prenom, ' ', p.nom) as utilisateur , DATE_FORMAT(datesession, '%d/%m/%Y à %Hh%imin%ss') as datesession, GROUP_CONCAT(distinct t.nom SEPARATOR ', ') as test
    FROM sessiontest s, resultat r, testgenerique t, personne p
    WHERE s.idsession=r.idsession AND r.idtest=t.idtest AND p.idacteur=s.idacteur
    GROUP BY datesession
    HAVING test LIKE '%$selected%'");
    $reponse->execute();
    return $reponse;
}

function recherchetest_users_date ($bdd, $Nomutilisateur, $DatedesTestsTo, $DatedesTestsFrom){
    $reponse = $bdd->query("SELECT CONCAT(p.prenom, ' ', p.nom) as utilisateur , datesession, GROUP_CONCAT(distinct t.nom SEPARATOR ', ') as test
    FROM sessiontest s, resultat r, testgenerique t, personne p
    WHERE s.idsession=r.idsession AND r.idtest=t.idtest AND p.idacteur=s.idacteur
    AND (datesession BETWEEN '$DatedesTestsFrom' AND '$DatedesTestsTo') 
    GROUP BY datesession
    HAVING utilisateur LIKE '%$Nomutilisateur%'");
    $reponse->execute();
    return $reponse; 

}

function recherchetest_users_test ($bdd, $Nomutilisateur, $selected){
    $reponse = $bdd->query("SELECT CONCAT(p.prenom, ' ', p.nom) as utilisateur , DATE_FORMAT(datesession, '%d/%m/%Y à %Hh%imin%ss') as datesession, GROUP_CONCAT(distinct t.nom SEPARATOR ', ') as test
    FROM sessiontest s, resultat r, testgenerique t, personne p
    WHERE s.idsession=r.idsession AND r.idtest=t.idtest AND p.idacteur=s.idacteur
    GROUP BY datesession
    HAVING (test LIKE '%$selected%') AND (utilisateur LIKE '%$Nomutilisateur%')");
    $reponse->execute();
    return $reponse; 

}

function recherchetest_date_test ($bdd, $DatedesTestsTo, $DatedesTestsFrom, $selected){
    $reponse = $bdd->query("SELECT CONCAT(p.prenom, ' ', p.nom) as utilisateur , DATE_FORMAT(datesession, '%d/%m/%Y à %Hh%imin%ss') as datesession, GROUP_CONCAT(distinct t.nom SEPARATOR ', ') as test
    FROM sessiontest s, resultat r, testgenerique t, personne p
    WHERE s.idsession=r.idsession AND r.idtest=t.idtest AND p.idacteur=s.idacteur
    AND (datesession BETWEEN '$DatedesTestsFrom' AND '$DatedesTestsTo') 
    GROUP BY datesession
    HAVING test LIKE '%$selected%'");  
    $reponse->execute();
    return $reponse;
}

function recherchetest_users_date_test ($bdd, $Nomutilisateur, $DatedesTestsTo, $DatedesTestsFrom, $selected){
    $reponse = $bdd->query("SELECT CONCAT(p.prenom, ' ', p.nom) as utilisateur , DATE_FORMAT(datesession, '%d/%m/%Y à %Hh%imin%ss') as datesession, GROUP_CONCAT(distinct t.nom SEPARATOR ', ') as test
    FROM sessiontest s, resultat r, testgenerique t, personne p
    WHERE s.idsession=r.idsession AND r.idtest=t.idtest AND p.idacteur=s.idacteur
    AND (datesession BETWEEN '$DatedesTestsFrom' AND '$DatedesTestsTo') 
    GROUP BY datesession
    HAVING (test LIKE '%$selected%') AND (utilisateur LIKE '%$Nomutilisateur%')");                
    $reponse->execute();
    return $reponse;
}

#----------------------------------affichage des sessions de test par date----------------------------
#interface utilisateur
function session_users ($bdd, $mail){
    $reponse = $bdd->query("SELECT datesession, GROUP_CONCAT(distinct t.nom SEPARATOR '</br>- ') as test
    FROM sessiontest s, resultat r, testgenerique t, personne p
    WHERE s.idsession=r.idsession AND r.idtest=t.idtest AND p.idacteur=s.idacteur AND mail='$mail'
    GROUP BY datesession ");               
    $reponse->execute();
    return $reponse;
}
#----------------------------------affichage des resulats des tests-----------------------------
function affichage_résultats($bdd, $datesession ){
    $reponse = $bdd->query("SELECT distinct datesession, t.nom as test, valeur
    FROM sessiontest s, resultat r, testgenerique t, personne p, mesure m
    WHERE s.idsession=r.idsession AND r.idtest=t.idtest AND p.idacteur=s.idacteur AND m.idmesure=r.idmesure AND mail= session('$mail')");
    $reponse->execute();
    return $reponse;
}

#------------------------------rentrer date, nom et prénom nouveau test dans base de données---------------
function nouveau_test_bdd($bdd){
    $date = $_POST["date"];
    $prenom = $_POST["prenom"];
    $nom = $_POST["nom"];
    $sql = ("SELECT idacteur FROM personne WHERE prenom = '$prenom' AND nom = '$nom'");
    foreach ($bdd->query($sql) as $row){
        $idacteur=$row['idacteur'];
    }
    $req = $bdd->exec("INSERT INTO sessiontest(datesession, idacteur) VALUES('$date', '$idacteur')"); 
}

#-----------------------------récupérer numéro de session---------------------------------------------
function numero_session($bdd){
    $sql = ("SELECT MAX(idsession) FROM sessiontest");
    foreach ($bdd->query($sql) as $row){
        $idsession=$row['idsession'];
    }
    echo $idsession;
}

?>  