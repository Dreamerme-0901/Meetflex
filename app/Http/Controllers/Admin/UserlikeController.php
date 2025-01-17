<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\UserlikeModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserlikeController extends Controller
{
    public function list(){
        $list=UserlikeModel::get();
        return view("Admin.userlike.list",compact("list"));
    }

    public function add(){
        return view("admin.userlike.add");
    }
 
    public function insert(Request $req){
        $userlike = new UserlikeModel();
        $userlike->user_id = $req->user_id;
        $userlike->movie_id = $req->movie_id;
        $userlike->save();

        Session::flash("message", "已新增");
        return redirect("/admin/userlike/list");
    }

    public function edit(Request $req){
        $userlike =UserlikeModel::find($req->id);
        return view("admin.userlike.edit", compact("userlike"));
    }

    public function update(Request $req){
        $userlike = UserlikeModel::find($req->id);
        $userlike->user_id = $req->user_id;
        $userlike->movie_id = $req->movie_id;
        $userlike->update();
        Session::flash("message", "已修改");
        return redirect("/admin/userlike/list");
    }

    public function delete(Request $req){
        UserlikeModel::destroy($req->id);
        Session::flash("message", "已刪除");
        return redirect("/admin/userlike/list");
    }
}