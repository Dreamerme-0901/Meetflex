<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Admin\UserqaModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserqaController extends Controller
{
    public function list(){
        $list=UserqaModel::get();
        return view("Admin.userqa.list",compact("list"));
    }

    public function add(){
        return view("admin.userqa.add");
    }
 
    public function insert(Request $req){
        $userqa = new UserqaModel();
        $userqa->title = $req->title;
        $userqa->content = $req->content;;
        $userqa->save();

        Session::flash("message", "已新增");
        return redirect("/admin/userqa/list");
    }

    public function edit(Request $req){
        $userqa =UserqaModel::find($req->id);
        return view("admin.userqa.edit", compact("userqa"));
    }

    public function update(Request $req){
        $userqa = UserqaModel::find($req->id);
        $userqa->title = $req->title;
        $userqa->content = $req->content;;
        $userqa->update();
        Session::flash("message", "已修改");
        return redirect("/admin/userqa/list");
    }

    public function delete(Request $req){
        UserqaModel::destroy($req->id);
        Session::flash("message", "已刪除");
        return redirect("/admin/userqa/list");
    }
}