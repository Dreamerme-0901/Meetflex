<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompanyPage extends Controller
{
    public function CompanyPage(){
        return view("front.CompanyPage");
    }
}