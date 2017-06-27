<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    /*
        Get All Transaction of User
    */
    public function transactions(){
        return $this->hasMany('App\Transactions');
    }
}
