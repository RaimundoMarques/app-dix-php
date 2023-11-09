<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ClinicasServicosController extends Controller
{
    public function clinicasServicos()
    {
        $nameApp = "Sistema de Agendamento DIX";
        $namePage = "Clínicas e Serviços";

        // retornando dados da api
        $return = Http::get('http://localhost:3333/api/users')->json();
        $dados = $return['data'];

        return view('/clinicasServicos', [
            'dados' => $dados,
            'nameApp' => $nameApp, 
            'namePage' => $namePage
        ]);
    }
}
