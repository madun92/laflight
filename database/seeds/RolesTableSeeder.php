<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$roles = [
	    	[
	    	'title' => 'Admin',
	    	'slug' => 'admin',
	    	'created_at' => Carbon::now(),
	    	'updated_at' => Carbon::now()
	    	],
	    	[
	    	'title' => 'Editor',
	    	'slug' => 'editor',
	    	'created_at' => Carbon::now(),
	    	'updated_at' => Carbon::now()
	    	],
	    	[
	    	'title' => 'Agent',
	    	'slug' => 'contributor',
	    	'created_at' => Carbon::now(),
	    	'updated_at' => Carbon::now()
	    	],
	    	[
	    	'title' => 'Customer',
	    	'slug' => 'customer',
	    	'created_at' => Carbon::now(),
	    	'updated_at' => Carbon::now()
	    	],
    	];

    	DB::table('roles')->insert($roles);
    }
}
