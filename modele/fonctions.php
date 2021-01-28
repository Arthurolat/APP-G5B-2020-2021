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
    WHERE s.idsession=r.idsession AND r.idtest=t.idtest AND p.idacteur=s.idacteur AND 
    AND (datesession BETWEEN '$DatedesTestsFrom' AND '$DatedesTestsTo') 
    GROUP BY datesession
    HAVING (test LIKE '%$selected%') AND (utilisateur LIKE '%$Nomutilisateur%')");                
    $reponse->execute();
    return $reponse;
}


// nouvelle fonction recherche multicriteres
function recherchetest_multicriteres ($bdd, $Nomutilisateur, $DatedesTestsTo, $DatedesTestsFrom, $Testpsychotechniques, $selected) {
    $chaine = "SELECT CONCAT(p.prenom, ' ', p.nom) as utilisateur , DATE_FORMAT(datesession, '%d/%m/%Y à %Hh%imin%ss') as datesession,
    datesession as datemesure, GROUP_CONCAT(distinct t.nom SEPARATOR ', ') as test, p.idacteur as idacteur
    FROM sessiontest s, resultat r, testgenerique t, personne p
    WHERE s.idsession=r.idsession AND r.idtest=t.idtest AND p.idacteur=s.idacteur";
    if (!empty($DatedesTestsFrom) && !empty($DatedesTestsTo)){
        $chaine.=" AND (datesession BETWEEN '$DatedesTestsFrom' AND '$DatedesTestsTo')"; //contat°//
    }
    if (count($Testpsychotechniques)> 0){
        $chaine.=" AND ( ";
    }
    foreach ($Testpsychotechniques as $selected){
            $chaine.= " t.nom = '$selected' OR "; 
        }       
    if (count($Testpsychotechniques)> 0){
        $chaine.=" t.nom = '' ) ";
    }
    $chaine.= " GROUP BY datesession ";
    if (!empty($Nomutilisateur)){
        $chaine.=" HAVING utilisateur LIKE '%$Nomutilisateur%' "; //contat°//
        //$chaine.=" AND p.nom='$Nomutilisateur' " ;
    }
    //print_r($chaine);
    //$chaine.= "GROUP BY datesession ";
    /*HAVING test LIKE '%$selected%'" ;*/
    $reponse = $bdd->query($chaine);  
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
function affichage_resultats($bdd, $datesession, $idacteur ){
    $reponse = $bdd->query("SELECT * FROM mesure m
    WHERE m.idacteur= $idacteur AND m.datemesure='$datesession'");
    $reponse->execute();
    return $reponse;
    //print_r($reponse);
}


#------------------------------utilisateur existant : rentrer date, nom et prénom nouveau test dans base de données---------------
function nouveau_test_bdd($bdd){
    $prenom = $_POST["prenom"];
    $nom = $_POST["nom"];
    $date= $_POST['date'];
   
    $sql = ("SELECT idacteur FROM personne WHERE prenom = '$prenom' AND nom = '$nom'");
    foreach ($bdd->query($sql) as $row){
        $_SESSION['idacteur_sessiontest']=$var=$row['idacteur'];
    }
    
    $sql = $bdd->exec("INSERT INTO sessiontest(datesession, idacteur) VALUES('$date', '$var')");
        
     
}

#-----------------------------ajout utilisateur dans bdd lors du lancement d'une session de test-------------------------------------------
function add_utilisateur($bdd){
    $nom_uti= $_POST['nom'];
    $prenom_uti= $_POST['prenom'];
    $email= $_POST['email'];
    $naissance= $_POST['datenaissance'];
    $tel= $_POST['tel'];
    $adresse= $_POST['adresse'].', '.$_POST['ville'].', '.$_POST['codepostal'];
    
    $requete = $bdd->prepare("INSERT INTO personne(prenom, nom, mail, dateNaissance, tel, adresse) VALUES ('$nom_uti','$prenom_uti','$email','$naissance','$tel', '$adresse')");
    $requete->execute();

    
}
#-----------------------------récupérer numéro de session---------------------------------------------
function numero_session($bdd){
    $sql = ("SELECT idsession FROM sessiontest ORDER BY idsession DESC LIMIT 1");
    foreach ($bdd->query($sql) as $row){
        $_SESSION['numero_session']=$donnees=$row['idsession'];
    }
    echo $donnees;

    //$reponse = $bdd->query("SELECT MAX(idsession) AS idsession FROM sessiontest");
    //$donnees = $reponse->fetch();
    //$_SESSION['numero_session'] = $donnees;
    //print_r($_SESSION['numero_session']);  
}


#----------------------------rentrer mesure température peau-------------------------------------
function mesure_temperature($bdd){
    $idcapteur = $idtest = 4;
    $date = date("Y-m-d H:i:s");
    $idsession = $_SESSION['numero_session'];
    $valeur_defaut=0;
    $req = $bdd->exec("INSERT INTO mesure(datemesure, valeur, idcapteur) VALUES('$date', '$valeur_defaut', '$idcapteur')");
    $sql = ("SELECT idmesure FROM mesure ORDER BY idmesure DESC LIMIT 1");
    foreach ($bdd->query($sql) as $row){
        $idmesure=$row['idmesure'];
    }
    //$reponse = $bdd->query("SELECT MAX(idmesure) AS idmesure FROM mesure");
    //$reponse->execute();
    //$idmesure = $reponse;
    //$idmesure = $idmesure['mesure'];
    $req = $bdd->exec("INSERT INTO resultat(idsession, idtest, idmesure) VALUES('$idsession', '$idtest', '$idmesure')");   
}

#------------------------------inserer valeur mesure temperature peau----------------------------
function valeur_mesure($bdd){
    $valeur = $_POST['valeur'];
    $sql = ("SELECT idmesure FROM mesure ORDER BY idmesure DESC LIMIT 1");
    foreach ($bdd->query($sql) as $row){
        $idmesure=$row['idmesure'];
    }
    $req = $bdd->exec("UPDATE mesure SET valeur='$valeur' WHERE idmesure = '$idmesure'");
}

#-------------------------------------recap session--------------------
function recap_session($bdd){
    $idsession=$_SESSION['numero_session'];
    $reponse = $bdd->prepare("SELECT m.datemesure as heure, t.nom as test, m.valeur as valeur, t.unite as unite
    FROM mesure m, testgenerique t, resultat r
    WHERE m.idmesure=r.idmesure AND t.idtest=r.idtest AND r.idsession='$idsession'
    ORDER BY m.datemesure ASC");
    $reponse->execute();
    return $reponse;
}

?>  


       