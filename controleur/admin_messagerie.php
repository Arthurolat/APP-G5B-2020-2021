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
    <link rel="stylesheet" href="../css/messagerie.css"  />
    <link rel="stylesheet" href="../css/header.css"  />
    <link rel="stylesheet" href="../css/footer.css"  />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Page d'accueil</title>

</head>

<body>

    <?php include("header.php"); ?>

<!-------messagerie---------------------->


    <div class="container">

        <div class="msg-header" >
            <div class="msg-header-img">

                <img src= "../images/icones/icone_faq.jpg">

            </div>
            <div class="active">
                <h4>Assistance</h4>
                <h6> 3 hours ago...</h6>


            </div>
            <div class="header-icons">

                <i class="fa fa-info-circle"></i>

            </div>
        </div>
        <div class="chat-page" >
            <div class="msg-inbox" >
                <div class="chats" >
                     <div class="msg-page" >
                        <div class="received-chats" >
                            <div class="received-chats-img" >
                                 <img src= "../images/icones/icone_faq.jpg">
                            </div>
                            <div class="received-msg">
                                <div class="received-msg-inbox">
                                     <p>
                                         Salut la famille. Bien ou quoi? 
                                     </p>
                                     <span class="time"> 12:30 | 26 Novembre </span>
                                </div>
                            </div>
                        </div>
                        <div class="outgoing-chats" >
                            <div class="outgoing-chats-img" >
                                 <img src= "../images/icones/icone_profil.jpg">
                            </div>
                            <div class="outgoing-chats-msg">
                                <div class="outgoing-msg-inbox">
                                     <p>
                                         Ca va tranquillou. 
                                     </p>
                                     <span class="time"> 12:37 | 26 Novembre </span>
                                </div>
                            </div>
                        </div>
                        <div class="received-chats" >
                            <div class="received-chats-img" >
                                 <img src= "../images/icones/icone_faq.jpg">
                            </div>
                            <div class="received-msg">
                                <div class="received-msg-inbox">
                                     <p>
                                         Cette messagerie est vraiment stylée 
                                     </p>
                                     <span class="time"> 12:38 | 26 Novembre </span>
                                </div>
                            </div>
                        </div>
                        <div class="outgoing-chats" >
                            <div class="outgoing-chats-img" >
                                 <img src= "../images/icones/icone_profil.jpg">
                            </div>
                            <div class="outgoing-chats-msg">
                                <div class="outgoing-msg-inbox">
                                     <p>
                                         Merci 
                                     </p>
                                     <span class="time"> 12:51 | 26 Novembre </span>
                                </div>
                            </div>
                        </div>
                        <div class="received-chats" >
                            <div class="received-chats-img" >
                                 <img src= "../images/icones/icone_faq.jpg">
                            </div>
                            <div class="received-msg">
                                <div class="received-msg-inbox">
                                     <p>
                                         Allez Bye <3 
                                     </p>
                                     <span class="time"> 12:59 | 26 Novembre </span>
                                </div>
                            </div>
                        </div>
                     </div>
                </div>
            </div>
            
        </div>
        <div class="msg-bottom">
                <div class="input-group">
                     <input type="text" class="form-control" placeholder="Ecrivez votre message...">
                    <div class="input-group-append">
                     <span class="input-group-text"><i class="fa fa-paper-plane"></i></span>
                     </div>
                 </div>
             
            
        </div>

    </div>


    
</div>
    <section>

    <div id=menuGauche>
            <ul id=barre_nav>
                <li id="ongletdebut">
                    <a  href=mon_profil.php><img class="img-responsive" src="../images/icones/icone_profil.png" alt="icone profil" width=10px> Mon profil</a>
                </li>
                <li>
                    <a class="active" href=messagerie.php><img class="img-responsive" src="../images/icones/icone_messagerie.png" alt="icone messagerie" width=10px> Messagerie</a>
                </li>
                <li>
                    <a href="admin_lancer-test1_connu.php"><img class="img-responsive" src="../images/icones/icon-survey.png" alt="icone resultats" width=10px> Lancer une session de tests </a>
                </li>
                <li>
                    <a href="admin_rechercher.php"><img class="img-responsive" src="../images/icones/icone_loupe.png" alt="icone loupe" width=10px> Recherche </a>
                </li>
                <li>
                    <a href=#><img class="img-responsive" src="../images/icones/icone_engrenage.png" alt="icone engrenage" width=10px> Analyse tests psychotechniques </a>
                </li>

                <p> Réglages :</p>
                <li>
                    <a href="admin_gestion-utilisateur.php"><img class="img-responsive" src="../images/icones/icone_utilisateurs.png" alt="icone utilisateurs" width=10px> Utilisateurs</a>
                </li>
                <li>
                    <a href="admin_gestion-des-capteurs.php"><img class="img-responsive" src="../images/icones/icone_capteur2.png" alt="icone capteur" width=10px> Capteurs</a>
                </li>
                <li id="ongletfin">
                    <a href="admin_gestion-faq.php"><img class="img-responsive" src="../images/icones/icone_faq.png" alt="icone faq" width=10px> F.A.Q</a>
                </li>

            </ul>

        </div>

        <div id=contenu>
            
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
           

        </div>
    </section>

    <?php include("footer.php"); ?>

</body>