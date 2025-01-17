<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class playlist extends Controller
{
    public function playlist(){
        return view("front.playlist");
    }
}