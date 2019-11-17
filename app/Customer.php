<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    Protected $fillable =['name','email','created_at','dob'];

    protected $dates = ['created_at','dob'];

}
