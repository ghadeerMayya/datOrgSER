<?php

namespace App\MyModels;

use App\Models\Availability;
use App\Models\Booking;
use App\Models\Rate;
use Illuminate\Database\Eloquent\Model;
use Rinvex\Bookings\Traits\Bookable;

class Serviceprovider extends Model
{
    use Bookable;
    //
//    protected $fillable = [
//        'name', 'email', 'mobile','specialist'
//    ];
//
//    /**
//     * The attributes that should be hidden for arrays.
//     *
//     * @var array
//     */
//    protected $hidden = [
//
//    ];
//    public $timestamps = true;
//

    public static function getBookingModel(): string
    {
        // TODO: Implement getBookingModel() method.
        return Booking::class;
    }

    public static function getRateModel(): string
    {
        // TODO: Implement getRateModel() method.
        return Rate::class;
    }

    public static function getAvailabilityModel(): string
    {
        // TODO: Implement getAvailabilityModel() method.
        return Availability::class;
    }
}
