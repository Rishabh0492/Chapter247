<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActivityController extends Controller
{
    //

    public function index()
    {
    	dd('asd');
    	$activities=auth()->user()->actions;
    	return $activities;
    }
}
