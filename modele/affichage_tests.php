<?php
require("../modele/connexionbdd.php");
require("../modele/fonctions.php");

$Tempsson= $_POST['Tempsson'];
$Tempslumière= $_POST['Tempslumière'];
$Freqcardiaque= $_POST['Freqcardiaque'];
$Température=$_POST['Température'];
$Tonalité=$_POST['Tonalité']
$tableau= array($Tempsson, $Tempslumière, $Freqcardiaque, $Température, $Tonalité );