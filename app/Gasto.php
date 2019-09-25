<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gasto extends Model
{
    protected $fillable = ['nombre_g','descripcion_g', 'fecha_g', 'monto_g'];
}
