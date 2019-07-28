<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\productos;

class productosController extends Controller{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $emps = productos::where('estatus', '1')->get();
        return view('productos') -> with('emps', $emps);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
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
            'marca' => 'required',
            'modelo' => 'required',
            'precio_c' => 'required',
            'precio_v' => 'required',
        ]);

        $emps = new productos;

        $emps->nombre = $request->input('nombre');
        $emps->marca = $request->input('marca');
        $emps->modelo = $request->input('modelo');
        $emps->precio_c = $request->input('precio_c');
        $emps->precio_v = $request->input('precio_v');

        $emps->save();

        return redirect('/productos')->with('success', 'Producto agregado');
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
    public function update(Request $request, $id)    {
        $this->validate($request, [
            'nombre' => 'required',
            'marca' => 'required',
            'modelo' => 'required',
            'precio_c' => 'required',
            'precio_v' => 'required',

        ]);
        $emps = productos::find($id);

        $emps->nombre = $request->input('nombre');
        $emps->marca = $request->input('marca');
        $emps->modelo = $request->input('modelo');
        $emps->precio_c = $request->input('precio_c');
        $emps->precio_v = $request->input('precio_v');

        $emps->save();

        return redirect('/productos')->with('success', 'Producto actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $emps = productos::find($id);
        $emps->delete();

        return redirect('/productos')->with('success', 'Producto eliminado');
    }

    public function ocultar($id){
        $emps = productos::find($id);
        $emps->estatus = 0;
        $emps->save();
        return redirect('/productos')->with('success', 'Producto ocultado');
    }

    public function ver_ocultosP()
    {
        $emps = productos::where('estatus', '0')->get();
        return view('productosOcultos')->with('emps', $emps);
    }
}
