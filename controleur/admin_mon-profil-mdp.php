<?php 
require("../modele/connexionbdd.php");

if(!isset($_SESSION['mail'])) {
    header('Location: http://localhost/APP-G5B-2020-2021/accueil.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/admin_mon-profil-mdp.css" />
    <link rel="stylesheet" href="../css/header.css" />
    <link rel="stylesheet" href="../css/footer.css" />
    <title>Confidentialité et Sécurité</title>


</head>

<body>

<?php include("header.php"); ?>
    
    <section>

    <div id=menuGauche>
          <ul id=barre_nav>
              <li id="ongletdebut">
                  <a class="active" href="admin_mon-profil.php"><img class="img-responsive" src="../images/icone_profil.png" alt="icone profil" width=10px> Mon profil</a>
              </li>
              <li>
                  <a href="admin_lancer-test1_connu.php"><img class="img-responsive" src="../images/icon-survey.png" alt="icone resultats" width=10px> Lancer une session de tests </a>
              </li>
              <li>
                  <a href="admin_rechercher.php"><img class="img-responsive" src="../images/icone_loupe.png" alt="icone loupe" width=10px> Recherche </a>
              </li>
              <li>
                  <a href="admin_analyse-test.php"><img class="img-responsive" src="../images/icone_engrenage.png" alt="icone engrenage" width=10px> Analyse tests psychotechniques </a>
              </li>

              <p> Réglages :</p>
              <li>
                  <a  href="admin_gestion-utilisateur.php"><img class="img-responsive" src="../images/icone_utilisateurs.png" alt="icone utilisateurs" width=10px> Utilisateurs</a>
              </li>
              <li>
                  <a href="admin_gestion-des-capteurs.php"><img class="img-responsive" src="../images/icone_capteur2.png" alt="icone capteur" width=10px> Capteurs</a>
              </li>
              <li id="ongletfin">
                  <a href="admin_gestion-faq"><img class="img-responsive" src="../images/icone_faq.png" alt="icone faq" width=10px> F.A.Q</a>
              </li>

          </ul>

      </div>

        <div id=contenu>
            <?php 
                $requete = "SELECT * FROM personne where mail = '".$_SESSION['mail']."'";
                $exec_requete = mysqli_query($db,$requete);
                $reponse      = mysqli_fetch_array($exec_requete);
            ?>


            <h2>
                <IMG class="profil" src="<?= $reponse['photo']; ?>" alt="<?=" ". ucfirst($reponse['prenom'])." ".mb_strtoupper($reponse['nom']) ?>" width=120px><?=" ". ucfirst($reponse['prenom'])." ".mb_strtoupper($reponse['nom']) ?>
            </h2>


            <div class=onglet>
                <div class=element1>
                    <p>Confidentialité et Sécurité</p>
                </div>
                <div class=element2>
                    <p><a href="admin_mon-profil.php">Informations personnelles</a></p>
                </div>
            </div>
            <div class=formulaire>
                <form method="post" action="../modele/update_mdp.php">
                    <p>
                        <fieldset>
                            
                            <p><label>Mot de passe actuel :</label>
                            <input type="text" name="mdp0" size="50" placeholder="mot de passe"></p>
                            <p><label>Nouveau mot de passe :</label>
                            <input type="text" name="mdp1" size="50" placeholder="nouveau mot de passe"></p>
                            <p><label>Confirmer le nouveau mot de passe :</label>
                            <input type="text" name="mdp1verif" size="50" placeholder="confirmer mot de passe"></p>
                            
                            <p class="bouton"><input type="submit" value="Valider" align="right"></p>
                            
                        </fieldset>
                    </p>

                </form>
            </div>
            </br>

        </div>
    </section>

    <?php include("footer.php"); ?>

</body>

</html>