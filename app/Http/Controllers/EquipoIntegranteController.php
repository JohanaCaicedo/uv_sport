<?php

namespace uv_sport\Http\Controllers;

use uv_sport\Equipo_integrante;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class EquipoIntegranteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Redirector $redirect)
    {
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \uv_sport\Equipo_integrante  $equipo_integrante
     * @return \Illuminate\Http\Response
     */
    public function show(Equipo_integrante $equipo_integrante)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \uv_sport\Equipo_integrante  $equipo_integrante
     * @return \Illuminate\Http\Response
     */
    public function edit(Equipo_integrante $equipo_integrante)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \uv_sport\Equipo_integrante  $equipo_integrante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Equipo_integrante $equipo_integrante)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \uv_sport\Equipo_integrante  $equipo_integrante
     * @return \Illuminate\Http\Response
     */
    public function destroy(Equipo_integrante $equipo_integrante)
    {
        //
    }
}
