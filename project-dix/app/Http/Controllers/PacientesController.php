<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Paciente;
use Illuminate\Cache\RedisTagSet;

class PacientesController extends Controller
{
    public function index()
    {
        $search = request('search');
        if ($search) {

            // $paciente = Paciente::where(
            //     ['nome', 'like', '%' . $search . '%']
            // )->get();

            $paciente = Paciente::where([$search])->get();
        } else {

            //$paciente = Paciente::all();

        }

        $nameApp = "Sistema de Agendamento DIX";
        $namePage = "Pacientes";

        // retornando dados da api
        $return = Http::get('http://localhost:3333/api/pacientes')->json();
        $data = array_reverse($return['data']);

        if (count($data) == 0) {
            return redirect('/index');
        }

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
            'search' => $search,
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


    // Insert data
    public function store(Request $request)
    {

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
    public function show($id)
    {
        $paciente = Paciente::findOrFail($id);
        return view('events.showPaciente', [
            'paciente' => $paciente
        ]);
    }

    public function showDelete($id)
    {
        $paciente = Paciente::findOrFail($id);
        $namePage = "Deletar usuário";
        return view('/events.deletePaciente', [
            'paciente' => $paciente,
            'namePage' => $namePage
        ]);
    }


    public function destroy($id)
    {
        Paciente::findOrFail($id)->delete();
        return redirect('/pacientes')->with('msg', 'Usuário deletado com sucesso!');
    }

    public function showEdit($id)
    {

        $paciente = Paciente::findOrFail($id);

        return view('/events.showPacientes', [
            'paciente' => $paciente
        ]);
    }

    public function update(Request $request)
    {
        Paciente::findOrFail($request->id)->update($request->all());
        return redirect('/pacientes')->with('msg', 'Usuário editado com sucesso!');
    }
}
