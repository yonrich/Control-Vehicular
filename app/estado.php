<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class estado extends Model
{
   protected $table = 'estados';
    protected $fillable = ['id','clave_estado', 'nombre', 'abreviatura'];
    public $timestamps = false;

	public function municipios(){
    	return $this->hasMany('App\Model\municipio');
    }

}
