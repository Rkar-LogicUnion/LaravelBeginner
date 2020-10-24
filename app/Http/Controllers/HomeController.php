<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{
    public function index(){
        return view('home');
    }
    public function content(){
        $students=['MgMg','SuSu','Aung Aung'];
        return view('content',compact('students'));
    }
}
