<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\presupuestos;

class principalController extends Controller
{
    public function index()
    {

        return view('layout');
    }

    public  function vista()
    {
        presupuestos::query()->delete();

        return view('principal');
    }
}
