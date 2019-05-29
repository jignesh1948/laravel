<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    // protected $primaryKey = "religion";    
    protected $fillable = [
'id','name','email','age','dob','phone','religion','country','state','city','profile_by','education','body_type','marital_status','height','physical_status','drink','mother_tongue','complexion','weight','blood_group','sub_caste','diet','smoke','annual_income','education_detail','father_occupation','mother_occupation','brothers','sisters','occupation','birth_place','raasi','time_of_birth','description','email_verified_at','password','remember_token','created_at','updated_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function category()
    {
        return $this->belongsTo('App\Religion', 'id');
    }
    // public function scopeActive($query)
    // {
    //     return $query->where('status', '1');
    // }


}
