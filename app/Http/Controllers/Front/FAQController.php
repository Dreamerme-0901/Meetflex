<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Front\qa;
use Illuminate\Http\Request;

class FAQController extends Controller
{
    public function FAQ(){
        $list = qa::orderby("id", "ASC")->get();
        return view("front.FAQ", compact("list"));
    }
}