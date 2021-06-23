<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name: "viewport" content="width=device-wigth, initial-scale=1.0">
    <link rel="stylesheet" href="../css/page_connexion.css" />
    <link rel="stylesheet" href="../css/header.css" />
    <link rel="stylesheet" href="../css/footer.css" />
    <title>Connexion</title>

</head>





<body>
    
    <a href="http://localhost/APP-G5B-2020-2021/accueil.php" ><img class="logohome" src="../images/icones/logo_home.png" width='30px'/></a>

    <div class="connexioncontainer">
        <div class="slidersection">
            <img src="../images/Infinite_measures.gif" alt="" width="300px" />


        </div>
        <form class="connexionsection " action="../modele/verification.php" method="POST">
            <h1>Connexion</h1>
            <div class="inputRow">
                <div class="inputIcon">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAABO0lEQVRIS+2WUVLCMBCG/82UIzj2DW8gIr57lHoS0pPATTyAingDfUM5Ap2sk5QyKS1tQiP1oXlLZrPf/v8mmRB6GtQTFwP4Ys6XrB7F00QxzQm4CVkBA5+CON1tVssi7wEcxbNHMD+HBB7nIiXudtuXtV63wRLM878EgyjNNq/yJFhXxkJpW247FvJBSiQs1LvJ0wbOvt+ME1E8O98FCxJd37MXWAePrh4mnuqNyqKXRoArGMCalHgqbXZRb6m0il4AmDgpPvSVWWY/q7SYN6ivqqwrtK3HRweqWX2bSjuZJzjfWqNeL3u14yxwjq+or+3lqTvYAVxR73XlOoP36vfC8hPrMgKBXVDlmAHc+V12Nf2/Wd3PR8A8BPE0AZNkYOzqnkscAV8glrVfH5cEIWOGf3VINxtz9Wb1L7qpBi5hnLNaAAAAAElFTkSuQmCC"
                    />
                </div>
                <input type="text" name="mail" id="Usermail" placeholder="E-Mail">

            </div>
            <div class="inputRow">
                <div class="inputIcon">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAABgUlEQVRIS+2WT07CUBDGv4+WxJ1utCzhBKLVPZ5AvAGeQDyJegK5gXAC3UtNbyDuqG5gZ0KfY15TEiiFvloSYtK3I8zM75s/b16JHR3uiIs/ga0jt03IsRYtrPgqGA7yJpALXK2ddkR4B+AgAZqQcjsbv/VMBRiDbce9B3CTEfghDLyuCdwIHJWWeIoDTknpWvh50b8VKi0RalH7UekFV+rT62fBjcC24/oAdE+nNlXze+yPFgPv1Zr1UCxto+F+GHgnhcFx0Pc40NpSLrbCpmokxSWFZGZs185aEHmOHMmLcDyMSpw8S+3YYDf32xrYVGAJXulZ9fC8KVSXAtZJdOKr0iNkaaLnjml2FGsw+3rV075yUnscb6jHrCth8j8p12kbLRVsO+5kvhBMgm+yEWCkAq9hdJ1sx5WiwEX/MPBWElyXcQkuVPmy1NHaT6thOdWFJgvAvxiura1MAh+zwKsbrcydPRJaXfQsWtIu0l8q9nM9i0Vgpr6Z31ymgfLa/QKYm9QfKRNKGwAAAABJRU5ErkJggg=="/>
                </div>
                <input type="Password" name="mdp" id="Userpassword" placeholder="Mot de passe">

            </div>
            <div class="row">
                <!--<div class="col">
                    <input type="checkbox" name="rememberMe" id="rememberMe">
                    <label for="remenberMe" class="souvenir"> Se souvenir de moi</label>
                </div>-->
                <a href="#" class="forgotPassword">Mot de passe oublié ?</a>
            </div>

            <div class="btnRow">
                <input type="submit" value="Connexion" class="btn" id="loginBtn">
            </div>
            <?php
            if(isset($_GET['erreur']))
            {
                $err = $_GET['erreur'];
                if($err==1 || $err==2)
                    echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>"; 
                       
            }
            ?>
        </form>
    </div>
    
    
            
</body>

</html>
