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
        $requete = "SELECT count(*) FROM personne where 
              mail = '".$mail."' and mdp = '".$mdp."' ";
         // select mail, mdp, statut from personne
         // if statut=='utilisateur' alors connect interface uti 
         // idem pour gestionnaire et admin
        $exec_requete = mysqli_query($db,$requete);
        $reponse      = mysqli_fetch_array($exec_requete);
        $count = $reponse['count(*)'];
        if($count!=0) // nom d'utilisateur et mot de passe correctes
        {

           $_SESSION['mail'] = $mail;
           if($mail=='administrateur@mail.com')
           {
            header('Location: admin-lancer-test1_connu.php');
           }
           if($mail=='gestionnaire@mail.com')
           {
            header('Location: gestionnaire_lancer-test1_connu.html');
           }
           if($mail=='utilisateur@mail.com')
           {
            header('Location: uti-accueil_resultat_date.php');
           }
           
        }
        else
        {
           echo "erreur not match"; // utilisateur ou mot de passe incorrect
        }
    }
    else
    {
       echo "erreur not exist"; // utilisateur ou mot de passe vide
    }
}
else
{
   header('Location: page_connexion.php');
}
mysqli_close($db); // fermer la connexion
?>