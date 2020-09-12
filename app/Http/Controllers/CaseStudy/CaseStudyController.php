<?php

namespace App\Http\Controllers\CaseStudy;

use App\Http\Controllers\Controller;
use App\MyModels\Bookuser;
use App\MyModels\Initialevaluationform;
use App\MyModels\Penifit;
use App\MyModels\Tasklog;
use App\Providers\RouteServiceProvider;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\ConfirmsPasswords;
use Illuminate\Support\Facades\Auth;
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

    public function penifit_profile(Request $request){
        if ($request){
            $current_id = $request->input('current_id');

            $currentpenifit=Penifit::where('id','=',$current_id)->get();

//            $returnHTML = view('admin\profile')->with('currentpenifit', $currentpenifit);


            return view('admin\profile')->with('currentpenifit', $currentpenifit);
//            return response() -> json([
//                'msg'=>'user moved to your log',
//                "redirect"=>true,
//                "redirect_url"=>'',
//                'html'=>$returnHTML,
//                'penifit'=>$currentpenifit
//
//            ]);
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

    public function getSurvey(Request $request){
        if ($request){
            $current_id = $request->input('current_id');

            $currentpenifit=Penifit::where('id','=',$current_id)->get();

            $returnHTML = view('survies\Initial_evaluation')->with('currentpenifit', $currentpenifit)->render();


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
        return view('casestudy\test');
    }

    public function getSpecificWaitingUsers(){

        $arrs['data']=Bookuser::with('doctor','userBooked','penifitBooked')
            ->where('status','waiting')
            ->where('doctor_id',Auth::user()->id)
            ->get();

        return $arrs;
    }

    public function saveSurvey(Request $request){
//        $first_name = $request->input('first_name');
//        $father_name = $request->input('father_name');
//        $last_name = $request->input('last_name');
//        $city_name = $request->input('city_name');
//        $bd = $request->input('birth_date');
//        $gender=$request->input('gender_select');
//        $card_id = $request->input('card_id');
//        $social_status=$request->input('Social_status');
//
//
//        $currentpenifit=Penifit::where('card_id','=',$card_id)->get('id');
//
//        if ($currentpenifit->isEmpty()) {
//
//            $penifit = new Penifit();
//            $penifit->first_name = $first_name;
//            $penifit->father_name = $father_name;
//            $penifit->last_name = $last_name;
//            $penifit->city_name = $city_name;
//            $penifit->birth_date = $bd;
//            $penifit->gender = $gender;
//            $penifit->social_status = $social_status;
//            $penifit->card_id = $card_id;
//            $penifit->added_by = Auth::user()->id;
//            $penifit->wait = '1';
//            $penifit->save();
//////////////////////////////////////////////////////////////////////////////General task log
//            $currentid=Penifit::where('card_id','=',$card_id)->get('id');
//            $tasklog=new Tasklog();
//            $currentDate=Carbon::now();
//            $tasklog->created_at=$currentDate;
//            $tasklog->user_did_task=Auth::user()->id;
//            $tasklog->penifit_id=$currentid[0]->id;
//            $tasklog->task="saving user data";
//            $tasklog->save();
//            ////////////////////////////////////////////////////////////////////end GTL
//        }
//        else{
//            return response() -> json([
//                'status'=> true,
//                'msg'=>'user already exist',
//            ]);
//        }
//
//        if($penifit){
//            return response() -> json([
//                'status'=> true,
//                'msg'=>'saved to DB',
//            ]);
//        }
//        else{
//            return response() -> json([
//                'status'=> false,
//                'msg'=>' حدث خطأ الرجاء إعادة المحاولة'
//            ]);
//        }

        $initeva=new Initialevaluationform();
        $initeva->user_id=Auth::user()->id;
        $initeva->customer_id=$request->input('c_user_id');

        $initeva->num_family=$request->input('num_fam');
        $initeva->i_e_previous_job=$request->input('l_job');
        $initeva->i_e_current_job=$request->input('c_job');
        $initeva->i_e_address=$request->input('c_adress');
        $initeva->i_e_phone=$request->input('p_phone');

        $initeva->I_e_main=$request->input('I_e_main');
        $initeva->I_e_story=$request->input('I_e_story');
        $initeva->I_e_Illness=$request->input('I_e_Illness');
        $initeva->I_e_pre=$request->input('I_e_pre');

        $initeva->I_e_Psy_talk=$request->input('I_e_Psy_talk');
        $initeva->I_e_Psy_display=$request->input('I_e_Psy_display');
        $initeva->I_e_Psy_mood=$request->input('I_e_Psy_mood');
        $initeva->I_e_Psy_think=$request->input('I_e_Psy_think');
        $initeva->I_e_Psy_Focus=$request->input('I_e_Psy_Focus');
        $initeva->I_e_Psy_Realization=$request->input('I_e_Psy_Realization');
        $initeva->I_e_Psy_vision=$request->input('I_e_Psy_vision');

        $initeva->I_e_Illness_summary=$request->input('I_e_Illness_summary');
        $initeva->doctor_selectedin_I_E=$request->input('doctor_selectedin_I_E');
        $initeva->I_e_report_form_pro=$request->input('I_e_report_form_pro');
        $initeva->I_e_report_form_date=$request->input('I_e_report_form_date');
        $initeva->I_e_report_form_good=$request->input('I_e_report_form_good');
        $initeva->I_e_report_form_background=$request->input('I_e_report_form_background');
        $initeva->I_e_report_form_first=$request->input('I_e_report_form_first');
        $initeva->I_e_report_sources=$request->input('I_e_report_sources');
        $initeva->I_e_report_form_work=$request->input('I_e_report_form_work');

        if($request->input('I_e_I_d_schs')){
            $initeva->I_e_I_d_schs=1;
        }
        if($request->input('I_e_I_d_md')){
            $initeva->I_e_I_d_md=1;
        }
         if($request->input('I_e_I_d_ad')){
            $initeva->I_e_I_d_ad=1;
        }
         if($request->input('I_e_I_d_ob')){
            $initeva->I_e_I_d_ob=1;
        }
         if($request->input('I_e_I_d_ptd')){
            $initeva->I_e_I_d_ptd=1;
        }
         if($request->input('I_e_I_d_non')){
            $initeva->I_e_I_d_non=1;
        }
         if($request->input('I_e_I_d_fed')){
            $initeva->I_e_I_d_fed=1;
        }
         if($request->input('I_e_I_d_cd')){
            $initeva->I_e_I_d_cd=1;
        }
         if($request->input('I_e_I_d_sex')){
            $initeva->I_e_I_d_sex=1;
        }
         if($request->input('I_e_I_d_bad')){
            $initeva->I_e_I_d_bad=1;
        }
         if($request->input('I_e_I_d_nd')){
            $initeva->I_e_I_d_nd=1;
        }
         if($request->input('I_e_I_d_pd')){
            $initeva->I_e_I_d_pd=1;
        }
         if($request->input('I_e_I_d_ep')){
            $initeva->I_e_I_d_ep=1;
        }
         if($request->input('I_e_I_d_adhd')){
            $initeva->I_e_I_d_adhd=1;
        }
         if($request->input('I_e_I_d_ed')){
            $initeva->I_e_I_d_ed=1;
        }
         if($request->input('I_e_I_d_learn')){
            $initeva->I_e_I_d_learn=1;
        }
         if($request->input('I_e_I_d_auts')){
            $initeva->I_e_I_d_auts=1;
        }
          if($request->input('I_e_I_d_mr')){
            $initeva->I_e_I_d_mr=1;
        }
          if($request->input('I_e_I_d_pro')){
            $initeva->I_e_I_d_pro=1;
        }





        $initeva->save();

        //if no report image
        if($request -> I_e_report_photo == null)
        {



        }
        else{
            $image_extension=$request -> I_e_report_photo -> getclientOriginalExtension();
            $report_image_name=time().'.'.$image_extension;
            $path='images/reportImages';
            $request -> I_e_report_photo -> move($path,$report_image_name);
            $imgNameInDB= $path .'/'. $report_image_name;

            //////////store img name to db
            ///
            $initeva->I_e_report_date=$request->input('I_e_report_date');
            $initeva->I_e_report_name=$request->input('I_e_report_name');
            $initeva->I_e_report_Therapy=$request->input('I_e_report_Therapy');
            $initeva->I_e_report_Diagnose=$request->input('I_e_report_Diagnose');
            $initeva->I_e_report_photo=$imgNameInDB;
            $initeva->I_e_report_Satis=$request->input('I_e_report_Satis');
            $initeva->save();


        }






    }

//    public function testt(){
//        return Initialevaluationform::with('penifit')->get();
//    }


}
