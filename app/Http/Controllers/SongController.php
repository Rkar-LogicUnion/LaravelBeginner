<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Song;
use App\Vocalist;

class SongController extends Controller
{
    public function index(){
        $vocalists=Vocalist::all();
        $songs=Song::all();
        return view('song',compact('vocalists','songs'));
    }
}
