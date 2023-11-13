<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;

class UsersEvents extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    public function pacientes()
    {
        $search = request('search');

        if ($search) {

            $paciente = Paciente::where([
                ['nome', 'like', '%' . $search . '%']
            ])->get();
        } else {

            $paciente = Paciente::all();
        }

        return view('pacientes', [
            'paciente' => $paciente,
            'search' => $search
        ]);
    }


    public function showDelete($id)
    {

        $paciente = Paciente::findOrFail($id);
        //dd($paciente);

        $namePage = "Deletar usuário";

        return view('events.deletePaciente', [
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
        return view('/events.editPaciente', [
            'paciente' => $paciente
        ]);
    }


    public function showCreate()
    {
        return view('events.createPaciente');
    }


    public function store(Request $request)
    {

        $paciente = new Paciente;

        $paciente->nome     = $request->nome;
        $paciente->cpf      = $request->cpf;
        $paciente->telefone = $request->telefone;
        $paciente->cidade   = $request->cidade;
        $paciente->tipo     = $request->tipo;

        $user = auth()->user();
        $paciente->user_id = $user->id;

        $paciente->save();
        return redirect('/pacientes')->with('msg', 'Paciente cadastrado com sucesso!');
    }



    public function update(Request $request)
    {
        Paciente::findOrFail($request->id)->update($request->all());
        return redirect('/pacientes')->with('msg', 'Usuário editado com sucesso!');
    }
}
