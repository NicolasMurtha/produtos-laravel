<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\cod;


class CodsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cod = cod::all();
        return view('cod.index')
        ->with('cod', $cod);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cod = cod::orderBy('numero')->get();
        return view('cod.create')->with('cod', $cod);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cod = new cod();
        $cod->numero = $request->numero;
        $cod->nome = $request->nome;

        $cod->save();

        return view('cod.store');
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
        $cod = cod::find($id);
        return view('cod.edit')->with('cod', $cod);
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
        $cod = cod::find($id);
        $cod->numero = $request->numero;
        $cod->nome = $request->nome;

        $cod->save();
        return view('cod.update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cod = cod::find($id);
        $cod -> delete();
        return view('cod.destroy');
    }
}
