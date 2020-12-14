<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name: "viewport" content="width=device-wigth, initial-scale=1.0">
    <link rel="stylesheet" href="../css/page_connexion.css" />
    <title>Connexion</title>

</head>
<header>
    <nav>
        <ul>
            <div id="logoinfi_container">
                <img class="logo_infinite" src="../images/logo_infinite.gif" alt="" />
            </div>
            <div id="logosolution_container">
                <img class="logo_solution" src="../images/logo_solution.png" alt="" />
            </div>
            <li>
                <a href="#"><img class="logohome" src="../images/icones/logo_home.png" /></a>
            </li>
        </ul>
    </nav>
</header>

<body>

        <div class="connexioncontainer">
            <div class="slidersection">
                <img src="../images/Infinite_measures.gif" alt="" width="300px" />

            </div>
            <form class="connexionsection " action="verification.php" method="POST">
                <h1>Connexion</h1>
                <div class="inputRow">
                    <div class="inputIcon">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAABO0lEQVRIS+2WUVLCMBCG/82UIzj2DW8gIr57lHoS0pPATTyAingDfUM5Ap2sk5QyKS1tQiP1oXlLZrPf/v8mmRB6GtQTFwP4Ys6XrB7F00QxzQm4CVkBA5+CON1tVssi7wEcxbNHMD+HBB7nIiXudtuXtV63wRLM878EgyjNNq/yJFhXxkJpW247FvJBSiQs1LvJ0wbOvt+ME1E8O98FCxJd37MXWAePrh4mnuqNyqKXRoArGMCalHgqbXZRb6m0il4AmDgpPvSVWWY/q7SYN6ivqqwrtK3HRweqWX2bSjuZJzjfWqNeL3u14yxwjq+or+3lqTvYAVxR73XlOoP36vfC8hPrMgKBXVDlmAHc+V12Nf2/Wd3PR8A8BPE0AZNkYOzqnkscAV8glrVfH5cEIWOGf3VINxtz9Wb1L7qpBi5hnLNaAAAAAElFTkSuQmCC"
                        />
                    </div>
                    <input type="text" name="EMail" id="Usermail" placeholder="E-Mail">

                </div>
                <div class="inputRow">
                    <div class="inputIcon">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAABgUlEQVRIS+2WT07CUBDGv4+WxJ1utCzhBKLVPZ5AvAGeQDyJegK5gXAC3UtNbyDuqG5gZ0KfY15TEiiFvloSYtK3I8zM75s/b16JHR3uiIs/ga0jt03IsRYtrPgqGA7yJpALXK2ddkR4B+AgAZqQcjsbv/VMBRiDbce9B3CTEfghDLyuCdwIHJWWeIoDTknpWvh50b8VKi0RalH7UekFV+rT62fBjcC24/oAdE+nNlXze+yPFgPv1Zr1UCxto+F+GHgnhcFx0Pc40NpSLrbCpmokxSWFZGZs185aEHmOHMmLcDyMSpw8S+3YYDf32xrYVGAJXulZ9fC8KVSXAtZJdOKr0iNkaaLnjml2FGsw+3rV075yUnscb6jHrCth8j8p12kbLRVsO+5kvhBMgm+yEWCkAq9hdJ1sx5WiwEX/MPBWElyXcQkuVPmy1NHaT6thOdWFJgvAvxiura1MAh+zwKsbrcydPRJaXfQsWtIu0l8q9nM9i0Vgpr6Z31ymgfLa/QKYm9QfKRNKGwAAAABJRU5ErkJggg=="/>
                    </div>
                    <input type="Password" name="Mot de passe" id="Userpassword" placeholder="Mot de passe">

                </div>
                <div class="row">
                    <div class="col">
                        <input type="checkbox" name="rememberMe" id="rememberMe">
                        <label for="remenberMe" class="souvenir"> Se souvenir de moi</label>
                    </div>
                    <a href="#" class="forgotPassword">Mot de passe oublié ?</a>
                </div>

                <div class="btnRow">
                    <input type="submit" value="Connexion" class="btn" id="loginBtn">
                </div>
                <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
                ?>
            </form>
        </div>
    </div>
