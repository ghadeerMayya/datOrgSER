<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Rinvex\Bookings\Models\BookableAvailability;
//use Rinvex\Bookings\Traits\HasBookings;


class Availability extends BookableAvailability
{
    protected $table = 'bookable_availabilities';
}
