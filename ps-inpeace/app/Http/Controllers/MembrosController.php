<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Membro;
use App\Models\Igreja;

class MembrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $membros = Membro::all();
        $igrejas = Igreja::all();
        return view('membros.index',compact('membros'),compact('igrejas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $igrejas = Igreja::all();
        // dd($igrejas);
        return view('membros.create', compact('igrejas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $membro = $request->all();
        $membro['igreja_id'] = (int)$request->igreja_id;
        $membro['estado'] = 'Espirito Santo';
        $membro['cidade'] = 'São Mateus';
        
        Membro::create($membro);
        return redirect('/membros');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $membro = Membro::findOrFail($id);
        $igrejas = Igreja::all();
        return view('membros.show', compact('membro'), compact('igrejas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $membro = Membro::findOrFail($id);
        $igrejas = Igreja::all();
        return view('membros.edit', compact('membro'), compact('igrejas'));
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
        $membro = Membro::findOrFail($id);
        $membro->update($request->all());

        return redirect('/membros');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $membro = Membro::findOrFail($id);
        $membro->delete();
        return redirect('/membros');
        //
    }
}
