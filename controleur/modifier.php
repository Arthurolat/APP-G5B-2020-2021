<?php

$bdd = new PDO('mysql:host=mysql-appg5b.alwaysdata.net;dbname=appg5b_bdd;charset=utf8', 'appg5b', '@ppg5b2020');

$pdoStat = $bdd ->prepare('UPDATE personne SET nom=:nom, prenom=:prenom, mail=:mail, dateNaissance=:dateNaissance, tel=:tel, adresse=:adresse, mdp=:mdp WHERE idacteur=:num LIMIT 1');

$pdoStat-> bindValue(':num',$_POST['numPersonne'], PDO :: PARAM_INT);
$pdoStat-> bindValue(':nom',$_POST['nom'], PDO :: PARAM_STR);
$pdoStat-> bindValue(':prenom',$_POST['prenom'], PDO :: PARAM_STR);
$pdoStat-> bindValue(':mail',$_POST['email']);
$pdoStat-> bindValue(':dateNaissance',$_POST['date']);
$pdoStat-> bindValue(':tel',$_POST['tel']);
$pdoStat-> bindValue(':adresse',$_POST['adresse']);
$pdoStat-> bindValue(':mdp',$_POST['mdp']);

$executeIsOk = $pdoStat->execute();

header("location:http://localhost/APP-G5B-2020-2021/controleur/admin_gestion-utilisateur.php");

?>