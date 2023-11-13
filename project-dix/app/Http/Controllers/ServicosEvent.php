<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servico;

class ServicosEvent extends Controller
{
    public function index()
    {
        $servico = Servico::all();

        return view('servicos', [
            'servico' => $servico
        ]);
    }

    public function showCreate()
    {
        return view('events.createServico');
    }
}
