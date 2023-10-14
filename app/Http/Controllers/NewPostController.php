<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewPostController extends Controller
{
    //
    public function newpost(){
        return view('new-post');
    }
}
