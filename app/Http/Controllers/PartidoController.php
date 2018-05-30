<?php

namespace uv_sport\Http\Controllers;

use uv_sport\Partido;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class PartidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $partidos = Partido::orderBy('fecha','DESC')->paginate(15);
        return  view('partidos.index',compact('partidos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('partidos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,  Redirector $redirect)
    {
        $partido= Partido::create($request->all()); 
        $partido->save();
        return redirect()->route('partido.create')->with('info', 'Fue creado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \uv_sport\Partido  $partido
     * @return \Illuminate\Http\Response
     */
    public function show(Partido $partido)
    {
   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \uv_sport\Partido  $partido
     * @return \Illuminate\Http\Response
     */
    public function edit(Partido $partido)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \uv_sport\Partido  $partido
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Partido $partido)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \uv_sport\Partido  $partido
     * @return \Illuminate\Http\Response
     */
    public function destroy(Partido $partido)
    {
        //
    }
}
