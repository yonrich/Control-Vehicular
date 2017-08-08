<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class municipio extends Model
{
    protected $table = 'municipios';
    protected $fillable = ['id','clave_estado','clave_municipio', 'nombre'];
    public $timestamps = false;

    public function estado(){
    	return $this->belongsTo('App\Model\estados','clave_estado');
    }

    public function localidad(){
    	return $this->hasMany('App\Model\localidades');
    }
}
