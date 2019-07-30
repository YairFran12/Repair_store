<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\presupuestos;
use Barryvdh\DomPDF\Facade as PDF;
use App\productos;

class presupuestosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $presu = presupuestos::all();
        return view('/crearPresupuesto')->with('presu', $presu);
    }

    public function index2()
    {
        $presu = presupuestos::all();

        return view('/PDF')->with('presu', $presu);
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
        $emps = new presupuestos;

        $emps->producto = $request->input('producto');
        $emps->descripcion = $request->input('descripcion');
        $emps->precio = $request->input('precio');
        $emps->cantidad = $request->input('cantidad');
        $emps->total = $request->input('precio') * $request->input('cantidad');

        $emps->save();
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
        $emps = presupuestos::find($id);

        $emps->producto = $request->input('producto');
        $emps->descripcion = $request->input('descripcion');
        $emps->precio = $request->input('precio');
        $emps->cantidad = $request->input('cantidad');

        $emps->save();
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

    public function verPDF()
    {

        $presu = presupuestos::all();
        $pdf = PDF::loadView('PDF', compact('presu'));



        return $pdf->stream();
    }

    public function descargarPDF()
    {

        $presu = presupuestos::all();
        $pdf = PDF::loadView('PDF', compact('presu'));



        return $pdf->download();
    }
}
