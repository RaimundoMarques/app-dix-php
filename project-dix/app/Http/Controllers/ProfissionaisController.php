<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProfissionaisController extends Controller
{
    public function profissionais()
    {
        $nameApp = "Sistema de Agendamento DIX";
        $namePage = "Profissionais";

        // retornando dados da api
        $return = Http::get('http://localhost:3333/api/profissionais')->json();
        $data = $return['data'];

        return view('/profissionais', [
            'data' => $data,
            'nameApp' => $nameApp, 
            'namePage' => $namePage
        ]);
    }
}
