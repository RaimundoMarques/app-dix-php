<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PacientesController extends Controller
{
    public function pacientes()
    {
        $nameApp = "Sistema de Agendamento DIX";
        $namePage = "Pacientes";

        // retornando dados da api
        $return = Http::get('http://localhost:3333/api/pacientes')->json();
        $data = array_reverse($return['data']);

        return view('/pacientes', [
            'data' => $data,
            'nameApp' => $nameApp, 
            'namePage' => $namePage
        ]);
    }
}
