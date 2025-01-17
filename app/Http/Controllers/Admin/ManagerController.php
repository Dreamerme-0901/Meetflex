<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Manager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ManagerController extends Controller
{
    public function list(){
        $list = Manager::orderby("id", "ASC")->get();
        return view("admin.manager.list", compact("list"));
    }

    public function add(){
        return view("admin.manager.add");
    }

    public function checkManager(Request $req){
        $manager = (new Manager())->checkManager($req->account);
        if(!empty($manager)){
            echo("exist");
        }
    }

    public function hasManager(Request $req){
        $manager = (new Manager())->hasManager($req->account, $req->oldAccount);
        if(!empty($manager)){
            echo("exist");
        }
    }

    public function insert(Request $req){
        $manager =(new Manager())->checkManager($req->account);
        if(!empty($manager)){
            Session::flash("message", "帳號已存在");
            return redirect("/admin/manager/add");
            exit;
        }

        $manager = new Manager();
        $manager->account = $req->account;
        $manager->password = $req->password;
        $manager->save();

        Session::flash("message", "已新增");
        return redirect("/admin/manager/list");
    }



    public function edit(Request $req)
    {
        $manager = Manager::find($req->id);
        return view("admin.manager.edit", compact("manager"));
    }

    public function update(Request $req)
    {
        $manager = Manager::find($req->id);
        $manager->account = $req->account;
        $manager->password = $req->password;
        $manager->update();

        Session::flash("message", "已修改");
        return redirect("/admin/manager/list");
    }

    public function delete(Request $req)
    {
        Manager::destroy($req->id);
        Session::flash("message","已刪除");
        return redirect("/admin/manager/list");
    }
}