<?php
session_start();

if(isset($_POST['mail']) && isset($_POST['mdp']))
{

   $db_id = 'appg5b';
   $db_mdp = '@ppg5b2020';
   $db_nom     = 'appg5b_bdd';
   $db_host     = 'mysql-appg5b.alwaysdata.net';
   $db = mysqli_connect($db_host, $db_id, $db_mdp,$db_nom)
   or die('could not connect to database');


    // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
    // pour éliminer toute attaque de type injection SQL et XSS
   $mail = mysqli_real_escape_string($db,htmlspecialchars($_POST['mail'])); 
   $mdp = mysqli_real_escape_string($db,htmlspecialchars($_POST['mdp']));
    
   if($mail !== "" && $mdp !== "")
   {
      $requete = "SELECT count(*), statut FROM personne where 
            mail = '".$mail."' and mdp = '".$mdp."' ";
      // select mail, mdp, statut from personne
      // if statut=='utilisateur' alors connect interface uti 
      // idem pour gestionnaire et admin
      $exec_requete = mysqli_query($db,$requete);
      $reponse      = mysqli_fetch_array($exec_requete);
      $count = $reponse['count(*)'];
      $statut= $reponse['statut'];
      if($count!=0) // nom d'utilisateur et mot de passe correctes
      {

         $_SESSION['mail'] = $mail;
         if($statut=='admin')
         {
         header('Location: admin_lancer-test1_connu.php');
         }
         if($statut=='gestionnaire')
         {
         header('Location: gestionnaire_lancer-test1_connu.php');
         }
         if($statut=='utilisateur')
         {
         header('Location: uti-accueil_resultat_date.php');
         }
         
      }
      else
      {
         echo "erreur : vérifier le mot de passe et/ou l'identifiant"; // utilisateur ou mot de passe incorrect
      }
   }
   else
   {
      echo "erreur : veuiller remplir le mot de passe et/ou l'identifiant"; // utilisateur ou mot de passe vide
   }

}
else
{
   header('Location: page_connexion.php');
}
mysqli_close($db); // fermer la connexion
?>