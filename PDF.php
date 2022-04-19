<?php
require('fpdf/fpdf.php');

class PDF extends FPDF
{
    function Header()
    {
        $this->SetFont('Arial', 'B', 12);
        $this->Image('img/carlos_ramon.png', 20, 10, 20, 20, 'png');
        $this->Cell(0, 5, 'INSTITUCION EDICATIVA CARLOS RAMON REPIZO', 0, 0, 'C');
        $this->Image('img/Escudo_del_Huila.svg.png', 310, 10, 20, 20, 'png');
        $this->Ln(3);
        $this->SetFont('Helvetica', '', 7);
        $this->Cell(0, 5, utf8_decode('SAN AGUSTÍN - HUILA'), 0, 0, 'C');
        $this->Ln(3);
        $this->Cell(0, 5, utf8_decode('Sede: Carlos Ramón Repizo Cabrera, San Martín, Siloé, Matanzas, El Playón, La Florida, Timanco, La Cuchilla, La Chaquira, Luis Carlos Galán, Purutal, Aguada'), 0, 0, 'C');
        $this->Ln(3);
        $this->Cell(0, 5, utf8_decode('Reconocimiento Oficial Res. N° 2902 del 04 de abril de 2018'), 0, 0, 'C');
        $this->Ln(3);
        $this->Cell(0, 5, utf8_decode('DANE: 141668000552 Nit: 813.013.763-7'), 0, 0, 'C');
        $this->SetFont('Arial', 'B', 12);
        $this->Ln(10);
        $this->SetTextColor(0, 0, 0);
        $this->Cell(0, 5, 'REGISTRO ESCOLAR DE VALORACIONES 2021', 0, 0, 'C');
        $this->Ln(5);

        //Enmarcación del recuado
        $this->Cell(335, -35, '', 1, 0, 'C');

        $this->Ln(1.0);
        //Enmarcación del recuado
        $this->Cell(335, 15, '', 1, 0, 'C');
        $this->Ln();
    }

    function subHeader()
    {
        $this->SetY(34);
        //sub-encabezado
        $this->SetTextColor(0, 0, 0);
        $this->Ln();
        $this->setFont('Arial', 'B', 12);
        $this->Cell(30, 5, 'Estudiante: ', 0, 0);
        $this->SetFont('Arial', '', 12);
        $this->Cell(120, 5, utf8_decode('ELIZABETH ARGOTE BOLAÑOS'), 0, 0);
        $this->Ln();
        $this->setFont('Arial', 'B', 12);
        $this->Cell(20, 5, 'Sede: ');
        $this->SetFont('Arial', '', 12);
        $this->Cell(70, 5, 'CARLOS RAMON REPIZO', 0, 0);
        $this->SetFont('Arial', 'B', 12);
        $this->Cell(15, 5, 'Grado: ');
        $this->SetFont('Arial', '', 12);
        $this->Cell(30, 5, 'PRIMERO', 0, 0);

        $this->SetFont('Arial', 'B', 12);
        $this->Cell(25, -5, utf8_decode('N° Matricula: '), 0, 0);
        $this->SetFont('Arial', '', 12);
        $this->Cell(20, -5, '2021000250', 0, 0);
        $this->Ln();
        $this->SetFont('Arial', 'B', 12);
        $this->SetX(145);
        $this->Cell(20, 15, 'Jornada: ', 0, 0);
        $this->SetFont('Arial', '', 12);
        $this->Cell(20, 15, 'COMPLETA', 0, 0);

        $this->SetFont('Arial', 'B', 12);
        $this->SetX(200);
        $this->Cell(20, 5, utf8_decode('Folio N°: '), 0, 0);
        $this->SetFont('Arial', '', 12);
        $this->Cell(20, 5, '000031', 0, 0);
        $this->Ln();
        $this->SetFont('Arial', 'B', 12);
        $this->SetX(200);
        $this->Cell(20, 5, 'Fecha: ', 0, 0);
        $this->SetFont('Arial', '', 12);
        $this->Cell(20, 5, utf8_decode('26/11/2021'));
        $this->Ln();
    }

