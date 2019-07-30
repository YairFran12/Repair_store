<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class productos extends Model{
    protected $table = 'productos';
    protected $primarykey = 'id';
    public $timestamps = false;

    protected $fillable = ['id', 'nombre', 'marca', 'modelo', 'precio_c', 'precio_v'];
}
