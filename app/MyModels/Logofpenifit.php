<?php

namespace App\MyModels;

use Illuminate\Database\Eloquent\Model;

class Logofpenifit extends Model
{
//    protected $table="logwaitingpenifits";
    protected $fillable = [
     'entering_time','exit_time','notes','penifit_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'created_at', 'updated_at'

    ];
    public $timestamps = true;


    public function penifit(){
        return $this ->belongsTo('App\MyModels\Penifit','penifit_id','id');
    }
    //
}
