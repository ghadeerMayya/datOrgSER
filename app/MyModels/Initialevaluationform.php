<?php

namespace App\MyModels;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Rinvex\Bookings\Models\BookableAvailability;
use Rinvex\Bookings\Models\BookableBooking;
use Rinvex\Bookings\Traits\HasBookings;


class Initialevaluationform extends Model
{
    protected $table = 'initialevaluationforms';


    public function penifit(){
        return $this-> belongsTo(Penifit::class,'customer_id','id');
    }

    ////////////////////////////////////////// dates booked for user
//    public function doctor(){
//        return $this-> belongsTo(User::class,'doctor_id','id');
//    }
    ///////////////////////////////////////// dates this user booked it
//    public function userBooked(){
//        return $this-> belongsTo(User::class,'user_id','id');
//    }
//    ///////////////////////////////////////booked dates for penifit
//    public function penifitBooked(){
//        return $this-> belongsTo(Penifit::class,'customer_id','id');
//    }







    protected $fillable = [
        'user_id','customer_id','num_family','	i_e_previous_job','i_e_current_job','i_e_address','i_e_phone',
        'I_e_main','I_e_story','I_e_Illness','I_e_pre','I_e_report_date','I_e_report_name','I_e_report_Therapy',
        'I_e_report_Diagnose','I_e_report_photo','I_e_report_Satis','I_e_Psy_talk',
        'I_e_Psy_display','I_e_Psy_mood','I_e_Psy_think','I_e_Psy_Focus','I_e_Psy_Realization',
        'I_e_Psy_vision','I_e_I_d_schs','I_e_I_d_md','I_e_I_d_ad','I_e_I_d_ob','I_e_I_d_ptd',
        'I_e_I_d_non','I_e_I_d_fed','I_e_I_d_cd','I_e_I_d_sex','I_e_I_d_bad','I_e_I_d_nd',
        'I_e_I_d_pd','I_e_I_d_ep','I_e_I_d_adhd','I_e_I_d_ed','I_e_I_d_learn','I_e_I_d_auts',
        'I_e_I_d_mr','I_e_I_d_pro','I_e_Illness_summary','doctor_selectedin_I_E','I_e_report_form_pro',
        'I_e_report_form_date','I_e_report_form_good','I_e_report_form_background','I_e_report_form_first',
        'I_e_report_sources','I_e_report_form_work'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'created_at', 'updated_at','customer_id','user_id'

    ];
    public $timestamps = true;


}
