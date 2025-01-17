<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\UserhistoryModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserhistoryController extends Controller
{
    public function list(){
        $list=UserhistoryModel::get();
        return view("Admin.userhistory.list", compact("list"));
    }   

    public function add(){
        return view("admin.userhistory.add");
    }
 
    public function insert(Request $req){
        $userhistory = new UserhistoryModel();
        $userhistory->user_id = $req->user_id;
        $userhistory->movie_id = $req->movie_id;
        $userhistory->save();

        Session::flash("message", "已新增");
        return redirect("/admin/userhistory/list");
    }

    public function edit(Request $req){
        $userhistory =UserhistoryModel::find($req->id);
        return view("admin.userhistory.edit", compact("userhistory"));
    }

    public function update(Request $req){
        $userhistory = UserhistoryModel::find($req->id);
        $userhistory->user_id = $req->user_id;
        $userhistory->movie_id = $req->movie_id;
        $userhistory->update();
        Session::flash("message", "已修改");
        return redirect("/admin/userhistory/list");
    }

    public function delete(Request $req){
        UserhistoryModel::destroy($req->id);
        Session::flash("message", "已刪除");
        return redirect("/admin/userhistory/list");
    }
    

}