<?php

use Illuminate\Database\Seeder;
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
    	$users = [
	    	[
	    	'name' => 'admin',
	    	'email' => 'admin@flight.com',
	    	'password' => Hash::make('iniadmin'),
	    	'role_id' => 1,
	    	'created_at'  => Carbon::now(),
	    	'updated_at'  => Carbon::now()
	    	]
    	];

    	DB::table('users')->insert($users);

    	factory(User::class, 10)->create();
    }
}
}
