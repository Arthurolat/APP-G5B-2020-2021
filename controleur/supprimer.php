<?php 

$bdd = new PDO('mysql:host=mysql-appg5b.alwaysdata.net;dbname=appg5b_bdd;charset=utf8', 'appg5b', '@ppg5b2020');

$pdoStat = $bdd ->prepare('DELETE FROM personne WHERE idacteur=:num LIMIT 1');

$pdoStat-> bindValue(':num',$_GET['numPersonne'], PDO :: PARAM_INT);

$executeIsOk = $pdoStat->execute();

header("location:http://localhost/APP-G5B-2020-2021/controleur/admin_gestion-utilisateur.php");





?>
