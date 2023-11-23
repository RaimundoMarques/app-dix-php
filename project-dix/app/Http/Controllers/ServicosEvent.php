<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servico;

class ServicosEvent extends Controller
{
    public function servicos()
    {
        $search = request('search');

        if ($search) {

            $servico = Servico::where([
                ['nome', 'like', '%' . $search . '%']
            ])->get();
        } else {

            $servico = Servico::all();
        }

        return view('servicos', [
            'servico' => $servico,
            'search' => $search
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

        $user = auth()->user();
        $servico->user_id = $user->id;

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
        return redirect('/servicos')->with('msg', 'Serviço deletado!');
    }


    public function showEdit($id)
    {
        $servico = Servico::findOrFail($id);
        return view('/events.editServico', [
            'servico' => $servico
        ]);
    }

    public function update(Request $request)
    {
        Servico::findOrFail($request->id)->update($request->all());
        return redirect('/servicos')->with('msg', 'Serviço alterado!');
    }
}
