<?php

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use App\Models\Admin;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Admin::create(['name' => 'Admin', 'email'=> 'admin@gmail.com', 'password'=> Hash::make('password')]);
    }
}
