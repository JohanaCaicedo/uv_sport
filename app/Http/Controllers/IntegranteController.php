<?php

namespace uv_sport\Http\Controllers;

use uv_sport\Integrante;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class IntegranteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $integrantes = Integrante::orderBy('codigo','DESC')->paginate(15);
      return  view('integrantes.index', compact('integrantes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        return view('integrantes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Redirector $redirect)
    {
        $integrante = Integrante::create($request->all());
        $integrante->save();
        return redirect()->route('integrante.create')->with('info', 'Fue creado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \uv_sport\Integrante  $integrante
     * @return \Illuminate\Http\Response
     */
    public function show(Integrante $integrante)
    {
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \uv_sport\Integrante  $integrante
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $integrante = Integrante::find($id);
        
     return view('integrantes.edit', compact('integrante'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \uv_sport\Integrante  $integrante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Integrante $integrante)
    { 
        $integrante = Integrante::find($integrante->id);
        $integrante->nombre = $request->nombre;
        $integrante->apellido= $request->apellido;
        $integrante->plan = $request->plan;
        $integrante->codigo = $request->codigo;
        $integrante->update();
        return redirect()->route('integrante.index')->with('info', 'Fue actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \uv_sport\Integrante  $integrante
     * @return \Illuminate\Http\Response
     */
    public function destroy(Integrante $integrante)
    {
        //
    }
}
