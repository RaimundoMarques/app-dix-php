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

        return view('/home', [
            'nameApp' => $nameApp,
            'namePage' => $namePage
        ]);
    }
}
