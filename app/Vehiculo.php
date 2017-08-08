<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    protected $table = 'vehiculos';
    protected $fillable = ['vehiculo', 'marca', 'submarca','modelo','serie','placas','seguro'];
    public $timestamps = false;
}
