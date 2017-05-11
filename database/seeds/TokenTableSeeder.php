<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

use App\Token;
class TokenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        #customer token
	    $customer1 = Token::create([
								'users_id'        => 2,
								'token'           => str_random(100),
								'token_generated' => date('Y-m-d H:i:s'),
								'token_expired'   => date("Y-m-d H:i:s", strtotime("+1 week"))
					        ]);

	    $customer2 = Token::create([
								'users_id'        => 3,
								'token'           => str_random(100),
								'token_generated' => date('Y-m-d H:i:s'),
								'token_expired'   => date("Y-m-d H:i:s", strtotime("+1 week"))
					        ]);


	    #outlet token
	    $idOutlet = array(4,5,6,7,8,9,10,11);
	    
	    foreach ($idOutlet as $key => $value) {
	    	$outlet1 =	Token::create([
								'users_id'        => $value,
								'token'           => str_random(100),
								'token_generated' => date('Y-m-d H:i:s'),
								'token_expired'   => date("Y-m-d H:i:s", strtotime("+1 week"))
					        ]);
	    }
        
    }
}