    function cabeceraHorizontal($cabecera)
    {
        $this->SetXY(10, 54);
        $this->SetFont('Arial', 'B', 12);
        $this->SetFillColor(2, 157, 116); //Fondo verde de celda
        $this->SetTextColor(240, 255, 240); //Letra color blanco

        //     foreach ($cabecera as $fila) {
        //         $this->CellFitSpace(30, 7, utf8_decode($fila), 1, 0, 'L', true);
        //     }
        // }
        $this->CellFitSpace(60, 14, utf8_decode('COMPETENCIA'), 1, 0, 'C', true);
        $this->CellFitSpace(30, 14, utf8_decode('DEF. ÁREA'), 1, 0, 'C', true);
        $this->CellFitSpace(50, 14, utf8_decode('PENSAMIENTOS'), 1, 0, 'C', true);
        $this->CellFitSpace(15, 14, utf8_decode('IHS'), 1, 0, 'C', true);
        $this->CellFitSpace(60, 7, utf8_decode('VALORACIONES POR PERÍODO'), 1, 0, 'C', true);
        $this->CellFitSpace(60, 7, utf8_decode('DEFINITIVA ASIGNATURA'), 1, 0, 'C', true);
        $this->CellFitSpace(60, 7, utf8_decode('RECUPERACION'), 1, 0, 'C', true);
        $this->Cell(0, 7, '', 0, 1);

        //Primera linea (Fila) columna valoraciones por periodo
        $this->Cell(155, 7, '', 0, 0);
        $this->CellFitSpace(15, 7, 'I', 1, 0, 'C', true);
        $this->CellFitSpace(15, 7, 'II', 1, 0, 'C', true);
        $this->CellFitSpace(15, 7, 'III', 1, 0, 'C', true);
        $this->CellFitSpace(15, 7, 'IV', 1, 0, 'C', true);
        $this->Cell(0, 0, '', 1, 1);

        //Segunda linea (Fila) columna definitiva asignatura
        $this->Cell(215, 7, '', 0, 0);
        $this->CellFitSpace(30, 7, 'CALIF.', 1, 0, 'C', true);
        $this->CellFitSpace(30, 7, 'ESCALA', 1, 0, 'C', true);
        $this->Cell(0, 0, '', 1, 1);

        //Tercera linea (Fila) columna recuperacion
        $this->Cell(275, 7, '', 0, 0);
        $this->CellFitSpace(15, 7, 'CALIF.', 1, 0, 'C', true);
        $this->CellFitSpace(15, 7, 'ESCALA', 1, 0, 'C', true);
        $this->CellFitSpace(15, 7, 'ACTA.', 1, 0, 'C', true);
        $this->CellFitSpace(15, 7, 'FECHA', 1, 0, 'C', true);
        // $this->Cell(0, 0, '', 1, 1);
    }

    function datosHorizontal($datos)
    {
        $this->SetXY(10, 68);
        $this->SetFont('Arial', '', 12);
        $this->SetFillColor(229, 229, 229); //Gris tenue de cada fila
        $this->SetTextColor(3, 3, 3); //Color del texto: Negro
        $bandera = false; //Para alternar el relleno
        foreach ($datos as $fila) {
            //Usaremos CellFitSpace en lugar de Cell
            $this->CellFitSpace(60, 7, utf8_decode($fila['competencia']), 1, 0, 'L', $bandera);
            $this->CellFitSpace(30, 7, utf8_decode($fila['defArea']), 1, 0, 'L', $bandera);
            $this->CellFitSpace(50, 7, utf8_decode($fila['pensamiento']), 1, 0, 'L', $bandera);
            $this->CellFitSpace(15, 7, utf8_decode($fila['ihs']), 1, 0, 'L', $bandera);
            $this->CellFitSpace(15, 7, utf8_decode($fila['I']), 1, 0, 'L', $bandera);
            $this->CellFitSpace(15, 7, utf8_decode($fila['II']), 1, 0, 'L', $bandera);
            $this->CellFitSpace(15, 7, utf8_decode($fila['III']), 1, 0, 'L', $bandera);
            $this->CellFitSpace(15, 7, utf8_decode($fila['IV']), 1, 0, 'L', $bandera);
            $this->CellFitSpace(30, 7, utf8_decode($fila['CALF1']), 1, 0, 'L', $bandera);
            $this->CellFitSpace(30, 7, utf8_decode($fila['ESCALA1']), 1, 0, 'L', $bandera);
            $this->CellFitSpace(15, 7, utf8_decode($fila['CALF2']), 1, 0, 'L', $bandera);
            $this->CellFitSpace(15, 7, utf8_decode($fila['ESCALA2']), 1, 0, 'L', $bandera);
            $this->CellFitSpace(15, 7, utf8_decode($fila['ACTA']), 1, 0, 'L', $bandera);
            $this->CellFitSpace(15, 7, utf8_decode($fila['FECHA']), 1, 0, 'L', $bandera);
            $this->Ln(7); //Salto de línea para generar otra fila
            $bandera = !$bandera; //Alterna el valor de la bandera
        }
    }

    function tablaHorizontal($cabeceraHorizontal, $datosHorizontal)
    {
        $this->cabeceraHorizontal($cabeceraHorizontal);
        $this->datosHorizontal($datosHorizontal);
    }

