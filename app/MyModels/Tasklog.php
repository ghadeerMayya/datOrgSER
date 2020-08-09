<?php

namespace App\MyModels;

use Illuminate\Database\Eloquent\Model;

class Tasklog extends Model
{
//    protected $table="logwaitingpenifits";
    protected $fillable = [
     'user_did_task','penifit_id','task'
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
