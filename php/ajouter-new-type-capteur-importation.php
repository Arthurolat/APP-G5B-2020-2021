<?php 
	
if(isset($_POST['nom'])&&isset($_POST['seuil'])&&isset($_POST['unite'])){
	require"../modele/connexionbdd.php";
	$requete = "INSERT INTO typecapteur(nomcapteur,seuil,photo,unite) values ('". $_POST['nom']."',".$_POST['seuil'].",'". $_POST['imageCapteur']."','".$_POST['unite']."')";
	$exec_requete = mysqli_query($db,$requete);
	$_SESSION['message']='Le nouveau type de capteur a bien été ajouté';

}

require"admin_ajouter-new-type-capteur.php";