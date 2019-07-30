<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\compras;
use App\productos;

class comprasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function vista(){
        $seleccion = productos::pluck('nombre', 'nombre');
        return view('/compras')->with('variable', $seleccion);
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
        $producto = $request->input('elproducto');
        $marca = $request->input('lamarca');
        $modelo = $request->input('elmodelo');
        $cantidad = $request->input('cantidad');
        $precio = $request->input('precio');
        $total = $request->input('precio') * $request->input('cantidad');
        $fecha = $request->input('fecha');
    
        compras::create(['nombre'=>$producto, 'marca'=>$marca, 'modelo'=>$modelo, 'cantidad'=> $cantidad, 'precio_c'=> $precio, 'total'=>$total, 'fecha'=> $fecha]);
        $emps = compras::all();
        return view('comprasRealizadas')->with('emps', $emps);
      }
    
      public function ver_comprasR()
      {
          $emps = compras::all();
          return view('comprasRealizadas')->with('emps', $emps);
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
        //
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
