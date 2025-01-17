<?php

namespace App\Models\Admin;
use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    public $timestamps = false;
    protected $table = "admin";
    protected $primaryKey = "id";
    protected $fillable = [
        "id",
        "account",
        "password",
    ];

    public function getManager($account, $password){
        $manager = self::where("account", $account)->where("password", $password)->first();
        return $manager;
    }

    public function checkManager($account){
        $manager = self::where("account", $account)->first();
        return $manager;
    }

    public function hasManager($account, $oldAccount)
    {
        $manager =self::where("account", $account)->where("account", "<>",$oldAccount)->first();
        return $manager;
    }
}