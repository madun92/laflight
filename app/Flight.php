<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
	protected $fillable = [
	'aircraft_id', 'name', 'slug', 'price', 'qty', 'class', 'depart', 'arrive'
	];
}
