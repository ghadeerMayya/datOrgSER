<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ConfirmsPasswords;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

        #### add admin middleware
    }

    public function index(){
       return view('admin\adminpanel');
    }


}
