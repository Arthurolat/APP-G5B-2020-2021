
<?php
if(isset($_POST['quantité'])&&isset($_POST['capteurs'])){
	if ($_POST['quantité'] > 0 ){
		require"../modele/connexionbdd.php";
		$requete = "SELECT idtypecapteur FROM typecapteur WHERE nomcapteur = '".$_POST['capteurs']."'";
	    $exec_requete = mysqli_query($db,$requete);
	    $reponse      = mysqli_fetch_array($exec_requete);
	    $i=0; 
	    $idcapteur=$reponse['idtypecapteur'];
	    while($i < $_POST['quantité']){
			$insert="INSERT INTO capteur(idtypecapteur,etat,dispo,idtest) values ($idcapteur,'neuf',1,NULL)";
			mysqli_query($db,$insert);
			$i++;
	    }
	    $message="";
	    if ($_POST['quantité'] > 1)
	    	$message='Les capteurs ont bien été ajouté.' ;
	    else $message='Le capteur a bien été ajouté.' ;
	    $_SESSION['message']= $message ;
	    require"admin_ajouter-capteurs.php";
	} 
}