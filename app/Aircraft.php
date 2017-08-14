<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aircraft extends Model
{
    protected $fillable = [
    	'airlines_id', 'name', 'slug', 'plane_code', 'aircraft', 'cabin_baggage', 'baggage'
    ];
}
