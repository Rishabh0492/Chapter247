<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;


class Product extends Model
{
    use LogsActivity;

    /**
     * The attributes that are mass assignable.
     *	
     * @var array
     */
    protected $fillable = [
        'name', 'price','stock','in_stock'
    ];

    protected static $logAttributes = ['name', 'price','stock'];
    
}