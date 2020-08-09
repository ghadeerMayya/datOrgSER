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


    protected $fillable = [
        'bookable_id','customer_id','booking_date','starts_at','ends_at','doctor_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'created_at', 'updated_at'

    ];
    public $timestamps = true;

    public function doctors(){
        return $this-> belongsTo(User::class,'doctor_id','id');
    }
}
