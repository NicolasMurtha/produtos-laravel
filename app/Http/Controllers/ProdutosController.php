<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Produto;
use App\Models\cod;
use App\Models\setor;

class ProdutosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produtos = Produto::all();
        return view('produtos.index')
        ->with('produtos', $produtos);
    }

    public function index2()
    {
        return Produto::with(['cod','setor'])->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $setor = Setor::orderBy('nome')->get();
        return view('produtos.create')->with('setor', $setor);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produtos = new Produto();
        $produtos->nome = $request->nome;
        $produtos->tipo = $request->tipo;
        $produtos->estoque = $request->estoque;

        $cod = new cod();
        $cod ->numero = $request->cod;
        $cod ->save();

        $idSetor = $request->setor;
        $setor = Setor::find($idSetor);

        $produtos->cod()->associate($cod);
        $produtos->setor()->associate($setor);

        $produtos->save();

        return view('produtos.store');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produtos = Produto::find($id);
        return view('produtos.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produtos = Produto::find($id);
        $setor = Setor::find($id);
        return view('produtos.edit')->with('produto', $produtos)->with('setor', $setor);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $produtos = Produto::find($id);
        $produtos->nome = $request->nome;
        $produtos->tipo = $request->tipo;
        $produtos->estoque = $request->estoque; 

        $produtos->save();
        return view('produtos.update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $produtos = Produto::find($id);
        $produtos -> delete();
        return view('produtos.destroy');
    }

    public function pesquisa(Request $request){
        $titulo = $request ->pesquisa;
        $pesquisa = "%$titulo%";

        $produtos = Produto::where('nome', 'like', $pesquisa)->get();;

        return view ('produtos.index')->with('produtos',$produtos);
    }

    public function showDestroyed(){
        $produtos = Produto::onlyTrashed()->get();
        return view('produtos.excluidos')->with('produtos', $produtos);
        }

    public function restore($id){
        $produtos = Produto::onlyTrashed()->find($id);
        $produtos->restore();
        return view('produtos.excluidos')->with('produtos', $produtos);
       }

    public function forceDestroy($id){
        $produtos = Produto::onlyTrashed()->find($id);
        $produtos->forceDelete();
        return view('produtos.excluidos')->with('produtos', $produtos);
    }


}
