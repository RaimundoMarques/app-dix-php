<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutosEvent extends Controller
{
    public function produtos()
    {
        $search = request('search');

        if ($search) {

            $produto = Produto::where([
                ['name', 'like', '%' . $search . '%']
            ])->get();
        } else {

            $produto = Produto::all();
        }

        return view('produtos', [
            'produto' => $produto,
            'search' => $search
        ]);
    }

    public function showCreate()
    {
        return view('events.createProduto');
    }
    public function store(Request $request)
    {

        $produto = new Produto();

        $produto->name          = $request->name;
        $produto->description   = $request->description;
        $produto->price         = $request->price;
        $produto->date_valid    = $request->date_valid;
        $produto->image         = $request->image;


        $user = auth()->user();
        $produto->user_id = $user->id;

        $produto->save();
        return redirect('/produtos')->with('msg', 'Produo cadastrado!');
    }



    public function showDelete($id)
    {
        $produto = Produto::findOrFail($id);
        //dd($paciente);
        return view('events.deleteServico', [
            'servico' => $produto
        ]);
    }

    public function destroy($id)
    {
        Produto::findOrFail($id)->delete();
        return redirect('/servicos')->with('msg', 'Serviço deletado!');
    }


    public function showEdit($id)
    {
        $produto = Produto::findOrFail($id);
        return view('/events.editServico', [
            'servico' => $produto
        ]);
    }

    public function update(Request $request)
    {
        Produto::findOrFail($request->id)->update($request->all());
        return redirect('/servicos')->with('msg', 'Serviço alterado!');
    }
}
