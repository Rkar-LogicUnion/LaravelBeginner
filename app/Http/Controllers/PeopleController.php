<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Nrc;
use App\People;

class PeopleController extends Controller
{
    public function index(){
        $people=People::all();
        $nrcs=Nrc::all();
        return view('people',compact('people','nrcs'));
    }
}
