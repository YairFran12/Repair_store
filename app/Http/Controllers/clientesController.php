<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\clientes;

class clientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $emps = clientes::where('estatus', '1')->get();
        return view('clientes')->with('emps', $emps);
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
        $this->validate($request, [
            'nombre' => 'required',
            'apellido_p' => 'required',
            'apellido_m' => 'required',
            'direccion' => 'required',
            'telefono' => 'required',

        ]);
        $emps = new clientes;

        $emps->nombre = $request->input('nombre');
        $emps->apellido_p = $request->input('apellido_p');
        $emps->apellido_m = $request->input('apellido_m');
        $emps->direccion = $request->input('direccion');
        $emps->telefono = $request->input('telefono');

        $emps->save();

        return redirect('/clientes')->with('success', 'Cliente Agregado');
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
        $this->validate($request, [
            'nombre' => 'required',
            'apellido_p' => 'required',
            'apellido_m' => 'required',
            'direccion' => 'required',
            'telefono' => 'required',

        ]);
        $emps = clientes::find($id);

        $emps->nombre = $request->input('nombre');
        $emps->apellido_p = $request->input('apellido_p');
        $emps->apellido_m = $request->input('apellido_m');
        $emps->direccion = $request->input('direccion');
        $emps->telefono = $request->input('telefono');

        $emps->save();

        return redirect('/clientes')->with('success', 'Cliente Actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $emps = clientes::find($id);
        $emps->delete();

        return redirect('/clientes')->with('success', 'Cliente Eliminado');
    }

    public function ocultar($id)
    {
        $emps = clientes::find($id);
        $emps->estatus = 0;
        $emps->save();
        return redirect('/clientes')->with('success', 'Cliente ocultado');
    }

    public function ver_ocultosC()
    {
        $emps = clientes::where('estatus', '0')->get();
        //return view('vistaP')->with('emps', $emps);
        return view('clientesOcultos')->with('emps', $emps);
    }
}
