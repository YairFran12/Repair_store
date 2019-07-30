<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

# Librerias
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

# Modelos
use App\ventas;
use App\productos;

use Illuminate\Support\Facades\DB;


class ventasController extends Controller{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $seleccion = productos::pluck('nombre', 'nombre');
        return view('/ventas')->with('variable', $seleccion);
    }

    public function vista(){
        $seleccion = productos::pluck('nombre', 'nombre');
        return view('/ventas')->with('variable', $seleccion);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        //
    }

    public function primera_seleccion($nombre){
        $consulta = productos::where('nombre', $nombre)->get();
        return $consulta;
    }

    public function segunda_seleccion($marca){
         $consulta = productos::where('marca', $marca)->get();
        return $consulta;
    }

    public function insertar(Request $request){
    $idcliente = $request->input('idcliente');
    $idempleado = $request->input('idempleado');
    $producto = $request->input('elproducto');
    $marca = $request->input('lamarca');
    $modelo = $request->input('elmodelo');
    $cantidad = $request->input('cantidad');
    $precio = $request->input('precio');
    $total = $request->input('total');
    $fecha = $request->input('fecha');

    ventas::create(['id_cliente' => $idcliente, 'id_empleado'=>$idempleado, 'nombre_producto'=>$producto, 'marca'=>$marca, 'modelo'=>$modelo, 'cantidad'=> $cantidad, 'precio'=> $precio, 'total'=>$total, 'fecha_v'=> $fecha]);
    $emps = ventas::all();
    return view('ventasRealizadas')->with('emps', $emps);
  }

  public function ver_ventasR()
  {
      $emps = ventas::all();
      return view('ventasRealizadas')->with('emps', $emps);
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
