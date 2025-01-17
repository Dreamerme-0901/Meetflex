<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Admin\UserdataModel;
use Illuminate\Http\Request;

class login extends Controller
{
    public function login(){
        return view("front.login");
    }

    public function register(){
        return view("front.register");
    }

    public function doLogin(Request $req)
    {
        $email=$req->email;
        $password=$req->password;
        $user = (new UserdataModel())->getUser($email, $password);
        
        if (empty($user))
        {
            return back()->withInput()->withErrors(["error" => "帳號或密碼錯誤"]);
            exit;
        }else{
            session()->put("user", $user->id);
            //若果登入成功,則將頁面導到前台首頁
            return redirect("/");
        }
    }
}