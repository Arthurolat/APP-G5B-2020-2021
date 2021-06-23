<?php 
require("../modele/fonctions.php");

if(isset($_POST['bouton4'])){
    mesure_temperature($bdd);
}

if(isset($_POST['bouton6'])){
    mesure_frequence_cardiaque($bdd);
}

if(isset($_POST['bouton5'])){
    mesure_reconnaissance_tonalite($bdd);
}

if(isset($_POST['bouton1'])){
    mesure_temps_reaction_son($bdd);
}

if(isset($_POST['bouton2'])){
    mesure_temps_reaction_lumiere_attendue($bdd);
}

if(isset($_POST['bouton3'])){
    mesure_temps_reaction_lumiere_inattendue($bdd);
}
?>