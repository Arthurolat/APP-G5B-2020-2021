<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <title>APMD_accueil</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/accueil2.css"> 
        <link rel="stylesheet" href="../css/footer.css">
    </head>
    <body>
        <header> <!-- Bande du haut de page -->
			<div id="logo_infinite"> <!-- Logo Infinite Measures dans logo -->
				<img src="../images/logo_infinite.gif" alt="Logo Infinite Measures" />
            </div> 
                
            <nav id="menu_principal"> <!-- Menu principal de navigation dans bande du haut -->
				<ul>
					<li><a href="#">Accueil</a></li>
					<li><a href="#a_propos">A propos</a></li>
					<li><a href="#team">La team</a></li>
                    <li><a href="#formulaire_contact">Contact</a></li>
                </ul>
            </nav>

            <a id="connexion" href="#"><button>Connexion</button></a>  
        </header> 

        
        <div id="accueil">
            <div id="titre_accueil">
                <h1 data-text="Testez vos capacités !">Testez vos capacités !</h1>
            </div>
        </div>

        
        <div id="a_propos">
            
            <div id="image_idea">
                <h2>Image</h2>
            </div>
            
            <div id="description_idea">
                
                <div id="titre_idea">
                    <h1>À PROPOS</h1>
                </div>

                <div id="petite_description_idea">
                    <p>
                        Jeune start-up innovante, nous vous proposons une solution simple pour tester vos aptitudes en mission.</br>
                        Venez en apprendre plus sur nous et sur notre produit !
                    </p>
                </div>

                <a id="bouton_a_propos" href="a_propos.html"><button>En savoir plus !</button></a>
            </div>
            
        </div>

        
        <div id="team"> 
            
            <div id="titre_team">
                <h1 data-text="LA TEAM">LA TEAM</h1>
            </div>

            <div id="membres_haut">
            
                <div id="clara">
                    <img src="../images/photos_membres/clara.png" alt="Photo Clara" />
                    <h3>Clara Augié</h3>
                </div>

                <div id="constantin">
                    <img src="../images/photos_membres/constantin.png" alt="Photo Constantin" />
                    <h3>Constantin Chevalier</h3>
                </div>

                <div id="sanae">
                    <img src="../images/photos_membres/sanae.png" alt="Photo Sanae" />
                    <h3>Sanae El Messadi</h3>
                </div>

            </div>

            <div id="membres_bas">

                <div id="guillaume">
                    <img src="../images/photos_membres/guillaume.png" alt="Photo Guillaume" />
                    <h3>Guillaume Jolly</h3>
                </div>

                <div id="arthur">
                    <img src="../images/photos_membres/arthur.png" alt="Photo Arthur" />
                    <h3>Arthur Latourrette</h3>
                </div>

                <div id="thomas">
                    <img src="../images/photos_membres/thomas.png" alt="Photo Thomas" />
                    <h3>Thomas Le Deventec</h3>
                </div>

            </div>
        </div>

        <?php include("formulaire_contact.php"); ?>

        <?php include("footer.php"); ?>
    </body>
</html>