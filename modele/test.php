<?php

$bdd = new PDO('mysql:host=mysql-appg5b.alwaysdata.net;dbname=appg5b_bdd;charset=utf8', 'appg5b', '@ppg5b2020');

$prenom= 'clara'; 
$nom='augié';

$sql = ("SELECT idacteur FROM personne WHERE prenom='$prenom' and nom='$nom'");
foreach  ($bdd->query($sql) as $row){
    $idacteur=$row['idacteur']; 
}
echo $idacteur; 

?>

