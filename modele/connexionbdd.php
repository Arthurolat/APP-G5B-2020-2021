<?php
  $db_id = 'appg5b';
  $db_mdp = '@ppg5b2020';
  $db_nom     = 'appg5b_bdd';
  $db_host     = 'mysql-appg5b.alwaysdata.net';
  $db = mysqli_connect($db_host, $db_id, $db_mdp,$db_nom)
  or die('could not connect to database');

  $bdd = new PDO('mysql:host=mysql-appg5b.alwaysdata.net;dbname=appg5b_bdd;charset=utf8', 'appg5b', '@ppg5b2020');

  session_start();
?>