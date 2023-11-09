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
        $data = array_reverse($return['data']);

        //dd($data);

        for ($i = 0; $i < count($data); $i++) {
            extract($data[$i]);

            $ids[] = $id;
            $nomes[] = $nome;
            $cpfs[] = $cpf;
            $telefones[] = $telefone;
            $cidades[] = $cidade;
        }

        return view('/profissionais', [
            'ids' => $ids,
            'nomes' => $nomes,
            'cpfs' => $cpfs,
            'telefones' => $telefones,
            'cidades' => $cidades,
            'nameApp' => $nameApp,
            'namePage' => $namePage
        ]);
    }
}
