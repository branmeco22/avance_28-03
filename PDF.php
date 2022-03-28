<?php
require('fpdf/fpdf.php');

class PDF extends FPDF
{
    function cabeceraHorizontal($cabecera)
    {
        $this->SetXY(10, 10);
        $this->SetFont('Arial', 'B', 10);
        $this->SetFillColor(2, 157, 116); //Fondo verde de celda
        $this->SetTextColor(240, 255, 240); //Letra color blanco

        //     foreach ($cabecera as $fila) {
        //         $this->CellFitSpace(30, 7, utf8_decode($fila), 1, 0, 'L', true);
        //     }
        // }
        $this->CellFitSpace(40, 7, utf8_decode('COMPETENCIA'), 1, 0, 'L', true);
        $this->CellFitSpace(20, 7, utf8_decode('DEF. ÁREA'), 1, 0, 'L', true);
        $this->CellFitSpace(40, 7, utf8_decode('PENSAMIENTOS'), 1, 0, 'L', true);
        $this->CellFitSpace(8, 7, utf8_decode('IHS'), 1, 0, 'L', true);
        $this->CellFitSpace(55, 7, utf8_decode('VALORACIONES POR PERÍODO'), 1, 0, 'L', true);
        $this->CellFitSpace(45, 7, utf8_decode('DEFINITIVA ASIGNATURA'), 1, 0, 'L', true);
        $this->CellFitSpace(45, 7, utf8_decode('RECUPERACION'), 1, 0, 'L', true);
        $this->Ln();
    }

    function datosHorizontal($datos)
    {
        $this->SetXY(10, 17);
        $this->SetFont('Arial', '', 10);
        $this->SetFillColor(229, 229, 229); //Gris tenue de cada fila
        $this->SetTextColor(3, 3, 3); //Color del texto: Negro
        $bandera = false; //Para alternar el relleno
        foreach ($datos as $fila) {
            //Usaremos CellFitSpace en lugar de Cell
            $this->CellFitSpace(40, 7, utf8_decode($fila['competencia']), 1, 0, 'L', $bandera);
            $this->CellFitSpace(20, 7, utf8_decode($fila['defArea']), 1, 0, 'L', $bandera);
            $this->CellFitSpace(40, 7, utf8_decode($fila['pensamiento']), 1, 0, 'L', $bandera);
            $this->CellFitSpace(8, 7, utf8_decode($fila['ihs']), 1, 0, 'L', $bandera);
            $this->CellFitSpace(55, 7, utf8_decode($fila['valoracionPeriodo']), 1, 0, 'L', $bandera);
            $this->CellFitSpace(45, 7, utf8_decode($fila['definitivaAsignatura']), 1, 0, 'L', $bandera);
            $this->CellFitSpace(45, 7, utf8_decode($fila['recuperacion']), 1, 0, 'L', $bandera);
            $this->Ln(); //Salto de línea para generar otra fila
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
                //Calculate character spacing in points
                $char_space = ($w - $this->cMargin * 2 - $str_width) / max($this->MBGetStringLength($txt) - 1, 1) * $this->k;
                //Set character spacing
                $this->_out(sprintf('BT %.2F Tc ET', $char_space));
            }
            //Override user alignment (since text will fill up cell)
            $align = '';
        }

        //Pass on to Cell method
        $this->Cell($w, $h, $txt, $border, $ln, $align, $fill, $link);

        //Reset character spacing/horizontal scaling
        if ($fit)
            $this->_out('BT ' . ($scale ? '100 Tz' : '0 Tc') . ' ET');
    }

    function CellFitSpace($w, $h = 0, $txt = '', $border = 0, $ln = 0, $align = '', $fill = false, $link = '')
    {
        $this->CellFit($w, $h, $txt, $border, $ln, $align, $fill, $link, false, false);
    }

    //Patch to also work with CJK double-byte text
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
} // FIN Class PDF
