<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;


class loginController extends Controller{

    public function interfaz(){
        return view('login');
    }

    public function verificar(Request $request){
        $usuario = $request->input('usuario');
        $contra = $request->input('contra');

        if($usuario == "chino"){
            if($contra == "jr"){
                return view('layout');
            } else{
                return "Error";
              }
        } else{
            return "Error";
          }

    }
}