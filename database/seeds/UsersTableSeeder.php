<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// dd(new DB);
    	$users = [
	    	[
	    	'name' => 'admin',
	    	'email' => 'admin@flight.com',
	    	'password' => Hash::make('iniadmin'),
	    	'role_id' => 1,
	    	'address' => 'jl. bantul',
	    	'created_at'  => Carbon::now(),
	    	'updated_at'  => Carbon::now()
	    	]
    	];

    	User::insert($users);
    	// DB::table('users')->insert($users);

    	factory(User::class, 10)->create();
    }
}
