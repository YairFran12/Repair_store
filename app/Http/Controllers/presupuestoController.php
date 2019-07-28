<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade as PDF;

use Illuminate\Http\Request;

class presupuestoController extends Controller
{
    public function crearPDF()
    {

        return view('Presupuesto');
    }

    public function descargarPDF()
    {

        $pdf = PDF::loadView('presupuesto');

        return $pdf->download();
    }
}
