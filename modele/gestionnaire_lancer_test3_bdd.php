<?php 
require("../modele/fonctions.php");

if(isset($_POST['bouton1']) AND $_POST['bouton1']=='Lancer'){
    mesure_temperature($bdd);
}
?>