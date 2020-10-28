<?php

namespace App;

use App\MyModels\Bookuser;
use App\MyModels\Financetask;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class User extends Authenticatable
{
    use Notifiable;


    ////////////////////////////////////////// dates booked for user
    public function bookings_users(){
        return $this -> hasMany(Bookuser::class,'doctor_id','id');
    }
    ///////////////////////////////////////// dates this user booked it
    public function user_booked(){
        return $this -> hasMany(Bookuser::class,'bookable_id','id');
    }
    ///////////////////
    public function finance_task(){
        return $this -> hasMany(Financetask::class,'user_id','id');
    }
    ///////////////////




    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','email', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token','priv','created_at','updated_at','email_verified_at'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
