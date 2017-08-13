<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Flight;
use Carbon\Carbon;

class FrontController extends Controller
{

	public function index(){
		
		return view('flight.index');
	}
}
