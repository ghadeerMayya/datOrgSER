<?php

namespace App\Http\Controllers\Booking;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ConfirmsPasswords;

class Booking extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

        #### add CaseStudy middleware
    }

    public function index(){
       return view('booking\booking');
    }


}
