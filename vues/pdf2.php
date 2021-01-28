<?php 
require __DIR__.'/vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;
ob_start();
include('php/impression_resultats.php');
$content = ob_get_clean();




$html2pdf = new Html2Pdf();
$html2pdf->writeHTML($content, isset($_GET['vuehtml']));
$html2pdf->output();

?>