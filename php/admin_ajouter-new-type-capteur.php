<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset="UTF-8">
    <!-- <link rel="stylesheet" type ="text/css" href="../css/cssaccueil_admin.css" /> -->
    <link rel="stylesheet" type="text/css" href="../css/admin_ajouter-new-type-capteur.css">
    <link rel="stylesheet" href="../css/header.css" />
    <link rel="stylesheet" href="../css/footer.css" />
    <title>Page d'accueil</title>
</head>

<body>

    <?php include("header.php"); ?>
    

    <section>

        <div id=menuGauche>
            <ul id="barre_nav">
                <li id="ongletdebut">
                    <a href=#><img class="img-responsive" src="../images/icone_profil.png" alt="icone profil" width=10px> Mon profil</a>
                </li>
                <li>
                    <a href=#><img class="img-responsive" src="../images/icone_messagerie.png" alt="icone messagerie" width=10px> Messagerie</a>
                </li>
                <li>
                    <a href="admin_lancer-test1_connu.php"><img class="img-responsive" src="../images/icon-survey.png" alt="icone resultats" width=10px> Lancer une session de tests </a>
                </li>
                <li>
                    <a href="admin_rechercher.php"><img class="img-responsive" src="../images/icone_loupe.png" alt="icone loupe" width=10px> Recherche </a>
                </li>
                <li>
                    <a href=#><img class="img-responsive" src="../images/icone_engrenage.png" alt="icone engrenage" width=10px> Analyse tests psychotechniques </a>
                </li>

                <p> Réglages :</p>
                <li>
                    <a href=#><img class="img-responsive" src="../images/icone_utilisateurs.png" alt="icone utilisateurs" width=10px> Utilisateurs</a>
                </li>
                <li>
                    <a class="active" href="admin_gestion-des-capteurs.php"><img class="img-responsive" src="../images/icone_capteur2.png" alt="icone capteur" width=10px> Capteurs</a>
                </li>
                <li id="ongletfin">
                    <a href=#><img class="img-responsive" src="../images/icone_faq.png" alt="icone faq" width=10px> F.A.Q</a>
                </li>

            </ul>

        </div>
        <div id="contenu">
            <h2> Gestion des capteurs </h2>
                <h3>Ajouter un nouveau capteur</h3>
                    <section class="section1">
                        <form method="post" action="#">
                                 <label for="Nomcapteurinput">Nom du capteur :</label>
                                 <input type="text" name="Nom" id="nomcapteurinput" placeholder="Nom">
                                 <label for="Seuilinput">Veuillez saisir le seuil :</label>
                                 <input type="text" name="Seuil" id="Seuilinput" placeholder="Seuil">
                                 <label for="Imageinput">Image du capteur :</label>
                                 <input type="file" name="ImageCapteur" id="Imageinput" placeholder="Image">
                                 <label for="Nomcapteurinput">Unité de mesure :</label>
                                 <input type="text" name="unite" id="unitecapteur" placeholder="Unité">
                                 <button>Enregistrer</button> 
                        </form>
                    </section>
               

        </div>
    </section>

    <?php include("footer.php"); ?>

</body>