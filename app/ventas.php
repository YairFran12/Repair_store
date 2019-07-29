<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ventas extends Model{
    protected $table = 'ventas';
    protected $primarykey = 'id';
    public $timestamps = false;
}
