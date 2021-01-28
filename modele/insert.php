

<?php

$bdd = new PDO('mysql:host=mysql-appg5b.alwaysdata.net;dbname=appg5b_bdd;charset=utf8', 'appg5b', '@ppg5b2020');

$pdoStat = $bdd ->prepare('UPDATE faq SET question=:question, reponse=:reponse WHERE idfaq=:num LIMIT 1');




$pdoStat-> bindValue(':question',$_POST['question'], PDO :: PARAM_INT);
$pdoStat-> bindValue(':reponse',$_POST['reponse'], PDO :: PARAM_INT);


$executeIsOk = $pdoStat->execute();

header('Location: ../controleur/admin_gestion-faq.php');


?>

