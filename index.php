<?php
include_once('PDF.php');
$pdf = new PDF();

$pdf->AddPage('LANDSCAPE', 'LEGAL');

$pdf->SetFont('Arial', '', 10);
$miCabecera = array('COMPETENCIA', 'DEF. ÁREA', 'PENSAMIENTO', 'IHS', 'I', 'II', 'III', 'IV', 'CALF1', 'ESCALA1', 'CALF2', 'ESCALA2', 'ACTA', 'FECHA');

$misDatos = array(
    array('competencia' => 'APRENDIENDO A PENSAR', 'defArea' => '0.0', 'pensamiento' => 'PENSAMIENTO LÓGICO', 'ihs' => '1', 'I' => '4.0', 'II' => '3.0', 'III' => '2,0', 'IV' => '1,0', 'CALF1' => '3.0', 'ESCALA1' => 'BASICO', 'CALF2' => ' ', 'ESCALA2' => ' ', 'ACTA' => ' ', 'FECHA' => ' '),
    array('competencia' => 'APRENDIENDO A PENSAR', 'defArea' => '0.0', 'pensamiento' => 'PENSAMIENTO LÓGICO', 'ihs' => '1', 'I' => '4.0', 'II' => '3.0', 'III' => '2,0', 'IV' => '1,0', 'CALF1' => '3.0', 'ESCALA1' => 'BASICO', 'CALF2' => ' ', 'ESCALA2' => ' ', 'ACTA' => ' ', 'FECHA' => ' '),
    array('competencia' => 'APRENDIENDO A PENSAR', 'defArea' => '0.0', 'pensamiento' => 'PENSAMIENTO LÓGICO', 'ihs' => '1', 'I' => '4.0', 'II' => '3.0', 'III' => '2,0', 'IV' => '1,0', 'CALF1' => '3.0', 'ESCALA1' => 'BASICO', 'CALF2' => ' ', 'ESCALA2' => ' ', 'ACTA' => ' ', 'FECHA' => ' '),
    array('competencia' => 'APRENDIENDO A PENSAR', 'defArea' => '0.0', 'pensamiento' => 'PENSAMIENTO LÓGICO', 'ihs' => '1', 'I' => '4.0', 'II' => '3.0', 'III' => '2,0', 'IV' => '1,0', 'CALF1' => '3.0', 'ESCALA1' => 'BASICO', 'CALF2' => ' ', 'ESCALA2' => ' ', 'ACTA' => ' ', 'FECHA' => ' '),
    array('competencia' => 'APRENDIENDO A PENSAR', 'defArea' => '0.0', 'pensamiento' => 'PENSAMIENTO LÓGICO', 'ihs' => '1', 'I' => '4.0', 'II' => '3.0', 'III' => '2,0', 'IV' => '1,0', 'CALF1' => '3.0', 'ESCALA1' => 'BASICO', 'CALF2' => ' ', 'ESCALA2' => ' ', 'ACTA' => ' ', 'FECHA' => ' '),
    array('competencia' => 'APRENDIENDO A PENSAR', 'defArea' => '0.0', 'pensamiento' => 'PENSAMIENTO LÓGICO', 'ihs' => '1', 'I' => '4.0', 'II' => '3.0', 'III' => '2,0', 'IV' => '1,0', 'CALF1' => '3.0', 'ESCALA1' => 'BASICO', 'CALF2' => ' ', 'ESCALA2' => ' ', 'ACTA' => ' ', 'FECHA' => ' '),
    array('competencia' => 'APRENDIENDO A PENSAR', 'defArea' => '0.0', 'pensamiento' => 'PENSAMIENTO LÓGICO', 'ihs' => '1', 'I' => '4.0', 'II' => '3.0', 'III' => '2,0', 'IV' => '1,0', 'CALF1' => '3.0', 'ESCALA1' => 'BASICO', 'CALF2' => ' ', 'ESCALA2' => ' ', 'ACTA' => ' ', 'FECHA' => ' '),
    array('competencia' => 'APRENDIENDO A PENSAR', 'defArea' => '0.0', 'pensamiento' => 'PENSAMIENTO LÓGICO', 'ihs' => '1', 'I' => '4.0', 'II' => '3.0', 'III' => '2,0', 'IV' => '1,0', 'CALF1' => '3.0', 'ESCALA1' => 'BASICO', 'CALF2' => ' ', 'ESCALA2' => ' ', 'ACTA' => ' ', 'FECHA' => ' '),
    array('competencia' => 'APRENDIENDO A PENSAR', 'defArea' => '0.0', 'pensamiento' => 'PENSAMIENTO LÓGICO', 'ihs' => '1', 'I' => '4.0', 'II' => '3.0', 'III' => '2,0', 'IV' => '1,0', 'CALF1' => '3.0', 'ESCALA1' => 'BASICO', 'CALF2' => ' ', 'ESCALA2' => ' ', 'ACTA' => ' ', 'FECHA' => ' '),
    array('competencia' => 'APRENDIENDO A PENSAR', 'defArea' => '0.0', 'pensamiento' => 'PENSAMIENTO LÓGICO', 'ihs' => '1', 'I' => '4.0', 'II' => '3.0', 'III' => '2,0', 'IV' => '1,0', 'CALF1' => '3.0', 'ESCALA1' => 'BASICO', 'CALF2' => ' ', 'ESCALA2' => ' ', 'ACTA' => ' ', 'FECHA' => ' '),
    array('competencia' => 'APRENDIENDO A PENSAR', 'defArea' => '0.0', 'pensamiento' => 'PENSAMIENTO LÓGICO', 'ihs' => '1', 'I' => '4.0', 'II' => '3.0', 'III' => '2,0', 'IV' => '1,0', 'CALF1' => '3.0', 'ESCALA1' => 'BASICO', 'CALF2' => ' ', 'ESCALA2' => ' ', 'ACTA' => ' ', 'FECHA' => ' '),
    array('competencia' => 'APRENDIENDO A PENSAR', 'defArea' => '0.0', 'pensamiento' => 'PENSAMIENTO LÓGICO', 'ihs' => '1', 'I' => '4.0', 'II' => '3.0', 'III' => '2,0', 'IV' => '1,0', 'CALF1' => '3.0', 'ESCALA1' => 'BASICO', 'CALF2' => ' ', 'ESCALA2' => ' ', 'ACTA' => ' ', 'FECHA' => ' '),
);

$pdf->tablaHorizontal($miCabecera, $misDatos);
$pdf->subHeader();
$pdf->Output(); //Salida al navegador
