<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Paciente;

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

        return view('events.createPaciente', [
            'namePage' => $namePage
        ]);
    }


    // Gravando dados formulário
    public function store(Request $request){

        $paciente = new Paciente;

        $paciente->nome     = $request->nome;
        $paciente->cpf      = $request->cpf;
        $paciente->telefone = $request->telefone;
        $paciente->cidade   = $request->cidade;
        $paciente->tipo     = $request->tipo;

        $paciente->save();

        return redirect('/pacientes')->with('msg', 'Paciente cadastrado com sucesso!');

    }

    // Buscar paciente por ID
    public function show($id){

        $paciente = Paciente::findOrFail($id);

        return view('events.showPaciente', [
                'paciente' => $paciente
        ]);

    }
}
