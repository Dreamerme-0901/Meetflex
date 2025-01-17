<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class UserdataModel extends Model
{
    public $timestamps=false;
    protected $table="user";
    protected $primaryKey="id";
    protected $fillable=[
        "id","email","account","password","country","state","createTime"
    ];

    public function getUser($email, $password){
        $user = self::where("email", $email)->where("password", $password)->first();
        return $user;
    }

    public function checkUser($email){
        $user = self::where("email", $email)->first();
        return $user;
    }

    public function hasUser($email, $oldEmail)
    {
        $user =self::where("email", $email)->where("account", "<>",$oldEmail)->first();
        return $user;
}
}