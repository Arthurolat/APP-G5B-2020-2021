<?php

require("../modele/connexionbb.php");
require("../modele/fonctions.php");

add_utilisateur($bdd);
header('Location:http://localhost/APP-G5B-2020-2021/controleur/gestionnaire_lancer-test1_connu.php');

?>