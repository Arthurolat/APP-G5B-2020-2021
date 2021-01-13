<?php 

if(isset($_POST['nom'])&&isset($_POST['seuil'])&&isset($_POST['unite'])){
	require"../modele/connexionbdd.php";
	$image=NULL;
	if(isset($_FILES['imageCapteur'])){
		include'../modele/photo.php';
		$image='../images/'.Photo::name($_FILES['imageCapteur']['name']);
		Photo::saveImage('capteur',$_FILES['imageCapteur']['tmp_name'],$_FILES['imageCapteur']);
	}
	$requete = "INSERT INTO typecapteur(nomcapteur,seuil,photo,unite) values ('". $_POST['nom']."',".$_POST['seuil'].",'".$image."','".$_POST['unite']."')";
	$exec_requete = mysqli_query($db,$requete);
	$_SESSION['message']='Le nouveau type de capteur a bien été ajouté';

}

require"admin_ajouter-new-type-capteur.php";

