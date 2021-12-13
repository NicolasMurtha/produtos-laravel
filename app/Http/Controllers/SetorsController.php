<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Produto;
use App\Models\cod;
use App\Models\setor;

class setorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setor = setor::all();
        return view('setores.index')
        ->with('setores', $setor);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $setor = Setor::orderBy('nome')->get();
        return view('setores.create')->with('setor', $setor);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $setor = new Setor();
        $setor->nome = $request->nome;
        $setor->id = $request->id;

        $setor->save();

        return view('setores.store');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $setor = Setor::find($id);
        return view('setores.edit')->with('setor', $setor);
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
        $setor = Setor::find($id);
        $setor->nome = $request->nome;
        $setor->id = $request->id;

        $setor->save();
        return view('setores.update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $setor = Setor::find($id);
        $setor -> delete();
        return view('setores.destroy');
    }
}
