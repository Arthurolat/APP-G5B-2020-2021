<?php 
	 function ajouter_capteur(){
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
			    require"../controleur/admin_ajouter-capteurs.php";
			} 
		}
	}
	 function ajouter_new_type_capteur(){
		if(isset($_POST['nom'])&&isset($_POST['seuil'])&&isset($_POST['unite'])){
			require"../modele/connexionbdd.php";
			$image=NULL;
			if(isset($_FILES['imageCapteur'])){
				include'../modele/photo.php';
				$image='../images/'.Photo::name($_FILES['imageCapteur']['name']);
				Photo::saveImage('capteur',$_FILES['imageCapteur']['tmp_name'],$_FILES['imageCapteur']);
			}
			$requete = $bdd->prepare("INSERT INTO typecapteur(nomcapteur,seuil,photo,unite) values ('". $_POST['nom']."',".$_POST['seuil'].",'".$image."','".$_POST['unite']."')");
			$requete->execute();
			$requete2= $bdd->prepare("INSERT INTO capteur(idtypecapteur,etat,dispo,idtest) values (:idcapteur, :etat,:dispo,:idtest)");
			$requete2->execute(array(
				"idcapteur"=>$bdd->lastInsertId(),
				"etat"=>'NEUF',
				"dispo"=>1,
				"idtest"=>NULL
			));
			$_SESSION['message']='Le nouveau type de capteur a bien été ajouté';

		}

		require"../controleur/admin_ajouter-new-type-capteur.php";


	}



