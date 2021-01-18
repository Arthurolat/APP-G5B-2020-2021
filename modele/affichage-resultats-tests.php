 <?php 
require("../modele/connexionbdd.php");
require("../modele/fonctions.php");

/* Récupération des valeurs des champs du formulaire */
$datesession= $_POST['datesession'];
$idacteur= $_POST['idacteur'];
$reponse= affichage_resultats($bdd,$datesession, $idacteur);



include("../vues/gestionnaire_recherche-tableau-resultat-voir.php");            
?>