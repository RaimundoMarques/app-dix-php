<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ServicosController extends Controller
{
    public function servicos()
    {

        $nameApp = "Sistema de Agendamento DIX";
        $namePage = "Serviços";

        // retornando dados da api
        $return = Http::get('http://localhost:3333/api/servicos')->json();
        $data = array_reverse($return['data']);

        //dd($data);

        for ($i = 0; $i < count($data); $i++) {
            extract($data[$i]);

            $ids[] = $id;
            $nomes[] = $nome;
            $tipos[] = $tipo;
            $categorias[] = $categoria;
        }

        return view('/servicos', [
            'ids' => $ids,
            'nomes' => $nomes,
            'tipos' => $tipos,
            'categorias' => $categorias,
            'nameApp' => $nameApp,
            'namePage' => $namePage
        ]);
    }
}
