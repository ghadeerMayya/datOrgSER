<?php

namespace App\Http\Controllers\Reception;

use App\Http\Controllers\Controller;
use App\MyModels\Bookuser;
use App\MyModels\Financetask;
use App\MyModels\Logofpenifit;
use App\MyModels\Penifit;
use App\MyModels\Tasklog;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
Use \Carbon\Carbon;
use function GuzzleHttp\Promise\all;


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

        ////////////////////////////////////////////////////////////////////////////General task log
        $currentid=Penifit::where('card_id','=',$card_id)->get('id');
        $tasklog=new Tasklog();
        $currentDate=Carbon::now();
        $tasklog->created_at=$currentDate;
        $tasklog->user_did_task=Auth::user()->id;
        $tasklog->penifit_id=$card_id;
        $tasklog->task="searching";
        $tasklog->save();
        ////////////////////////////////////////////////////////////////////end GTL


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

    public function savePenifit(Request $request){
        $first_name = $request->input('first_name');
        $father_name = $request->input('father_name');
        $last_name = $request->input('last_name');
        $city_name = $request->input('city_name');
        $bd = $request->input('birth_date');
        $gender=$request->input('gender_select');
        $card_id = $request->input('card_id');
        $social_status=$request->input('Social_status');


        $currentpenifit=Penifit::where('card_id','=',$card_id)->get('id');

        if ($currentpenifit->isEmpty()) {

            $penifit = new Penifit();
            $penifit->first_name = $first_name;
            $penifit->father_name = $father_name;
            $penifit->last_name = $last_name;
            $penifit->city_name = $city_name;
            $penifit->birth_date = $bd;
            $penifit->gender = $gender;
            $penifit->social_status = $social_status;
            $penifit->card_id = $card_id;
            $penifit->added_by = Auth::user()->id;
            $penifit->wait = '1';
            $penifit->save();
////////////////////////////////////////////////////////////////////////////General task log
            $currentid=Penifit::where('card_id','=',$card_id)->get('id');
            $tasklog=new Tasklog();
            $currentDate=Carbon::now();
            $tasklog->created_at=$currentDate;
            $tasklog->user_did_task=Auth::user()->id;
            $tasklog->penifit_id=$currentid[0]->id;
            $tasklog->task="saving user data";
            $tasklog->save();
            ////////////////////////////////////////////////////////////////////end GTL
        }
        else{
            return response() -> json([
                'status'=> true,
                'msg'=>'user already exist',
            ]);
        }

        if($penifit){
            return response() -> json([
                'status'=> true,
                'msg'=>'saved to DB',
            ]);
        }
        else{
            return response() -> json([
                'status'=> false,
                'msg'=>' حدث خطأ الرجاء إعادة المحاولة'
            ]);
        }


    }

    public function addnewpenifitandtowait(Request $request){     //Here replace to AddRequest to add validation


        $first_name = $request->input('first_name');
        $father_name = $request->input('father_name');
        $last_name = $request->input('last_name');
        $city_name = $request->input('city_name');
        $bd = $request->input('birth_date');
        $gender=$request->input('gender_select');
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
            $penifit->gender=$gender;
            $penifit->card_id=$card_id;
            $penifit->added_by=Auth::user()->id;
            $penifit->wait='1';
            $penifit->save();



/////////////////////////////////////////////////////////saving to log
//            $currentid=Penifit::where('card_id','=',$card_id)->get('id');
//            $logofpenifit=new Logofpenifit();
//            $currentDate=Carbon::now();
//            $logofpenifit->entering_time=$currentDate;
//            $logofpenifit->penifit_id=$currentid[0]->id;
//            $logofpenifit->save();



        }
        else{                   ///////////////////////////// user exist and return his data
            ///
//            $currentid=Penifit::where('card_id','=',$card_id)->get('id');
//            $logofpenifit=new Logofpenifit();
//            $currentDate=Carbon::now();
//            $logofpenifit->entering_time=$currentDate;
//            $logofpenifit->penifit_id=$currentid[0]->id;
//            $logofpenifit->save();

//            DB::table('penifits')
//                ->where('id','=' , $currentid[0]->id)
//                ->update(['wait' => "1"]);
    ////////////////////////////////////////////////////////////////////Booking
//            $serviceProvider=Serviceprovider::find(2);
//            $penifit=new Penifit();
//            $penifit=Penifit::find($currentid);
//
//            $serviceBooking =new  \App\Models\Availability();
//            $serviceBooking->make(['range' => 'dates', 'from' => '08:00 am', 'to' => '12:30 pm',
//                'is_bookable' => true  ])
//                ->bookable()->associate($serviceProvider)
//                ->save();
//
////
//            $Booking= new Booking();
//            $Booking->make(['starts_at' => \Carbon\Carbon::now(),
//                'ends_at' => \Carbon\Carbon::tomorrow(),
//                'price' => 1,
//                'quantity' => 1,
//                'total_paid' => 1,
//                'currency' => 'EUR',
//                'notes'=>'no notes',
//                'customer_id'=>$penifit[0]->id,
//                'customer_type'=>'type'
//
//               ])

//                ->bookable()->associate($serviceProvider)
////                ->customer()->associate( $penifit)
//
//     ->save();








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

    public function booking_user(Request $request){     //Here replace to AddRequest to add validation


//        $first_name = $request->input('first_name');
//        $father_name = $request->input('father_name');
//        $last_name = $request->input('last_name');
//        $city_name = $request->input('city_name');
//        $bd = $request->input('birth_date');
//        $gender=$request->input('gender_select');
        $card_id = $request->input('card_id');

        ////////////////////////////////////////////////////////////////////////////General task log
        $currentid=Penifit::where('card_id','=',$card_id)->get('id');
        $tasklog=new Tasklog();
        $currentDate=Carbon::now();
        $tasklog->created_at=$currentDate;
        $tasklog->user_did_task=Auth::user()->id;
        $tasklog->penifit_id=$currentid[0]->id;
        $tasklog->task="Booking";
        $tasklog->save();
        ////////////////////////////////////////////////////////////////////end GTL
        ///
        ///
        /// ///////////////////////////////////////////////////////////////Open booking
        $newBookinguser=new Bookuser();
        $newBookinguser->bookable_id=Auth::user()->id;
        $newBookinguser->customer_id=$currentid[0]->id;
        $newBookinguser->booking_date=$request->input('Ap_Booking_date');
        $newBookinguser->starts_at=$request->input('starts_at');
        $newBookinguser->ends_at=$request->input('ends_at');
        $newBookinguser->doctor_id=$request->input('doctor_select');
        $newBookinguser->status='waiting';
        $newBookinguser->save();

        $currentpenifit=Penifit::where('card_id','=',$card_id)->get('first_name');

        return response() -> json([
            'status'=> true,
            'msg'=>' تم حجز الموعد للسيد/ة',
            'penifit'=>$currentpenifit[0]->first_name
        ]);

        ///////////////////////////////////////////////////////////////////End booking





//        $data=array('first_name'=>$first_name,"father_name"=>$father_name,"last_name"=>$last_name,"city_name"=>$city_name,"age"=>$age);
//        DB::table('student')->insert($data);
//        echo "Record inserted successfully.<br/>";
//        echo "Redirecting you to main page.<br/>";

    }

    public function getDoctorsList()
    {
        $users=new User();
        $items = array(
            'itemlist' =>  $users::select('id','name')->get()
        );

        return $items;
    }

    public function getwaitingusers(){


        $arrs['data']=Bookuser::with('doctor','userBooked','penifitBooked')
            ->where('status','waiting')
        ->get();

        return $arrs;

    }

    public function getPenifitLog(){
//
//        $penifit = Penifit::where('id','34')->get();
//
//
        return $penifit = Penifit::with('logofpenifits')->find('34');



    }

    public function getAllNewFinanceLog(){
        $arrs['data'] = Financetask::with('user:id,name','penifit:id,first_name,last_name')
            ->where('new', 1)
            ->get();

        return $arrs;
    }

    public function financecard($finance_card_id){


        if ($finance_card_id) {

                return view('admin\financecard', compact('finance_card_id'));

        } else {
            return response()->json([
                "result" => false,
                'msg' => 'unknown error try again',

            ]);

        }

    }

    public function getFinanceData(Request $request)
    {
        $finance_card_id = $request->input('finance_card_id');
        $finance_card = Financetask::with('user:id,name','penifit:id,first_name,father_name,last_name')
        ->where('id', '=', $finance_card_id)
            ->get();

        return response()->json([
            'finance_card' => $finance_card
            ////////////////////////////////////////////////////////////// change wait to 1 and add to log
        ]);

    }

    public function paymoney(Request $request)
    {
        $finance_card_id = $request->input('finance_card_id');
        $amount_just_paid = $request->input('amount_just_paid');

        $finance_card_note = $request->input('finance_card_note');

        if ($amount_just_paid){


            $finance_card= Financetask::find($finance_card_id);

            $amount_paid=$finance_card->amount_paid;
            $remaining_amount=$finance_card->remaining_amount;
            $customer_id=$finance_card->customer_id;

            ///////////////////////////////////////////get finance card by id to do tasks


            $new_paid_amount= $amount_paid+$amount_just_paid;
            $new_remaining_amount=$remaining_amount-$amount_just_paid;


            $finance_card = Financetask::where('id', '=', $finance_card_id)
                ->update(['amount_paid' =>$new_paid_amount,
                'remaining_amount'=>$new_remaining_amount,
                        'new'=>'0']
                );

            ////////////////////////////////////////////// is fully paid?
            ///
            $finance_card=new Financetask();
            $finance_card=$finance_card::find($finance_card_id);
            if($finance_card->remaining_amount=='0'){
                $finance_card = Financetask::where('id', '=', $finance_card_id)
                    ->update(['fully_paid'=>'1']
                    );
            }

            /////////////////////////////////////////////////check if amount paid over than accepted

            /////////////////////////////////////////////// add to log
            $logofpenifit=new Logofpenifit();
            $logofpenifit->user_id = Auth::user()->id;
            $logofpenifit->customer_id = $customer_id;
            $logofpenifit->process_type = 'finance';
            $logofpenifit->process_name = 'استلام دفعة';
            $logofpenifit->finance_amount = $amount_just_paid;
            $logofpenifit->process_id = $finance_card_id;

            if($finance_card_note){
                $logofpenifit->process_notes = $finance_card_note;
                $logofpenifit->save();

            }
            else{
                $logofpenifit->save();

            }


        }





        return response()->json([
            'finance_card' => $finance_card
            ////////////////////////////////////////////////////////////// change wait to 1 and add to log
        ]);

    }

    public function get_finance_card_log(Request $request)
    {
        $finance_card_id = $request->input('finance_card_id');


        if ($finance_card_id){



            $arrs['data'] = Logofpenifit::with('user:id,name')
                ->where('process_id', '=', $finance_card_id)
                ->where('finance_amount','!=',null)
                ->get();

            return $arrs;



        }



    }

    public function test(){

        ///
        $bookings=User::find('1');
        //////////////////////////////////////////// return just booking
//        return $bookings -> bookings_users;

        ///////////////////////////////////////////return doctor with its booking
//        return $bookings = User::with('bookings_users')->find('1');

        //////////////////////////////////////////// find doctor of booking
        ///
//        $bookuser=Bookuser::find('27');
//        return $bookuser -> doctor -> email;
//
        /////
        $bookuser=Bookuser::find('27');
        return $bookuser ;

//        $bookuser=Bookuser::find('27');
//        return $bookuser -> userBooked -> id;




    }

}
