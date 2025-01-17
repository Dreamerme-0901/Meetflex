<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Front\news;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function News(){
        $list = news::orderby("id", "DESC")->get();
        return view("front.News", compact("list"));
    }
}