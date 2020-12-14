<?php
session_start();
if(isset($_POST['mail']) && isset($_POST['mdp']))
{
    // connexion à la base de données
    $db_mail = 'mail_bdd';
    $db_mdp = 'mdp_bdd';
    $db_name     = 'bdd v1.sql';
    $db_host   = 'localhost';
    $db = mysqli_connect($db_host, $db_mail, $db_mdp,$db_name)
           or die('could not connect to database');
    
    // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
    // pour éliminer toute attaque de type injection SQL et XSS
    $mail = mysqli_real_escape_string($db,htmlspecialchars($_POST['mail'])); 
    $mdp = mysqli_real_escape_string($db,htmlspecialchars($_POST['mdp']));
    
    if($mail !== "" && $mdp !== "")
    {
        $requete = "SELECT count(*) FROM personne where 
              nom_utilisateur = '".$mail."' and mot_de_passe = '".$mdp."' ";
        $exec_requete = mysqli_query($db,$requete);
        $reponse      = mysqli_fetch_array($exec_requete);
        $count = $reponse['count(*)'];
        if($count!=0) // nom d'utilisateur et mot de passe correctes
        {

           $_SESSION['mail'] = $mail;
           if($mail='administrateur@mail.com')
           {
            header('Location: admin-lancer-test1_connu.php');
           }
           if($mail='gestionnaire@mail.com')
           {
            header('Location: gestionnaire_lancer-test1_connu.html');
           }
           if($mail='utilisateur@mail.com')
           {
            header('Location: uti-accueil_resultat_date.php');
           }
           
        }
        else
        {
           header('Location: login.php?erreur=1'); // utilisateur ou mot de passe incorrect
        }
    }
    else
    {
       header('Location: login.php?erreur=2'); // utilisateur ou mot de passe vide
    }
}
else
{
   header('Location: page_connexion.php');
}
mysqli_close($db); // fermer la connexion
?>