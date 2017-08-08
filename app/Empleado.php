<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table = 'empleados';
    protected $fillable = ['nombre', 'correo','status'];
    public $timestamps = false;
}
