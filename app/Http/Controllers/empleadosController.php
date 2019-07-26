<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\empleados;

class empleadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $emps = empleados::where('estatus', '1')->get();
        return view('empleados')->with('emps', $emps);
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
            'fecha_n' => 'required',

        ]);
        $emps = new empleados;

        $emps->nombre = $request->input('nombre');
        $emps->apellido_p = $request->input('apellido_p');
        $emps->apellido_m = $request->input('apellido_m');
        $emps->direccion = $request->input('direccion');
        $emps->fecha_n = $request->input('fecha_n');

        $emps->save();

        return redirect('/empleados')->with('success', 'Empleado Agregado');
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
            'fecha_n' => 'required',

        ]);
        $emps = empleados::find($id);

        $emps->nombre = $request->input('nombre');
        $emps->apellido_p = $request->input('apellido_p');
        $emps->apellido_m = $request->input('apellido_m');
        $emps->direccion = $request->input('direccion');
        $emps->fecha_n = $request->input('fecha_n');

        $emps->save();

        return redirect('/empleados')->with('success', 'Empleado Actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $emps = empleados::find($id);
        $emps->delete();

        return redirect('/empleados')->with('success', 'Empleado Eliminado');
    }

    public function ocultar($id)
    {
        $emps = empleados::find($id);
        $emps->estatus = 0;
        $emps->save();
        return redirect('/empleados')->with('success', 'Empleado ocultado');
    }

    public function ver_ocultosE()
    {
        $emps = empleados::where('estatus', '0')->get();
        //return view('vistaP')->with('emps', $emps);
        return view('empleadosOcultos')->with('emps', $emps);
    }
}
