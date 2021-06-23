<?php
require("../modele/connexionbdd.php");
require("../modele/fonctions.php");

/* Récupération des valeurs des champs du formulaire */
$idacteur= $_POST['idacteur'];
//$idacteur=3;// à changer apres la liaison dans l'administrateur 
$reponse= moyenne_resultats($bdd, $idacteur);



include("../controleur/admin_analyse-test.php");
           
?>
