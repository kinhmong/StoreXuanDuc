<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = "customer";
    protected $guarded = ['id'];
    public function bill(){
    	return $this->hasMany('App\Bill','id_customer','id');
    }

}
