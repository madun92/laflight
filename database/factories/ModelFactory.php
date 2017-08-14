<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;
    $roles = [2,3,4];
    $key = array_rand($roles);
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'address' => $faker->address,
        'role_id' => $roles[$key],
        'phone' => $faker->phoneNumber,
        'remember_token' => str_random(10),
    ];
});
$factory->define(App\Airline::class, function (Faker\Generator $faker) {


    return [
        'name' => $faker->name,
        'plane_code' => $faker->name,
        'aircraft' => $faker->name,
        'cabin_baggage' => 7,
        'baggage' => 20
    ];
});

$data = App\Airline::all()->toArray();
$factory->define(App\Aircraft::class, function () use ($data) {
	// dd($data);
	// $name = ['Lion Air', 'Wings Air', 'Garuda Indonesia'];
	$key = array_rand($data);
	// dd($key);
	// dd(array_rand($name));
    return [
        'name' => $data[$key]['name'],
        'slug' => str_slug($data[$key]['name']),
        'airline_id' => $data[$key]['id'] ,
        'aircraft' => 'Boeing',
        'cabin_baggage' => 7,
        'baggage' => 20,
        // 'slug' => $faker->name,
        // 'aircraft' => $faker->name,
        // 'cabin_baggage' => 7,
        // 'baggage' => 20
    ];
});
