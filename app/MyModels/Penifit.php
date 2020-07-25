<?php

namespace App\MyModels;

use App\Models\Booking;
use Illuminate\Database\Eloquent\Model;
use Rinvex\Bookings\Traits\HasBookings;

class Penifit extends Model
{

    use HasBookings;
    //

    public $timestamps = true;

    public function logofpenifits(){
        return $this -> hasMany('App\MyModels\Logofpenifit','penifit_id','id');
    }

    public static function getBookingModel(): string
    {
//        return \Rinvex\Bookings\Models\ServiceBooking::class;
        return Booking::class;
    }

}
