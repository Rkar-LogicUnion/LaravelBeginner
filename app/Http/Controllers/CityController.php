<?php

namespace App\Http\Controllers;

use App\Address;
use App\City;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Township;

class CityController extends Controller
{
    public function index(){
        $cities=City::all();
        $townships=Township::all();
        return view('city',compact('cities','townships'));
    }
}
