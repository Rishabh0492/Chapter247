<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;


class Customer extends Model
{
	    use LogsActivity;

    Protected $fillable =['name','email','created_at','dob'];

    protected $dates = ['created_at','dob'];

        protected static $logAttributes = ['name', 'email','dob'];


}
