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
        $data = array_reverse($return['data']);

        //dd($data);

        for ($i = 0; $i < count($data); $i++) {
            extract($data[$i]);

            $ids[] = $id;
            $nomes[] = $nome;
            $cnpjs[] = $cnpj;
            $telefones[] = $telefone;
            $cidades[] = $cidade;
        }

        return view('/clinicas', [
            'ids' => $ids,
            'nomes' => $nomes,
            'cnpjs' => $cnpjs,
            'telefones' => $telefones,
            'cidades' => $cidades,
            'nameApp' => $nameApp,
            'namePage' => $namePage
        ]);
    }
}
