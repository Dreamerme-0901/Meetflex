<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\loginController;
use App\Http\Controllers\Admin\ManagerController;
use App\Http\Controllers\Admin\MovieclassController;
use App\Http\Controllers\Admin\MoviedataController;
use App\Http\Controllers\Admin\QAController;
use App\Http\Controllers\Admin\UserdataController;
use App\Http\Controllers\Admin\UserhistoryController;
use App\Http\Controllers\Admin\UserlikeController;
use App\Http\Controllers\Admin\UserqaController;

use App\Http\Controllers\Front\Classadd;
use App\Http\Controllers\Front\CompanyPage;
use App\Http\Controllers\Front\FAQController;
use App\Http\Controllers\Front\login;
use App\Http\Controllers\Front\MeetFlex;
use App\Http\Controllers\Front\NewsController;
use App\Http\Controllers\Front\playlist;
use App\Http\Controllers\Front\user;

use Illuminate\Support\Facades\Route;

Route::get('/',[MeetFlex::class, ('homePage')]);

Route::group(["prefix"=>"front"],function(){
    Route::get('/login',[login::class,('login')]);
    Route::post('/doLogin',[login::class,('doLogin')]);
    Route::get('/register',[login::class,('register')]);
    Route::get('/CompanyPage',[CompanyPage::class,('CompanyPage')]);
    Route::get('/News',[NewsController::class,('News')]);
    Route::get('/FAQ',[FAQController::class,('FAQ')]);
    Route::get('/user',[user::class,('user')]);
    Route::get('/playlist',[playlist::class,('playlist')]);
    Route::get('/Class',[Classadd::class,('Classadd')]);
    Route::get('/Class/{id}', [Classadd::class, ('Classadd')]);
    /*----------------------------新增位置---------------------------------*/
    Route::post('insert/{id}', [MeetFlex::class, "insert"]);
    Route::post('delete/{id}', [MeetFlex::class, "delete"]);

    /*----------------------------2025/01/15新增位置---------------------------------*/
    Route::post('insert/{id}', [Classadd::class, "insert"]);
    Route::post('delete/{id}', [Classadd::class, "delete"]);
    
});

/*----------------------------2025/01/15---------------------------------*/
Route::group(["prefix" => "front/user"],function(){
    Route::get('add/{id}', [user::class, "add"]);
    Route::get('edit/{id}', [user::class, "edit"]);
});



/*------------------------------後台路由---------------------------------*/
Route::group(["prefix" => "admin"], function(){
    Route::get('login',[AdminController::class,"login"]);
    Route::get('home', [AdminController::class,"home"]);
    Route::post('doLogin',[AdminController::class,"doLogin"]);
    Route::get('logout', [AdminController::class,"logout"]);
});

Route::group(["prefix" => "admin/manager"], function(){
    Route::get('list', [ManagerController::class, "list"]);
    Route::get('add', [ManagerController::class, "add"]);
    Route::post('checkManager', [ManagerController::class, "checkManager"]);
    Route::post('insert', [ManagerController::class, "insert"]);
    Route::get('edit/{id}', [ManagerController::class, "edit"]);
    Route::post('update', [ManagerController::class, "update"]);
    Route::post('delete', [ManagerController::class, "delete"]);
    Route::post('hasManager', [ManagerController::class, "hasManager"]);
});

Route::group(["prefix" => "admin/moviedata"], function(){
    Route::get('list', [MoviedataController::class, "list"]);
    Route::get('add', [MoviedataController::class, "add"]);
    Route::post('insert', [MoviedataController::class, "insert"]);
    Route::get('edit/{id}', [MoviedataController::class, "edit"]);
    Route::post('update', [MoviedataController::class, "update"]);
    Route::post('delete', [MoviedataController::class, "delete"]);
});

Route::group(["prefix" => "admin/movieclass"], function(){
    Route::get('list', [MovieclassController::class, "list"]);
    Route::get('add', [MovieclassController::class, "add"]);
    Route::post('insert', [MovieclassController::class, "insert"]);
    Route::get('edit/{id}', [MovieclassController::class, "edit"]);
    Route::post('update', [MovieclassController::class, "update"]);
    Route::post('delete', [MovieclassController::class, "delete"]);
});

Route::group(["prefix" => "admin/qa"], function(){
    Route::get('list', [QAController::class, "list"]);
    Route::get('add', [QAController::class, "add"]);
    Route::post('insert', [QAController::class, "insert"]);
    Route::get('edit/{id}', [QAController::class, "edit"]);
    Route::post('update', [QAController::class, "update"]);
    Route::post('delete', [QAController::class, "delete"]);
});

Route::group(["prefix" => "admin/userdata"], function(){
    Route::get('list', [UserdataController::class, "list"]);
    Route::get('add', [UserdataController::class, "add"]);
    Route::post('insert', [UserdataController::class, "insert"]);
    Route::get('edit/{id}', [UserdataController::class, "edit"]);
    Route::post('update', [UserdataController::class, "update"]);
    Route::post('delete', [UserdataController::class, "delete"]);
});

Route::group(["prefix" => "admin/userhistory"], function(){
    Route::get('list', [UserhistoryController::class, "list"]);
    Route::get('add', [UserhistoryController::class, "add"]);
    Route::post('insert', [UserhistoryController::class, "insert"]);
    Route::get('edit/{id}', [UserhistoryController::class, "edit"]);
    Route::post('update', [UserhistoryController::class, "update"]);
    Route::post('delete', [UserhistoryController::class, "delete"]);
});

Route::group(["prefix" => "admin/userlike"], function(){
    Route::get('list', [UserlikeController::class, "list"]);
    Route::get('add', [UserlikeController::class, "add"]);
    Route::post('insert', [UserlikeController::class, "insert"]);
    Route::get('edit/{id}', [UserlikeController::class, "edit"]);
    Route::post('update', [UserlikeController::class, "update"]);
    Route::post('delete', [UserlikeController::class, "delete"]);
});

Route::group(["prefix" => "admin/userqa"], function(){
    Route::get('list', [UserqaController::class, "list"]);
    Route::get('add', [UserqaController::class, "add"]);
    Route::post('insert', [UserqaController::class, "insert"]);
    Route::get('edit/{id}', [UserqaController::class, "edit"]);
    Route::post('update', [UserqaController::class, "update"]);
    Route::post('delete', [UserqaController::class, "delete"]);
});