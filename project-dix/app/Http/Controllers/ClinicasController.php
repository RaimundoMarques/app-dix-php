<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class ClinicasController extends Controller
{
    public function clinicas()
    {
        $nameApp = "Sistema de Agendamento DIX";
        $namePage = "Clínicas";

        // retornando dados da api
        $return = Http::get('http://localhost:3333/api/clinicas')->json();
        $data = $return['data'];

        return view('/clinicas', [
            'data' => $data,
            'nameApp' => $nameApp,
            'namePage' => $namePage
        ]);
    }

}
