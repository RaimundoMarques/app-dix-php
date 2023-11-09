<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class IndexController extends Controller
{
    public function index()
    {
        $nameApp = "Sistema de Agendamento DIX";
        $namePage = "Login";

        return view('/index', [
            'nameApp' => $nameApp,
            'namePage' => $namePage
        ]);
    }
}
