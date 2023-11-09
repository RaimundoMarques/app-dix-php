<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class EspecialidadeController extends Controller
{
    public function especialidades()
    {
        $nameApp = "Sistema de Agendamento DIX";
        $namePage = "Especialidades";

        // retornando dados da api
        $return = Http::get('http://localhost:3333/api/especialidades')->json();
        $data = array_reverse($return['data']);

        return view('/especialidades', [
            'data' => $data,
            'nameApp' => $nameApp, 
            'namePage' => $namePage
        ]);
    }
}