<footer>
    <div id="logostart_container">
        <img src="../images/logo_apmd.png" alt="" />
    </div>
    
    <div class="footer_social_icons">
        <ul>
            <li>
                <a href="#" target="blanck"><img class="facebook" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAACYElEQVRIS8WWP3LTQBTGv7caSOlwAswM9qTDKcDucE6AHUEd34DhBCgnYHICTE2MxQkgFbYpcJmJPIO4gV06nuxjVlhBkldarRpvaevt733v7xL2dGhPXFiDn3Y+d8FODcytyGmiOQSWix+nVzYiSoEbz8ctCPkWQA/AYQ5gCcCHFBfBz/7c5EQhuN4aHz44kB8ADEwXZf4fbtbiXTjvK2e0Jxe8VTkGULeExp+HkKKfp14L3kK/FYS1rC9LSHGig++At+H9VUYpAX8Y5BPxfUhZogvCy4Rn4WYtjrNh3wE3Ol+GYD4zS6KLzZq87IXNzshjxvuUPdGnYHKaqpMUeBtipbb4MK6CmdvVfaQFA3BIPLme9MPYJg0uqZaY+zez134SHPU3OUySlbLdLsioToPbI5WrmkkwpDhOFkyzfekz6JXBbhlM3Uc7ipXHxEJVsvEEUzfrMBuNADDJk8Xkzfdo4MUGzReXPSZSfWs8VcHJFP0H66oxx4XKYML5zcT10oqLwAVVnPWtKN+kAzc6owEYH7UiLcCN9kgtiGe6e7ShLiwuO3B+oSW6oWw7hcwYxioWM/c8qUgNDSkRAYkQ5VBzVsHUvV+plQZIpeIqGiBHnXH9juVvUz9VAReOTAUsM4WswaYlocBqLT48kHMGHucptwGr1Xm7Fi3jWlSw7ZZSo007ty3AK0jRLfUQiFUqOAnp65SXAUePBCl6Vk+fGP4v7HfD7OYxgQn89XbtDCo99pL5jaod7IFZPW9rOeAViHwH5CUXfl6dlHpXJ41VCrLh0/1maklrsOnCsv/vDfwX2/FCLmrpZ4MAAAAASUVORK5CYII="
                    /></a>
            </li>
            <li>
                <a href="#" target="blanck"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAACK0lEQVRIS+1WQXbSUBS9N6AdylypJC6guALpDnAFpSsoDqzMjLNQB9Yd0BWAK1B30C5Ag02dyxCP/Od5IbGBhORXzrEDmyH//Xvfu/++9yBu6eMt8eKO+J8pv7XUrX7Y+HUfR6T0ALQATEU4qv/E++mp+0MraQ1C/R3TwJ2mla0QK8hiR8a1OZ+nl8okePgybDuOjBPC9dA4AYfSFYDR0GtnA1aIm8dhF5QxgXNnzv0q8uarr+cA9sqSE+IbQFUDV4H7qbDi3cEXX4Sv9VDJF4aH39+6Cp770iQtTKFy0xh2sliFFWfBROjXHZxl30fPs0lWkM/WSZPCrq8lb6wGeJAHkwngjGrEhSZhS0zKm8vgib+Ol3P17nHYF8o7Cwk1wditZZ8VcXMQ9iBmD6A6sFMFanVOHkaBOyqt+NEg7FDkoxWgZZAxfFpk0JzUNi1iyalhs2joNYric8TJUNB+KzDYDSiXoR+iode1ItYgHXELiA/BwY2pMheE3M8OjSxW4axOhsPRVgYjPkeBt9GghcTl/WynwSZTpbc3bid9a9ZkQsFjO6rrKApfXJ64p6X9XQUa9zakY/3exFkUePFS+Gtildzs4EDUaEBhW6yAW5LqnT9Sxwv93nLFOURLaDoAtRWqCYEZyH7RhNpU9cobx5Nr2UbPqqRKzmcCGdXnjl+1u0tHZnqofWxgeiJsg2hkErkAoft1CsNJdOJOLBPMhW39n+uO2FaB/0/q318B4B/XZZO3AAAAAElFTkSuQmCC"
                    /></a>
            </li>
            <li>
                <a href="#" target="blanck"><img class="youtube" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAABUklEQVRIS+2W3VXCQBCFv/Ek5/imViAdSAdKB9KBHWgHYgWWoB2IFQgd0IHYAe+ujmeWIHGNOoZAeGDeNufeuZm/nRVaMmlJl53wxjK/XalWsjPgtBS+nZ2mU5DpHCwz0IkQxin5S8RK3oX3B5COU8UJs5/Z6wuvkwUhEc5GSaROxy7YSAi9b8LKfgfCs8tFbVA4EpjFIix8FHV9qu3TR+wJwbJaFs4vQO8c/EfAeuDEgU0g2hfehmnEA+Da4exGCAMlvwI1zoGDs4BE7krCRlY4hMwcXTrFmxFe9kdszHvHRKxF2Prjr4umGeEi1ZbmWDeHrS6sxCm4JdbZbVXC7nGycbBx6rrllsCqOY6LoY0LpKUrcz6Xa10SYyF8dn3FWmQIelyjfr9Q5AU4/3EtJgujPJPWSP/p3rgICrN1WD7Hz9v19Gk2zdXedhFvIsvtNtcHrDZ2HxZzvJMAAAAASUVORK5CYII="
                    /></a>
            </li>
            <li>
                <a href="#" target="blanck"><img class="linkedin" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAABbUlEQVRIS+2X4VGDQBCF3xMLiBXkrECsQK3AEoTkr4l0YOyASfybXKzEdKAdeHRAAcI6lxEGcEZDcpI4Iz+PY7/bt7tvDmJPD/fExeGAVaQVMuk7VcJjYuLQVGPWMrZQyeTNKfQzGD2eVuF18K2+FMrzr4CFV+YxXBWxNwEnAHaWnm3AhIRmNlyqSPckE3vas23VaANOktlAFSA1mgcC6i7AoMcTE4ephanxIhbBXSdgACsScZ7TJyUC0OsKvC3ny3dtagy7uYiQQwISNyJ4OgKX63XmvoABPQYmDl/XJYm0yjOJCVzXDKNNVyezQTluajyfiPCelAczHU4KCIC06IMqqD9a2Cm4KOfWJbjs+Ej3mvDmFLSS+qeMG92e0uN5YYuq4YLOwf3RQko5K2Wwa7V3LqVWkfYlk5fuwU05O8v4H/znpXZm1NZd24xTd+B9XfZK439HefNwkvUxzLfXWyeQDYMczp/EhgfeedsHfoWuLghKbj0AAAAASUVORK5CYII="
                    /></a>
            </li>
        </ul>
    </div>
    <div class="footer_menu_one">
        <ul>
            <li><a href="a_propos.php">A propos</a></li>
            <li><a href="#">Contactez-nous</a></li>
            <li><a href="#">Mentions légales</a></li>
            <li><a href="#">FAQ</a></li>
    
        </ul>
    
    </div>
    
    <div class="footer_bottom">
        <p>Design by: <a href="#">APMD</a></p>
    </div>
</footer>

</body>

</html>
