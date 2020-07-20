<?php

namespace App\Http\Controllers\CaseStudy;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ConfirmsPasswords;

class CaseStudyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

        #### add CaseStudy middleware
    }

    public function index(){
       return view('casestudy\casestudy');
    }


}
