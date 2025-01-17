<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Front\MeetFlex as FrontMeetFlex;
use App\Models\Front\userLike;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MeetFlex extends Controller
{
    public function homePage(){
        $id= session("user");
        $likeList=[];
        $list = FrontMeetFlex::orderby("id", "ASC")->get();
        $userLike = userLike::where("user_id",$id)->get();
        foreach($userLike as $item){
            array_push($likeList,$item->movie_id);
        }
        
        return view("front.MeetFlex", compact("list","likeList"));
    }

    public function checkMovie(Request $req){
        $list = (new FrontMeetFlex())->checkMovie($req->title);
        if(!empty($list)){
            echo("exist");
        }
    }

    public function hasMovie(Request $req){
        $list = (new FrontMeetFlex())->hasMovie($req->title, $req->oldTitle);
        if(!empty($list)){
            echo("exist");
        }
    }

    public function insert(Request $req){
        $list =(new FrontMeetFlex())->checkMovie($req->id);
        if(empty($list)){
            Session::flash("message", "片單不存在");
            return redirect("/");
            exit;
        }

        $list = new userLike();//放入資料庫 
        $list->movie_id = $req->id;
        $list->user_id = session("user");
        $list->save();
    }

    public function delete(Request $req){
        $userLike = userLike::where("movie_id",$req->id)->where("user_id",session("user"))->first();
        $userLike->delete();
    }
    /*---------------------2025/01/15新增------------------------ */



}