<?php

namespace uv_sport\Http\Controllers;

use uv_sport\Equipo;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class EquipoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipos = Equipo::orderBy('id','DESC')->paginate(15);
        return  view('equipos.index',compact('equipos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('equipos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Redirector $redirect)
    {
        $equipo = Equipo::create($request->all()); 
        $equipo->save();
        /*
        $equipo->id;
        forEach($request->integrantes as $integrante){
           $equipoIntegrante =  new Equipo_integrante();
           $equipoIntegrante->codigo =  $integrante->id."-".$equipo->id;
           $equipoIntegrante->integrante_id = $integrante->id;
           $equipoIntegrante->equipo_id = $equipo->id;

        }
        */
        return redirect()->route('equipo.create')->with('info', 'Fue creado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \uv_sport\Equipo  $equipo
     * @return \Illuminate\Http\Response
     */
    public function show(Equipo $equipo)
    {
   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \uv_sport\Equipo  $equipo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $equipo = Equipo::find($id);
        
     return view('equipos.edit', compact('equipo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \uv_sport\Equipo  $equipo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Equipo $equipo)
    {
        $equipo = Equipo::find($equipo->id);
        $equipo->nombre = $request->nombre;
        $equipo->fecha= $request->fecha;
        $equipo->deporte = $request->deporte;
        $equipo->update();
        return redirect()->route('equipo.index')->with('info', 'Fue actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \uv_sport\Equipo  $equipo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Equipo $equipo)
    {
        //
    }
}
