<?php

namespace uv_sport\Http\Controllers;

use uv_sport\Torneo;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class TorneoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
        $torneos = Torneo::paginate(15);
        return  view('torneos.index', compact('torneos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('torneos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,  Redirector $redirect)
    {
        $torneo = Torneo::create($request->all()); 
        $torneo->save();
        return redirect()->route('torneo.create')->with('info', 'Fue creado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \uv_sport\Torneo  $torneo
     * @return \Illuminate\Http\Response
     */
    public function show(Torneo $torneo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \uv_sport\Torneo  $torneo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $torneo= Torneo::find($id);
        
     return view('torneos.edit', compact('torneo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \uv_sport\Torneo  $torneo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Torneo $torneo)
    {
     
        $torneo = Torneo::find($torneo->id);
        $torneo->nombre = $request->nombre;
        $torneo->fecha= $request->fecha;
        $torneo->update();
        return redirect()->route('torneo.index')->with('info', 'Fue actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \uv_sport\Torneo  $torneo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Torneo $torneo)
    {
        //
    }
}
