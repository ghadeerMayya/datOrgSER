<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Rinvex\Bookings\Models\BookableAvailability;
use Rinvex\Bookings\Models\BookableBooking;
use Rinvex\Bookings\Traits\HasBookings;


class Booking extends BookableBooking
{
    protected $table = 'bookable_bookings';
}
