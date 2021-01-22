<?php 
require("../modele/fonctions.php");

if(isset($_POST['bouton1'])){
    mesure_temperature($bdd);
}
?>