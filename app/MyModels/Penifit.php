<?php

namespace App\MyModels;

use Illuminate\Database\Eloquent\Model;
use Rinvex\Bookings\Traits\HasBookings;

class Penifit extends Model
{

    //

    public $timestamps = true;

    public function logofpenifits(){
        return $this -> hasMany('App\MyModels\Logofpenifit','penifit_id','id');
    }



}
