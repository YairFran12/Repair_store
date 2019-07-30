<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class presupuestos extends Model
{
    protected $table = 'presupuestos';

    //Aqui la llave primaria de la tabla
    protected $primarykey = 'id';
    //public $incrementing = false;
    public $timestamps = false;

    protected $fillable = ['producto', 'descripcion', 'precio', 'cantidad'];
}
