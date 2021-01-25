<?php 
require("../modele/fonctions.php");

$reponse = recap_session($bdd);

include("../vues/affichage-resultat_session.php");
?>