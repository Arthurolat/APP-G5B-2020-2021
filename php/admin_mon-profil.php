<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/admin_mon-profil.css" />
    <link rel="stylesheet" href="../css/header.css" />
    <link rel="stylesheet" href="../css/footer.css" />
    <title>Mon profil</title>
    

</head>

<body>
    <?php include("header.php"); ?>
    
      <section>

      <div id=menuGauche>
            <ul id=barre_nav>
                <li id="ongletdebut">
                    <a class="active" href=#><img class="img-responsive" src="../images/icone_profil.png" alt="icone profil" width=10px> Mon profil</a>
                </li>
                <li>
                    <a href="admin_messagerie-accueil.php""><img class="img-responsive" src="../images/icone_messagerie.png" alt="icone messagerie" width=10px> Messagerie</a>
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
            <h2><IMG class="profil" src="../images/photos_membres/thomas.png" alt="Thomas LE DEVENTEC" width=120px>
            Thomas Le Deventec</h2>
            


            <div class=onglet>
                <div class=element1>
                    <p>Informations personnelles</p>
                </div>
                <div class=element2>
                    <p><a href="admin_mon-profil-mdp.php">Confidentialité et Sécurité</a></p>
                </div>
            </div>
            <div class="tableau">

                <table class=tableau align="center" width="1300px">
               
                   <tr>
                    <td>Prénom</td>
                    
                    <td>
                        <p>Thomas</p>
                    </td>
                </tr>
                 <tr>
                    <td>Nom</td>
                    
                    <td>
                        <p>LE DEVENTEC</p>
                    </td>
                </tr>
                <tr>
                    <td>Adresse mail</td>
                    
                    <td>
                        <p>thomas.le-deventec@isep.fr</p>
                    </td>
                </tr>
                <tr>
                    <td>Société et fonction</td>
                   
                    <td>
                        <p>ISEP </br>
                        Etudiant en A1</p>
                    </td>
                </tr>
                <tr>
                    <td>Adresse</td>
                   
                    <td>
                        <p>10 rue de Vanves ISSY LES MOULINEAUX</p>
                    </td>
                </tr>
                <tr>
                    <td>Téléphone</td>
                    
                    <td>
                        <p>06.54.32.17.56</p>
                    </td>
                </tr>

            </table>
            </div>
            </br>

        </div>
        </section>

    <?php include("footer.php"); ?>
</body>
</html>
