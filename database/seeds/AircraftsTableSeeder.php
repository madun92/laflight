<?php

use Illuminate\Database\Seeder;

class AircraftsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	// factory(App\Aircraft::class, 20)->create();
    	
    	// $aircrafts = [
	    // 	[
	    // 	'name' => 'Lion Air',
	    // 	'slug' => 'lion-air',
	    // 	'plane_code' => 'admin',
	    // 	'aircraft' => 'Boeing - 737',
	    // 	'cabin_baggage' => 7,
	    // 	'baggage' => 20
	    // 	]
    	// ];

    	$aircrafts = [
	    	[
        	'airline_id' => $data[$key]['id'] ,
	    	'name' => 'Lion Air',
	    	'slug' => 'lion-air',
	    	'plane_code' => 'admin',
	    	'aircraft' => 'Boeing - 737',
	    	'cabin_baggage' => 7,
	    	'baggage' => 20
	    	],
	    	[
        	'airline_id' => $data[$key]['id'] ,
	    	'name' => 'Garuda Indonesia',
	    	'slug' => 'garuda-indonesia',
	    	'plane_code' => 'admin',
	    	'aircraft' => ,
	    	'cabin_baggage' => 7,
	    	'baggage' => 20
	    	],
	    	[
	    	'name' => 'City Link',
	    	'slug' => 'city-link',
	    	'plane_code' => 'admin',
	    	'aircraft' => ,
	    	'cabin_baggage' => 7,
	    	'baggage' => 20
	    	],
	    	[
	    	'name' => 'City Link',
	    	'slug' => 'city-link',
	    	'plane_code' => 'admin',
	    	'aircraft' => ,
	    	'cabin_baggage' => 7,
	    	'baggage' => 20
	    	],
    	];

    	DB::table('aircrafts')->insert($airlines);
    }
}
