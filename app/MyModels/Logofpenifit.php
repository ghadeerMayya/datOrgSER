<?php

namespace App\MyModels;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Logofpenifit extends Model
{
//    protected $table="logwaitingpenifits";
    protected $fillable = [
     'customer_id',
          'created_at', 'updated_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

    ];
    public $timestamps = true;


    public function penifit(){
        return $this-> belongsTo(Penifit::class,'customer_id','id');
    }
    public function user(){
        return $this-> belongsTo(User::class,'user_id','id');
    }

}
