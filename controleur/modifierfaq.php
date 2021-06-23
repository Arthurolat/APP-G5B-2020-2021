<?php

$bdd = new PDO('mysql:host=mysql-appg5b.alwaysdata.net;dbname=appg5b_bdd;charset=utf8', 'appg5b', '@ppg5b2020');


$pdoStat = $bdd ->prepare('UPDATE faq SET question=:question, reponse=:reponse WHERE idfaq=:num LIMIT 1');

$pdoStat-> bindValue(':num',$_POST['numfaq'], PDO :: PARAM_INT);
$pdoStat-> bindValue(':question',$_POST['question']);
$pdoStat-> bindValue(':reponse',$_POST['reponse']);

$executeIsOk = $pdoStat->execute();


header("location:http://localhost/APP-G5B-2020-2021/controleur/admin_gestion-faq.php");

?>