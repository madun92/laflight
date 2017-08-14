<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Flight;
use App\Airline;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(AirlinesTableSeeder::class);
        // $this->call(AircraftsTableSeeder::class);
    }
}
