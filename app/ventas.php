<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class ventas extends Model{
    protected $table = 'ventas';
    protected $primarykey = 'id';
    public $timestamps = false;

    protected $fillable = ['id_cliente', 'id_empleado', 'nombre_producto', 'marca', 'modelo', 'cantidad', 'precio', 'total', 'fecha_v'];
}
