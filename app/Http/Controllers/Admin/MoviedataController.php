<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\MoviedataModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MoviedataController extends Controller
{
   public function list(){
        $list = MoviedataModel::get();
        return view("admin.moviedata.list", compact("list"));
    }

    public function add(){
        return view("admin.moviedata.add");
    }
 
    public function insert(Request $req){
        $moviedata = new MoviedataModel();
        $moviedata->title = $req->title;
        $moviedata->image = $req->image;
        $moviedata->description = $req->description;
        $moviedata->genres = $req->genres;
        $moviedata->release_date = $req->release_date;
        $moviedata->save();

        Session::flash("message", "已新增");
        return redirect("/admin/moviedata/list");
    }

    public function edit(Request $req){
        $moviedata =MoviedataModel::find($req->id);
        return view("admin.moviedata.edit", compact("moviedata"));
    }

    public function update(Request $req){
        $moviedata = MoviedataModel::find($req->id);
        $moviedata->title = $req->title;
        $moviedata->image = $req->image;
        $moviedata->description = $req->description;
        $moviedata->genres = $req->genres;
        $moviedata->release_date = $req->release_date;
        $moviedata->update();
        Session::flash("message", "已修改");
        return redirect("/admin/moviedata/list");
    }

    public function delete(Request $req){
        MoviedataModel::destroy($req->id);
        Session::flash("message", "已刪除");
        return redirect("/admin/moviedata/list");
    }
}