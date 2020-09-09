<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return string
     */

    public function index()
    {
if(Auth::user()){
    $currentPriv=Auth::user()->priv;
    if($currentPriv=='admin'){
        return redirect()->route('adminpanel');
    }
    ////////////////////////////////////////////////////
    /// You are logged in!
    //this account should be verified ..
    //Call administrator
    else if ($currentPriv=='guest') {
        return view('home');
    }
    else if ($currentPriv=='reception') {
        return redirect()->route('receptionpanel');
    }
    else if ($currentPriv=='casestudy') {
        return redirect()->route('casestudypanel');
    }
    else{
        return $currentPriv;
    }
}
else{

    return redirect()->route('login');
}


    }
}
