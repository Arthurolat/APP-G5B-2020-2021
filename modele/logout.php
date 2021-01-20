<?php

session_start();
$_SESSION=array();
session_destroy(); 
header('Location: http://localhost/APP-G5B-2020-2021/accueil.php');
exit(); 

?>