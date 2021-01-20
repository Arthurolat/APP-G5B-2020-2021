<?php
require("../modele/connexionbdd.php");
require("../modele/fonctions.php");


/*

if (isset($_GET['ids']))
    $ids = $_GET['ids'];
else
    $ids = 0;

if (isset($_GET['as']))
    $as = $_GET['as'];
else
    $as = annee_scolaire_actuelle();

$identite_stagiaire = $pdo->query("SELECT * FROM stagiaire WHERE id=$ids");
$stagiaire = $identite_stagiaire->fetch();

$nom_prenom = strtoupper($stagiaire['nom'] . "  " . $stagiaire['prenom']);

$date_naiss = dateEnToDateFr($stagiaire['date_naissance']);

$lieu_naiss = strtoupper($stagiaire['lieu_naissance']);

$cin = strtoupper($stagiaire['cin']);

$date_insc = dateEnToDateFr($stagiaire['date_inscription']);

$num_insc = strtoupper($stagiaire['num_inscription']);


$scolarite_stagiaire = $pdo->query("SELECT id_stagiaire,annee_scolaire,classe,nom as Nom_Filiere,niveau_diplome
										FROM scolarite,filiere
										WHERE filiere.id=scolarite.id_filiere
										AND id_stagiaire=$ids
										AND annee_scolaire='$as'");
$scolarite = $scolarite_stagiaire->fetch();

$filiere = strtoupper($scolarite['Nom_Filiere']);

$niveau = strtoupper($scolarite['niveau_diplome']);

$classe = strtoupper($scolarite['classe']);


require('affichage_tests.php'); */

//Création d'un nouveau doc pdf (Portrait, en mm , taille A5)
$pdf = new FPDF('P', 'mm', 'A4');

//Ajouter une nouvelle page
$pdf->AddPage();

// entete
$pdf->Image('../images/logo_solution.png', 10, 5, 130, 20);

// Saut de ligne
$pdf->Ln(18);


// Police Arial gras 16
$pdf->SetFont('Arial', 'B', 16);

// Titre
$pdf->Cell(0, 10, 'COMPTE RENDU DES TESTS', 'LTRB', 1, 'C');

// Saut de ligne
$pdf->Ln(5);

// Début en police Arial normale taille 10

$pdf->SetFont('Arial', '', 10);
$h = 7;
$retrait = "      ";

//Ecriture normal
$pdf->SetFont('', '');

$tableau=array('Temps de réaction à un son inattendu','Temps de réaction à une lumière', 'Fréquence cardiaque', 'Température de la peau','reconnaissance tonalité');



//Afficher le pdf
$pdf->Output('', '', true);
?>