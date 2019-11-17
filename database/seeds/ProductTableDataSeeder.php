<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductTableDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       for ($i=0; $i < 50; $i++) { 
	    	Product::create([
	            'name' => str_random(8),
	            'price' => rand(1,100),
	            'in_stock' => rand(1, 0)
	        ]);
    	}
    }
}
