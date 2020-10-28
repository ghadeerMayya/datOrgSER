<?php

namespace App\MyModels;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Rinvex\Bookings\Models\BookableAvailability;
use Rinvex\Bookings\Models\BookableBooking;
use Rinvex\Bookings\Traits\HasBookings;


class Financetask extends Model
{
    protected $table = 'financetasks';

    public function penifit(){
        return $this-> belongsTo(Penifit::class,'customer_id','id');
    }
    public function user(){
        return $this-> belongsTo(User::class,'user_id','id');
    }

    protected $fillable = [

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [


    ];
    public $timestamps = true;


}
