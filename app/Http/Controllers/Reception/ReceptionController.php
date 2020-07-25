<?php

namespace App\Http\Controllers\Reception;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\ServiceBooking;
use App\MyModels\Logofpenifit;
use App\MyModels\Penifit;
use App\MyModels\Serviceprovider;
use App\Providers\RouteServiceProvider;
use Faker\Provider\DateTime;
use Illuminate\Foundation\Auth\ConfirmsPasswords;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
Use \Carbon\Carbon;
use Rinvex\Bookings\Models\BookableBooking;

class ReceptionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

        #### add reception middleware
    }

    public function index(){
       return view('reception\receptionpanel');
    }


    public function searchCardID(Request $request){


        $card_id = $request->input('card_id');

        $currentpenifit=Penifit::where('card_id','=',$card_id)->get('id');

        if ($currentpenifit->isEmpty())
        {

            return response() -> json([
                'status'=> false,
                'msg'=>'no penifit found',


            ]);


        }
        else{                   ///////////////////////////// user exist and return his data
            $currentpenifit=Penifit::where('card_id','=',$card_id)->get();
            return response() -> json([
                'status'=> true,
                'msg'=>'user already exist',
                'penifit'=>$currentpenifit


                ////////////////////////////////////////////////////////////// change wait to 1 and add to log
            ]);

        }




//        $data=array('first_name'=>$first_name,"father_name"=>$father_name,"last_name"=>$last_name,"city_name"=>$city_name,"age"=>$age);
//        DB::table('student')->insert($data);
//        echo "Record inserted successfully.<br/>";
//        echo "Redirecting you to main page.<br/>";

    }

    public function addnewpenifitandtowait(Request $request){     //Here replace to AddRequest to add validation


        $first_name = $request->input('first_name');
        $father_name = $request->input('father_name');
        $last_name = $request->input('last_name');
        $city_name = $request->input('city_name');
        $bd = $request->input('birth_date');
        $sex=$request->input('sex_select');
        $card_id = $request->input('card_id');

        $currentpenifit=Penifit::where('card_id','=',$card_id)->get('id');

        if ($currentpenifit->isEmpty())
        {

            $penifit=new Penifit();
            $penifit->first_name=$first_name;
            $penifit->father_name=$father_name;
            $penifit->last_name=$last_name;
            $penifit->city_name=$city_name;
            $penifit->birth_date=$bd;
            $penifit->sex=$sex;
            $penifit->card_id=$card_id;
            $penifit->added_by=Auth::user()->email;
            $penifit->wait='1';
            $penifit->save();



/////////////////////////////////////////////////////////saving to log
            $currentid=Penifit::where('card_id','=',$card_id)->get('id');
            $logofpenifit=new Logofpenifit();
            $currentDate=Carbon::now();
            $logofpenifit->entering_time=$currentDate;
            $logofpenifit->penifit_id=$currentid[0]->id;
            $logofpenifit->save();



        }
        else{                   ///////////////////////////// user exist and return his data
            ///
            $currentid=Penifit::where('card_id','=',$card_id)->get('id');
            $logofpenifit=new Logofpenifit();
            $currentDate=Carbon::now();
            $logofpenifit->entering_time=$currentDate;
            $logofpenifit->penifit_id=$currentid[0]->id;
            $logofpenifit->save();

            DB::table('penifits')
                ->where('id','=' , $currentid[0]->id)
                ->update(['wait' => "1"]);
    ////////////////////////////////////////////////////////////////////Booking
            $serviceProvider=Serviceprovider::find(2);
            $penifit=new Penifit();
            $penifit=Penifit::find($currentid);

            $serviceBooking =new  \App\Models\Availability();
            $serviceBooking->make(['range' => 'dates', 'from' => '08:00 am', 'to' => '12:30 pm',
                'is_bookable' => true  ])
                ->bookable()->associate($serviceProvider)
                ->save();

//
            $Booking= new Booking();
            $Booking->make(['starts_at' => \Carbon\Carbon::now(),
                'ends_at' => \Carbon\Carbon::tomorrow(),
                'price' => 1,
                'quantity' => 1,
                'total_paid' => 1,
                'currency' => 'EUR',
                'notes'=>'no notes',
                'customer_id'=>$penifit[0]->id,
                'customer_type'=>'type'

               ])

                ->bookable()->associate($serviceProvider)
//                ->customer()->associate( $penifit)

     ->save();








//            $currentpenifit=Penifit::where('card_id','=',$card_id)->get();
            return response() -> json([
                'status'=> true,
                'msg'=>'user already exist added to log list',




                ////////////////////////////////////////////////////////////// change wait to 1 and add to log
            ]);

        }

        if($penifit){
            return response() -> json([
                'status'=> true,
                'msg'=>'saved and added to log',



            ]);
        }
        else{
            return response() -> json([
                'status'=> false,
                'msg'=>' حدث خطأ الرجاء إعادة المحاولة'
            ]);
        }


//        $data=array('first_name'=>$first_name,"father_name"=>$father_name,"last_name"=>$last_name,"city_name"=>$city_name,"age"=>$age);
//        DB::table('student')->insert($data);
//        echo "Record inserted successfully.<br/>";
//        echo "Redirecting you to main page.<br/>";

    }
    public function getwaitingusers(){


        $arrs['data']=Penifit::where('wait','=','1')->get();



        return $arrs;

    }

    public function getPenifitLog(){
//
//        $penifit = Penifit::where('id','34')->get();
//
//
        return $penifit = Penifit::with('logofpenifits')->find('34');



    }


}
