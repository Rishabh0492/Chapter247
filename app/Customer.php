<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    Protected $fillable =['name','email','created_at'];

    protected $dates = ['created_at'];

}
