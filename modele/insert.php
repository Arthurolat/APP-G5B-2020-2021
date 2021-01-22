<?php

require("../modele/connexionbdd.php");

$sql=" INSERT INTO 'faq' ('question', 'reponse')
	VALUES
    ('$_POST[question1]','$_POST[reponse1]')";
$sql=" INSERT INTO 'faq' ('question', 'reponse')
VALUES
('$_POST[question2]','$_POST[reponse2]')";
$sql=" INSERT INTO 'faq' ('question', 'reponse')
VALUES
('$_POST[question3]','$_POST[reponse3]')";
$sql=" INSERT INTO 'faq' ('question', 'reponse')
VALUES
('$_POST[question4]','$_POST[reponse4]')";
$sql=" INSERT INTO 'faq' ('question', 'reponse')
VALUES
('$_POST[question5]','$_POST[reponse5]')";    
    header('Location: ../controleur/admin_gestion-faq.php');

    mysqli_close($db); // fermer la connexion

?>

