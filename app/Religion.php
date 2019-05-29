<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Religion extends Model
{
    //
    protected $table = "religion";
    // protected $primaryKey = 'religion';

    protected $fillable = ['name','email'];

 
    public function photos()
    {
        return $this->hasMany('App\User', 'religion')->active();
    }
}
