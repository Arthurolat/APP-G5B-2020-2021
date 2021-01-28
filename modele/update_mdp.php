<?php
require("../modele/connexionbdd.php");


$mdp0=$_POST['mdp0']; 
$mdp1=$_POST['mdp1']; 
$mdp1verif=$_POST['mdp1verif']; 
$mail=$_SESSION['mail'];

$mdp0=sha1($mdp0);
$checkMDP=$bdd->prepare("SELECT mdp FROM personne WHERE mail='$mail'");
$checkMDP->execute();

function redirection(){
    if($_SESSION['mail']=="gestionnaire@gmail.com"){
        header("Location: http://localhost/APP-G5B-2020-2021/controleur/gestionnaire_mon-profil-mdp.php");
    }
    if($_SESSION['mail']=="admin@gmail.com"){
        header("Location: http://localhost/APP-G5B-2020-2021/controleur/admin_mon-profil-mdp.php");
    }
    else{
        header("location: http://localhost/APP-G5B-2020-2021/controleur/uti-mon_profil_mdp.php"); 
    }
}


while ($donnees = $checkMDP->fetch()){ 
    if($donnees['mdp']==$mdp0){
        if($mdp1==$mdp1verif){
            $newMDP=$bdd->prepare("UPDATE personne SET mdp=sha1('$mdp1') WHERE mail='$mail'");
            $newMDP->execute();
            redirection($mail);
        }else{
            redirection($mail); 
        }  
    }else{
        redirection($mail);
    }
}

 

?>