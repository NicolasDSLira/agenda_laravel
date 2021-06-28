<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\contatoModel;


class contatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contato = contatoModel::orderBy('nome_contato', 'asc')
        ->get();
        return view('welcome', compact('contato'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function pesquisa($valor)
    {
        $contato = contatoModel::where('nome_contato', 'like', '%'. $valor.'%')
        ->orderBy('nome_contato', 'asc')
        ->get();
        return view('welcome', compact('contato'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contato = new contatoModel();

        $contato->nome_contato = $request->name;

        $contato->email_contato = $request->email;

        $contato->numero_contato = $request->telefone;

        $contato->save();

        return redirect()->action('App\Http\Controllers\contatoController@index');


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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contato = contatoModel::where('id_contato', $id)->delete();

        return redirect()->action('App\Http\Controllers\contatoController@index');
    }
}
