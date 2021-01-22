<?php

$bdd = new PDO('mysql:host=mysql-appg5b.alwaysdata.net;dbname=appg5b_bdd;charset=utf8', 'appg5b', '@ppg5b2020');

$pdoStat = $bdd ->prepare('UPDATE personne SET nom=:nom, prenom=:prenom, mail=:mail, dateNaissance=:dateNaissance, tel=:tel, adresse=:adresse, mdp=:mdp WHERE idacteur=:num LIMIT 1');

$pdoStat-> bindValue(':num',$_POST['numPersonne'], PDO :: PARAM_INT);

$pdoStat-> bindValue(':num',$_POST['numPersonne'], PDO :: PARAM_INT);
$pdoStat-> bindValue(':nom',$_POST['nom'], PDO :: PARAM_INT);
$pdoStat-> bindValue(':prenom',$_POST['prenom'], PDO :: PARAM_INT);
$pdoStat-> bindValue(':mail',$_POST['email'], PDO :: PARAM_INT);
$pdoStat-> bindValue(':dateNaissance',$_POST['date'], PDO :: PARAM_INT);
$pdoStat-> bindValue(':tel',$_POST['tel'], PDO :: PARAM_INT);
$pdoStat-> bindValue(':adresse',$_POST['adresse'], PDO :: PARAM_INT);
$pdoStat-> bindValue(':mdp',$_POST['Mdp'], PDO :: PARAM_INT);

$executeIsOk = $pdoStat->execute();


?>



