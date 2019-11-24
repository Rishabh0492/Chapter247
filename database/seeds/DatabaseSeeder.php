<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UsersTableSeeder::class);
        $this->call(CreateAdminUserSeeder::class);
        $this->call(CustomerTableDataSeeder::class);
        $this->call(PermissionTableSeeder::class);
        $this->call(ProductTableDataSeeder::class);
    }
}
