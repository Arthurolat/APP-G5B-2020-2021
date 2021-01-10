<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/uti-mon_profil.css" />
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
                    <a class="active" href=#><img class="img-responsive" src="../images/icones/icone_profil.png" alt="icone messagerie" width=10px> Mon profil</a>
                </li>
                <li>
                    <a href="#"><img class="img-responsive" src="../images/icones/icone_messagerie.png" alt="icone messagerie" width=10px> Messagerie</a>
                </li>
                <li>
                    <a href="uti-accueil_resultat_date.php"><img class="img-responsive" src="../images/icones/icon-survey.png" alt="icone resultats" width=10px> Consulter mes résultats</a>
                </li>
                <li>
                    <a href="uti-accueil_mes_tests.php"><img class="img-responsive" src="../images/icones/icone_folder.png" alt="icone report" width=10px> Analyse de mes tests</a>
                    <ul>
                        <li><a href="uti-accueil_mes_tests.php#div-test-son">1. Temps de réaction à un son</a></li>
                        <li><a href="uti-accueil_mes_tests.php#div-test-lumière">2. Temps de réaction à une lumière</a></li>
                        <li><a href="uti-accueil_mes_tests.php#div-test-freq">3. Fréquence cardiaque</a></li>
                        <li><a href="uti-accueil_mes_tests.php#div-test-temperature">4. Température de la peau</a></li>
                        <li id="ongletfin"><a href="uti-accueil_mes_tests.php#div-test-tonalite">5. Reconnaissance de tonalité</a></li>
                    </ul>
                </li>

            </ul>

        </div>

        <div id=contenu>
             <?php require"../modele/connexionbdd.php";
                        $requete = "SELECT * FROM personne where mail = '".$_SESSION['mail']."'";
                        $exec_requete = mysqli_query($db,$requete);
                        $reponse      = mysqli_fetch_array($exec_requete);
                    ?>

            <h2>
                <IMG class="profil" src="../images/photos_membres/thomas.png" alt="<?=" ". ucfirst($reponse['prenom'])." ".mb_strtoupper($reponse['nom']) ?>" width=120px><?=" ". ucfirst($reponse['prenom'])." ".mb_strtoupper($reponse['nom']) ?></h2>



            <div class=onglet>
                <div class=element1>
                    <p>Informations personnelles</p>
                </div>
                <div class=element2>
                    <p><a href="uti-mon_profil_mdp.php">Confidentialité et Sécurité</a></p>
                </div>
            </div>
            <div class="tableau">

                <table class=tableau align="center" width="1300px">

                    <tr>
                        <td>Prénom</td>

                        <td>
                            <p><?= ucfirst($reponse['prenom'])?></p>

                        </td>
                    </tr>
                    <tr>
                        <td>Nom</td>

                        <td>
                            <p><?=mb_strtoupper($reponse['nom']) ?></p>
                        </td>
                    </tr>
                    <tr>
                        <td>Adresse mail</td>

                        <td>
                            <p><?=$reponse['mail']?></p>
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
                            <p><?=ucfirst($reponse['adresse'])?></p>
                        </td>
                    </tr>
                    <tr>
                        <td>Téléphone</td>

                        <td>
                            <p><?=$reponse['tel']?></p>
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