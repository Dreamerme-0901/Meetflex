<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Manager;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function home(){
        return view("admin.home");
    }
    public function login(){
        return view("admin.login");
    }

    public function doLogin(Request $req)
    {
        $account=$req->account;
        $password=$req->password;
        $manager = (new Manager())->getmanager($account, $password);
        
        if (empty($manager))
        {
            return back()->withInput()->withErrors(["error" => "帳號或密碼錯誤"]);
            exit;
        }else{
            session()->put("manager", $account);
            //若果登入成功,則將頁面導到前台首頁
            return redirect("/admin/home");
        }
    }

}