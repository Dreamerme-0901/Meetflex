<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\UserdataModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserdataController extends Controller
{
    public function list(){
        $list = UserdataModel::get();
        return view("admin.userdata.list", compact("list"));
    }

    public function add(){
        return view("admin.userdata.add");
    }
 
    public function insert(Request $req){
        $userdata = new UserdataModel();
        $userdata->email = $req->email;
        $userdata->account = $req->account;
        $userdata->password = $req->password;
        $userdata->country = $req->country;
        $userdata->state = $req->state;
        $userdata->save();

        Session::flash("message", "已新增");
        return redirect("/admin/userdata/list");
    }

    public function edit(Request $req){
        $userdata =UserdataModel::find($req->id);
        return view("admin.userdata.edit", compact("userdata"));
    }

    public function update(Request $req){
        $userdata = UserdataModel::find($req->id);
        $userdata->email = $req->email;
        $userdata->account = $req->account;
        $userdata->password = $req->password;
        $userdata->country = $req->country;
        $userdata->state = $req->state;
        $userdata->update();
        Session::flash("message", "已修改");
        return redirect("/admin/userdata/list");
    }

    public function delete(Request $req){
        UserdataModel::destroy($req->id);
        Session::flash("message", "已刪除");
        return redirect("/admin/userdata/list");
    }
}