<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/admin_gestion-faq.css" />
    <link rel="stylesheet" href="../css/header.css" />
    <link rel="stylesheet" href="../css/footer.css" />
    <title>Page gestion faq</title>

</head>

<body>

    <?php include("header.php"); ?>


    <section>

        <div id=menuGauche>
            <ul id=barre_nav>
                <li id="ongletdebut">
                    <a href="admin_mon-profil.php"><img class="img-responsive" src="../images/icones/icone_profil.png" alt="icone profil" width=10px> Mon profil</a>
                </li>
                <li>
                    <a href="admin_lancer-test1_connu.php"><img class="img-responsive" src="../images/icones/icon-survey.png" alt="icone resultats" width=10px> Lancer une session de tests </a>
                </li>
                <li>
                    <a href="admin_rechercher.php"><img class="img-responsive" src="../images/icones/icone_loupe.png" alt="icone loupe" width=10px> Recherche </a>
                </li>
                <li>
                    <a href="admin_analyse-test.php"><img class="img-responsive" src="../images/icones/icone_engrenage.png" alt="icone engrenage" width=10px> Analyse tests psychotechniques </a>
                </li>

                <p> Réglages :</p>
                <li>
                    <a href="admin_gestion-utilisateur.php"><img class="img-responsive" src="../images/icones/icone_utilisateurs.png" alt="icone utilisateurs" width=10px> Utilisateurs</a>
                </li>
                <li>
                    <a href="admin_gestion-des-capteurs.php"><img class="img-responsive" src="../images/icones/icone_capteur2.png" alt="icone capteur" width=10px> Capteurs</a>
                </li>
                <li id="ongletfin">
                    <a class="active" href=#><img class="img-responsive" src="../images/icones/icone_faq.png" alt="icone faq" width=10px> F.A.Q</a>
                </li>

            </ul>

        </div>
        <div id="contenu">
                <h2> F.A.Q </h2>

                <form action="../modele/insert.php" method="POST">

                <h3><textarea name="question1" id="form_control" placeholder="1. Question :" row="4" required></textarea></br></h3>
                <p><textarea name="reponse1" id="form_control" placeholder="Réponse" row="4" required></textarea></br></p>
                <h3><textarea name="question2" id="form_control" placeholder="2. Question :" row="4" required></textarea></br></h3>
                <p><textarea name="reponse2" id="form_control" placeholder="Réponse" row="4" required></textarea></br></p>
                <h3><textarea name="question3" id="form_control" placeholder="3. Question :" row="4" required></textarea></br></h3>
                <p><textarea name="reponse3" id="form_control" placeholder="Réponse" row="4" required></textarea></br></p>
                <h3><textarea name="question4" id="form_control" placeholder="4. Question :" row="4" required></textarea></br></h3>
                <p><textarea name="reponse4" id="form_control" placeholder="Réponse" row="4" required></textarea></br></p>
                <h3><textarea name="question5" id="form_control" placeholder="5. Question :" row="4" required></textarea></br></h3>
                <p><textarea name="reponse5" id="form_control" placeholder="Réponse" row="4" required></textarea></br></p>
                <p><input type="submit" class="bouton" id="bouton_envoyer" value="Valider" /></p>
                </form>
            </div>

        

        
    </section>

    <?php include("footer.php"); ?>

</body>