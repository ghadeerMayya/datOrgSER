<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Rinvex\Bookings\Models\BookableAvailability;
use Rinvex\Bookings\Models\BookableRate;
use Rinvex\Bookings\Traits\HasBookings;


class Rate extends BookableRate
{
    protected $table = 'bookable_rates';
}
