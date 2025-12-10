<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $table = 'proveedores';
    protected $fillable = [];//con esto hacemos proteccion apra evitar asignacion masiva
    protected $guarded = [];//con esto indicamos que campos se pueden llenar de forma masiva   
}
