<?php

use Illuminate\Database\Seeder;

class AirlinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $airlines = [
	    	[
	    	'name' => 'Lion Air',
	    	'slug' => 'lion-air',
	    	],
	    	[
	    	'name' => 'Garuda Indonesia',
	    	'slug' => 'garuda-indonesia'
	    	],
	    	[
	    	'name' => 'Indonesia AirAsia',
	    	'slug' => 'air-asia'
	    	],
	    	[
	    	'name' => 'Citylink',
	    	'slug' => 'city-link'
	    	],
	    	[
	    	'name' => 'Sriwijaya Air',
	    	'slug' => 'sriwijaya-air'
	    	],
	    	[
	    	'name' => 'Wings Air',
	    	'slug' => 'wings-air'
	    	],
	    	[
	    	'name' => 'NAM Air',
	    	'slug' => 'nam-air'
	    	],
	    	[
	    	'name' => 'Batik Air',
	    	'slug' => 'batik-air'
	    	],
    	];

    	DB::table('airlines')->insert($airlines);
    }
}
