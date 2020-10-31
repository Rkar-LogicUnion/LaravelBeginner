<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Like;
use App\Video;

class VideoController extends Controller
{
    public function index(){
        $videos=Video::all();
        $comments=Comment::all();
        $likes=Like::all();
        return view('video',compact('videos','comments','likes'));
    }
}
