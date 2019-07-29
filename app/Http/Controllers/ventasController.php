<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\ventas;

class ventasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $emps = ventas::all();
        return view('ventas') -> with('emps', $emps);
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
            'id_cliente' => 'required',
            'id_empleado' => 'required',
            'nombre_producto' => 'required',
            'marca' => 'required',
            'modelo' => 'required',
            'cantidad' => 'required',
            'precio' => 'required',
            'total' => 'required',
            'fecha_v' => 'required',
        ]);

        $emps = new ventas;

        $emps->id_cliente = $request->input('id_cliente');
        $emps->id_empleado = $request->input('id_empleado');
        $emps->nombre_producto = $request->input('nombre_producto');
        $emps->marca = $request->input('marca');
        $emps->modelo = $request->input('modelo');
        $emps->cantidad = $request->input('cantidad');
        $emps->precio = $request->input('precio');
        $emps->total = $request->input('total');
        $emps->fecha_v = $request->input('fecha_v');

        $emps->save();

        return redirect('/ventas')->with('success', 'Venta completada');
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
        //
    }
}
