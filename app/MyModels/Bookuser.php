<?php

namespace App\MyModels;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Rinvex\Bookings\Models\BookableAvailability;
use Rinvex\Bookings\Models\BookableBooking;
use Rinvex\Bookings\Traits\HasBookings;


class Bookuser extends Model
{
    protected $table = 'bookusers';

    ////////////////////////////////////////// dates booked for user
    public function doctor(){
        return $this-> belongsTo(User::class,'doctor_id','id');
    }
    ///////////////////////////////////////// dates this user booked it
    public function userBooked(){
        return $this-> belongsTo(User::class,'bookable_id','id');
    }
    ///////////////////////////////////////booked dates for penifit
    public function penifitBooked(){
        return $this-> belongsTo(Penifit::class,'customer_id','id');
    }

    protected $fillable = [
        'booking_date','starts_at','ends_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'created_at', 'updated_at','customer_id','doctor_id','bookable_id'

    ];
    public $timestamps = true;


}
