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
?>


