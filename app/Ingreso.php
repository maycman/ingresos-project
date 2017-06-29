<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingreso extends Model
{
    protected $table= 'ingreso';
    protected $fillable = ['fecha_alta','concepto','monto'];
    protected $guarded = ['id_ingreso'];
}
