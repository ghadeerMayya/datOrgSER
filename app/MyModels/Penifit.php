<?php

namespace App\MyModels;

use Illuminate\Database\Eloquent\Model;

class Penifit extends Model
{
    //
    protected $fillable = [
        'first_name', 'father_name', 'last_name','city_name','birth_date','card_id','added_by','wait'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

    ];
    public $timestamps = true;

    public function logofpenifits(){
        return $this -> hasMany('App\MyModels\Logofpenifit','penifit_id','id');
    }

}
