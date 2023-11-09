<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ServicosController extends Controller
{
    public function servicos(){

        $nameApp = "Sistema de Agendamento DIX";
        $namePage = "Serviços";

        // retornando dados da api
        $return = Http::get('http://localhost:3333/api/servicos')->json();
        $data = $return['data'];

        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";

        return view('servicos', [
            'data' => $data,
            'nameApp' => $nameApp, 
            'namePage' => $namePage
        ]);
    }
}
