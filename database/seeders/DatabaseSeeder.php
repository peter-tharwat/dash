<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();

    	\App\Models\User::create([
    		'name'=>"Peter Ayoub",
    		'job_title'=>"مسؤول",
    		'salary'=>3000,
    		'required_points'=>50,
    		'point_cost'=>20,
    		'currency'=>"EGP",
    		'department'=>"BOARD",
    		'department_admin'=>1,
    		'power'=>"ADMIN",
    		'email'=>"ptharwat@gmail.com",
    		'email_verified_at'=>date("Y-m-d h:i:s"), 
    		'password'=>bcrypt('pass1256')
    	]);



        
	 



    }
}
