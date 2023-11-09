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

        //dd($data);

        for ($i = 0; $i < count($data); $i++) {
            extract($data[$i]);

            $ids[] = $id;
            $nomes[] = $nome;
            $cpfs[] = $cpf;
            $telefones[] = $telefone;
            $cidades[] = $cidade;
            $tipos[] = $tipo;
        }

        return view('/pacientes', [
            'ids' => $ids,
            'nomes' => $nomes,
            'cpfs' => $cpfs,
            'telefones' => $telefones,
            'cidades' => $cidades,
            'tipos' => $tipos,
            'nameApp' => $nameApp,
            'namePage' => $namePage
        ]);
    }

    public function create()
    {
        $namePage = "Cadastro de Clientes";

        return view('events.create', [
            'namePage' => $namePage
        ]);
    }
}