    //***** Aquí comienza código para ajustar texto *************
    //***********************************************************
    function CellFit($w, $h = 0, $txt = '', $border = 0, $ln = 0, $align = '', $fill = false, $link = '', $scale = false, $force = true)
    {
        //Obtener ancho de cadena
        $str_width = $this->GetStringWidth($txt);

        //Calcular la relación para ajustar la celda
        if ($w == 0)
            $w = $this->w - $this->rMargin - $this->x;
        $ratio = ($w - $this->cMargin * 2) / $str_width;

        $fit = ($ratio < 1 || ($ratio > 1 && $force));
        if ($fit) {
            if ($scale) {
                //Calcular la escala horizontal
                $horiz_scale = $ratio * 100.0;
                //Establecer escala horizontal
                $this->_out(sprintf('BT %.2F Tz ET', $horiz_scale));
            } else {
                //Calcular el espacio entre caracteres en puntos
                $char_space = ($w - $this->cMargin * 2 - $str_width) / max($this->MBGetStringLength($txt) - 1, 1) * $this->k;
                //Establecer espaciado entre caracteres
                $this->_out(sprintf('BT %.2F Tc ET', $char_space));
            }
            //Anular la alineación del usuario (ya que el texto llenará la celda)
            $align = '';
        }

        //Pasar al método de celda
        $this->Cell($w, $h, $txt, $border, $ln, $align, $fill, $link);

        //Restablecer espaciado entre caracteres/escala horizontal
        if ($fit)
            $this->_out('BT ' . ($scale ? '100 Tz' : '0 Tc') . ' ET');
    }

    function CellFitSpace($w, $h = 0, $txt = '', $border = 0, $ln = 0, $align = '', $fill = false, $link = '')
    {
        $this->CellFit($w, $h, $txt, $border, $ln, $align, $fill, $link, false, false);
    }

    //Parche para trabajar también con texto de doble byte CJK
    function MBGetStringLength($s)
    {
        if ($this->CurrentFont['type'] == 'Type0') {
            $len = 0;
            $nbbytes = strlen($s);
            for ($i = 0; $i < $nbbytes; $i++) {
                if (ord($s[$i]) < 128)
                    $len++;
                else {
                    $len++;
                    $i++;
                }
            }
            return $len;
        } else
            return strlen($s);
    }
    //************** Fin del código para ajustar texto *****************
    //******************************************************************

    public function footer()
    {
        $this->SetY(151);
        $this->Ln(0.7);
        $this->Cell(335, 17.7, '', 1, 0, 'L', 0);
        $this->Cell(-290, 10, 'OBSERVACIONES: ', 0, 0, 'R', 0);
        $this->SetFont('Arial', 'B');
        $this->Cell(50, 10, 'PROMOVIDO(A) AL GRADO SEGUNDO', 0, 0, 'L', 0);
        $this->Ln(0.7);

        $this->SetFont('Arial', 'B', 10);
        $this->SetY(-45);
        $this->Cell(45, 5, 'ESCALA NACIONAL', 1, 0, 'L', 0);
        $this->Ln();
        $this->Cell(45, 5, '4.60 - 5.00 = Superior', 1, 0, 'L', 0);
        $this->Ln();
        $this->Cell(45, 5, '4.00 - 4.50 = Alto', 1, 0, 'L', 0);
        $this->Ln();
        $this->Cell(45, 5, '3.00 - 3.90 = Basico', 1, 0, 'L', 0);
        $this->Ln();
        $this->Cell(45, 5, '1.00 - 2.90 = Bajo', 1, 0, 'L', 0);

        $this->SetFont('Arial', 'B', 10);
        $this->SetXY(90, -35);
        $this->Line(85, 180, 150, 180);
        $this->Cell(55, 5, 'EDITH MARIA CERPA JIMENEZ', 0, 0, 'C', 0);
        $this->Ln();
        $this->SetFont('Arial', '', 10);
        $this->SetXY(90, -30);
        $this->Cell(55, 5, 'RECTOR(A)', 0, 0, 'C', 0);

        $this->SetFont('Arial', 'B', 10);
        $this->SetXY(225, -35);
        $this->Line(220, 180, 310, 180);
        $this->Cell(75, 5, utf8_decode('JACQUELINE MONTAÑEZ BOHORQUEZ'), 0, 0, 'C', 0);
        $this->Ln();
        $this->SetFont('Arial', '', 10);
        $this->SetXY(225, -30);
        $this->Cell(75, 5, utf8_decode('SECRETARÍA ACADEMICA'), 0, 0, 'C', 0);
    }
} // FIN Class PDF

$pdf = new PDF();

$pdf->Output;
