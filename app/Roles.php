<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    protected $table = 'roles';
    protected $fillable = ['name', 'slug', 'description','level'];
    public $timestamps = false;

    public function users(){
    	return $this->belongsToMany('App\User','role_user','user_id','role_id');
    }
}
