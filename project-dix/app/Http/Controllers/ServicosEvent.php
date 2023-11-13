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

    public function store(Request $request)
    {

        $servico = new Servico();

        $servico->nome     = $request->nome;
        $servico->tipo      = $request->tipo;
        $servico->categoria = $request->categoria;

        // $user = auth()->user();
        // $servico->user_id = $user->id;

        $servico->save();
        return redirect('/servicos')->with('msg', 'Serviço criado com sucesso!');
    }



    public function showDelete($id)
    {
        $servico = Servico::findOrFail($id);
        //dd($paciente);
        return view('events.deleteServico', [
            'servico' => $servico
        ]);
    }

    public function destroy($id)
    {
        Servico::findOrFail($id)->delete();
        return redirect('/servicos')->with('msg', 'Serviço deletado com sucesso!');
    }
}
