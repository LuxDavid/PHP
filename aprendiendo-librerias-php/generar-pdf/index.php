<?php
require '../vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;

$html2pdf= new Html2Pdf();

// $html= "<h1>Hola desde una libreria</h1>";

//Recoger la vista a imprimir
ob_start();
require_once 'pdf_para_generar.php';
$html= ob_get_clean();

$html2pdf->writeHTML($html);
$html2pdf->output('pdf_generado.pdf');