<?php

namespace App\MyModels;

use Illuminate\Database\Eloquent\Model;
use Rinvex\Bookings\Traits\HasBookings;

class Penifit extends Model
{

    //

    public $timestamps = true;

//    public function logofpenifits(){
//        return $this -> hasMany('App\MyModels\Logofpenifit','penifit_id','id');
//    }


    ///////////////////////////////////////booked dates for penifit
    public function booked_dates(){
        return $this -> hasMany(Bookuser::class,'customer_id','id');
    }
    public function I_E_s(){
        return $this -> hasMany(Initialevaluationform::class,'customer_id','id');
    }
    public function special_aut_s(){
        return $this -> hasMany(Specialautform::class,'customer_id','id');
    }
    public function log_of_penifit(){
        return $this -> hasMany(Logofpenifit::class,'customer_id','id');
    }
 public function finance_task(){
        return $this -> hasMany(Financetask::class,'customer_id','id');
    }





}
