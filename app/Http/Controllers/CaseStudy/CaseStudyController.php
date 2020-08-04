<?php

namespace App\Http\Controllers\CaseStudy;

use App\Http\Controllers\Controller;
use App\MyModels\Penifit;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\ConfirmsPasswords;
use Illuminate\Support\Facades\Session;

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
    public function csrecieve(Request $request){
        if ($request){
            $current_id = $request->input('current_id');

            $currentpenifit=Penifit::where('id','=',$current_id)->get();

            $returnHTML = view('casestudy\csrecieveform')->with('currentpenifit', $currentpenifit)->render();


            return response() -> json([
                'msg'=>'user moved to your log',
                "redirect"=>true,
                "redirect_url"=>'',
                'html'=>$returnHTML,
                'penifit'=>$currentpenifit

            ]);
//            session()->keep([$currentpenifit]);
//            return view('casestudy\csrecieveform');

        }
        else{
            return response() -> json([
                "redirect"=>false,
                'msg'=>'unknown error try again',

            ]);

        }

    }
    public function csform(){
        return view('casestudy\csrecieveform');
    }



}
