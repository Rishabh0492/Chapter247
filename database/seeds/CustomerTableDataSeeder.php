<?php

use Illuminate\Database\Seeder;
use App\Customer;
use Carbon\Carbon;
class CustomerTableDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 200; $i++) { 
        	$date = Carbon::create(2015, 5, 28, 0, 0, 0);
	    	Customer::create([
	            'name' => str_random(8),
	            'email' => str_random(12).'@mail.com',
	            'dob' => $date->addWeeks(rand(1, 52))->format('Y-m-d')
	        ]);
    	}
    }
}
