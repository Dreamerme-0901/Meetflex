<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\QAModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class QAController extends Controller
{
    public function list(){
        $list = QAModel::get();
        return view("Admin.qa.list", compact("list"));
    }

    public function add(){
        return view("admin.qa.add");
    }

    public function insert(Request $req){
        $qa = new QAModel();
        $qa->title = $req->title;
        $qa->content = $req->content;
        $qa->save();

        Session::flash("message", "已新增");
        return redirect("/admin/qa/list");
    }

    public function edit(Request $req){
        $qa = QAModel::find($req->id);
        return view("admin.qa.edit", compact("qa"));
    }

    public function update(Request $req){
        $qa = QAModel::find($req->id);
        $qa->title = $req->title;
        $qa->content = $req->content;
        $qa->update();
        Session::flash("message", "已修改");
        return redirect("/admin/qa/list");
    }

    public function delete(Request $req){
        QAModel::destroy($req->id);
        Session::flash("message", "已刪除");
        return redirect("/admin/qa/list");
    }
}