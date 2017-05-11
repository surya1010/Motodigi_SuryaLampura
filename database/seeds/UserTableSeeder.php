<?php

//use DB;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
 
use Faker\Factory as Faker;

use App\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	# Administrator
        $admin = new User();
        $admin->email = 'admin@admin.com';
        $admin->first_name = 'Admin';
        $admin->last_name = '';
        $admin->city = 'Tangerang';
        $admin->date_of_birth = '1989-12-01';
        $admin->status = '1';
        $admin->user_type = 'Administrator';
        $admin->password = bcrypt('admin');
        $admin->save();

        #Customer
        $faker = Faker::create();
    	foreach (range(1,2) as $index) {
	        User::create([
	            'email' => $faker->unique()->email,
	            'first_name' => $faker->firstName,
	            'last_name' => $faker->lastName,
	            'city' => 'Tangerang',
	            'date_of_birth' => $faker->date,
	            'status' => ['1','0'][rand(0,1)],
	            'user_type' => 'Customer',
	            'password' => bcrypt('secret'),
	        ]);
        }

    	#outlet Jakarta
        $faker = Faker::create();
    	foreach (range(1,4) as $index) {
	        User::create([
	            'email' => $faker->unique()->email,
	            'first_name' => $faker->firstName,
	            'last_name' => $faker->lastName,
	            'city' => 'Jakarta',
	            'date_of_birth' => $faker->date,
	            'status' => ['1','0'][rand(0,1)],
	            'user_type' => 'Outlet',
	            'password' => bcrypt('secret'),
	        ]);
        }

        #outlet Surabaya
        $faker = Faker::create();
    	foreach (range(1,4) as $index) {
	        User::create([
	            'email' => $faker->unique()->email,
	            'first_name' => $faker->firstName,
	            'last_name' => $faker->lastName,
	            'city' => 'Surabaya',
	            'date_of_birth' => $faker->date,
	            'status' => ['1','0'][rand(0,1)],
	            'user_type' => 'Outlet',
	            'password' => bcrypt('secret'),
	        ]);
        }
    }
}
