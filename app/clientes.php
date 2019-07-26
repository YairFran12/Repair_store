<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clientes extends Model
{
    protected $table = 'clientes';

    //Aqui la llave primaria de la tabla
    protected $primarykey = 'id';
    //public $incrementing = false;
    public $timestamps = false;
}
