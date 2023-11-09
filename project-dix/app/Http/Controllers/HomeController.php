<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function home()
    {
        $nameApp = "Sistema de Agendamento DIX";
        $namePage = "Home";

        // retornando dados da api
        // $return = Http::get('http://localhost:3333/api/users')->json();
        // $data = $return['data'];

        return view('/home', [
            'nameApp' => $nameApp, 
            'namePage' => $namePage
        ]);
    }
}
