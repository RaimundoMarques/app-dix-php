<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class EspecialidadeController extends Controller
{
    public function especialidades()
    {
        $nameApp = "Sistema de Agendamento DIX";
        $namePage = "Especialidades";

        // retornando dados da api
        $return = Http::get('http://localhost:3333/api/especialidades')->json();
        $data = array_reverse($return['data']);

        //dd($data);

        for ($i = 0; $i < count($data); $i++) {
            extract($data[$i]);

            $ids[] = $id;
            $nomes[] = $nome;
            $datacriacaos[] = $datacriacao;
            $dataatualizacaos[] = $dataatualizacao;
        }

        return view('/especialidades', [
            'ids' => $ids,
            'nomes' => $nomes,
            'datacriacaos' => $datacriacaos,
            'dataatualizacaos' => $dataatualizacaos,
            'nameApp' => $nameApp,
            'namePage' => $namePage
        ]);
    }
}
