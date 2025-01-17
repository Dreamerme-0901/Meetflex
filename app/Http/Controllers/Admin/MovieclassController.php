<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\MovieclassModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MovieclassController extends Controller
{
    public function list(){
        $list = MovieclassModel::get();
        return view("admin.movieclass.list", compact("list"));
    }

    public function add(){
        return view("admin.movieclass.add");
    }
 
    public function insert(Request $req){
        $movieclass = new MovieclassModel();
        $movieclass->nu = $req->nu;
        $movieclass->genres = $req->genres;
        $movieclass->save();

        Session::flash("message", "已新增");
        return redirect("/admin/movieclass/list");
    }

    public function edit(Request $req){
        $movieclass =MovieclassModel::find($req->id);
        return view("admin.movieclass.edit", compact("movieclass"));
    }

    public function update(Request $req){
        $movieclass = MovieclassModel::find($req->id);
        $movieclass->nu = $req->nu;
        $movieclass->genres = $req->genres;
        $movieclass->update();
        Session::flash("message", "已修改");
        return redirect("/admin/movieclass/list");
    }

    public function delete(Request $req){
        MovieclassModel::destroy($req->id);
        Session::flash("message", "已刪除");
        return redirect("/admin/movieclass/list");
    }
}