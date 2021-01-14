<?php 
require("../modele/connexionbdd.php");
require("../modele/fonctions.php");

/* Récupération des valeurs des champs du formulaire */
$Nomutilisateur= $_POST['Nomutilisateur'];
$DatedesTestsFrom= $_POST['DatedesTestsFrom'];
$DatedesTestsTo= $_POST['DatedesTestsTo'];
$Testpsychotechniques= isset($_POST['Testpsychotechniques']) ? $_POST['Testpsychotechniques'] : NULL;
$tableau= array($Nomutilisateur, $DatedesTestsTo, $DatedesTestsFrom, $Testpsychotechniques);


/* Selection des criteres de recherche */
switch($tableau){
    case array(null, null, null, null): #recherche vide 
        $reponse = recherchetest_all($bdd);
    break;

    case array(empty(trim($Nomutilisateur)), null, null, null): #recherche vide 
        $reponse = recherchetest_all($bdd);
    break;

    case array($Nomutilisateur, null, null, null): #champs 1 ok
        $reponse = recherchetest_users($bdd,$Nomutilisateur);
            
    break;

    case array(null, $DatedesTestsTo, $DatedesTestsFrom, null): #champs 2 ok si selection des deux
        $reponse = recherchetest_date($bdd,$DatedesTestsTo, $DatedesTestsFrom);
    break;

    case array(empty(trim($Nomutilisateur)), $DatedesTestsTo, $DatedesTestsFrom, null):
        $reponse = recherchetest_date($bdd,$DatedesTestsTo, $DatedesTestsFrom);
    break;

    case array(null, null, null, $Testpsychotechniques): 
        foreach ($Testpsychotechniques as $selected){
            $reponse = recherchetest_test ($bdd, $selected); 
        }                 
    break;

    case array(empty(trim($Nomutilisateur)), null, null, $Testpsychotechniques): 
        foreach ($Testpsychotechniques as $selected){
            $reponse = recherchetest_test ($bdd, $selected); 
        }
    break;

    case array($Nomutilisateur, $DatedesTestsTo, $DatedesTestsFrom, null):
        $reponse = recherchetest_users_date($bdd,$Nomutilisateur,$DatedesTestsTo, $DatedesTestsFrom);
    break;

    case array($Nomutilisateur, null, null, $Testpsychotechniques): 
        foreach ($Testpsychotechniques as $selected){
            recherchetest_users_test ($bdd, $Nomutilisateur, $selected); 
        }
    break;

    case array(null, $DatedesTestsTo, $DatedesTestsFrom, $Testpsychotechniques): 
        foreach ($Testpsychotechniques as $selected){
            recherchetest_date_test ($bdd, $DatedesTestsTo, $DatedesTestsFrom, $selected); 
        }
    break;

    case array(empty(trim($Nomutilisateur)), $DatedesTestsTo, $DatedesTestsFrom, $Testpsychotechniques): 
        foreach ($Testpsychotechniques as $selected){
            recherchetest_date_test ($bdd, $DatedesTestsTo, $DatedesTestsFrom, $selected);
        }
    break;

    case array($Nomutilisateur, $DatedesTestsTo, $DatedesTestsFrom, $Testpsychotechniques): 
        foreach ($Testpsychotechniques as $selected){
            recherchetest_users_date_test ($bdd, $Nomutilisateur, $DatedesTestsTo, $DatedesTestsFrom, $selected);
        }
    break;
}

include("../vues/affichage-recherche_test.php");            
?>