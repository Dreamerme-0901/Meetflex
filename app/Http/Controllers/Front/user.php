<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class user extends Controller
{
    public function user(){
        return view("front.user");
    }
   
}