<?php

$bdd = new PDO('mysql:host=mysql-appg5b.alwaysdata.net;dbname=appg5b_bdd;charset=utf8', 'appg5b', '@ppg5b2020');
//$bdd = new PDO('mysql:host=localhost;dbname=musique;charset=utf8', 'root', 'mdp_root');

/*
$prenom= 'clara'; 
$nom='augié';

$sql = ("SELECT idacteur FROM personne WHERE prenom='$prenom' and nom='$nom'");
foreach  ($bdd->query($sql) as $row){
    $idacteur=$row['idacteur']; 
}
echo $idacteur; 

$sql = ("SELECT * from concert");


foreach  ($bdd->query($sql) as $row){
    $id=$row['id_Concert'].' '.$row['nomConcert']; 
}
echo $id;
*/
// https://www.youtube.com/watch?v=arjtn3uNiK4


?>

<?php

$pass = "00d70c561892a94980befd12a400e26aeb4b8599";
$hash = sha1('mdp'); 
if ($pass=$hash)
{
  echo '</br>'."Mot de passe correct".'</br>';
  echo password_hash($pass, PASSWORD_DEFAULT); 
}
else
{
  echo '</br>'."Mot de passe incorrect";
}
?>

<?php
session_start();
$_SESSION['idacteur_sessiontest']='xxx';

$prenom= 'clara'; 
$nom='augié';
$sql = ("SELECT idacteur FROM personne WHERE prenom='$prenom' and nom='$nom'");
foreach  ($bdd->query($sql) as $row){
    $_SESSION['idacteur_sessiontest']=$row['idacteur']; 
}
 
echo 'resultat:'.$_SESSION['idacteur_sessiontest'];