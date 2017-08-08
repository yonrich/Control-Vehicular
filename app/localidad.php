<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class localidad extends Model
{
    protected $table = 'localidades';
    protected $fillable = ['id','clave_estado','clave_municipio', 'clave_localidad', 'nombre'];
    public $timestamps = false;

    public function municipio(){
    	return $this->belongsTo('App\Model\municipio','clave_municipio');
    }

    public function vehiculos(){
    	return $this->hasMany('App\Model\vehiculos');
    }
}
