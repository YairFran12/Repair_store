<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class compras extends Model{
    protected $table = 'compras';
    protected $primarykey = 'id';
    public $timestamps = false;

    protected $fillable = ['nombre', 'marca', 'modelo', 'marca', 'cantidad', 'cantidad', 'precio_c', 'fecha'];
}
