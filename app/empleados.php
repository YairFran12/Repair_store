<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class empleados extends Model
{
    protected $table = 'empleados';

    //Aqui la llave primaria de la tabla
    protected $primarykey = 'id';
    //public $incrementing = false;
    public $timestamps = false;
}
