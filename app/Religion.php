<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Religion extends Model
{

    protected $connection = 'mongodb';
    protected $collection = 'Religion';
    
    //protected $table = "religion";
    // protected $primaryKey = 'religion';

    protected $fillable = [];

 
    public function photos()
    {
        return $this->hasMany('App\User', 'religion')->active();
    }
}
