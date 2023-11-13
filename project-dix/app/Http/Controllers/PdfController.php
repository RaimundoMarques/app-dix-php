<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller
{
    public function geraPdf()
    {
        $paciente = Paciente::all();
        //dd($paciente);

        $pdf = PDF::loadView('relatorioPdf', compact('paciente'));

        // Para imprimir imediatamente
        //return $pdf->download('Lista_Pacientes.pdf');

        // Visualizar antes de imprimir
        return $pdf->setPaper('a4')->stream('Lista_Pacientes.pdf');
    }
}
