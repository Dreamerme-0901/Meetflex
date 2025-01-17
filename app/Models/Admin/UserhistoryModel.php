<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class UserhistoryModel extends Model
{
    public $timestamps=false;
    protected $table="history";
    protected $primaryKey="id";
    protected $fillable=[
        "id","user_id","movie_id"
    ];

    public function user(){
        return $this->belongsTo('App\Models\Admin\UserdataModel');
    }

    public function movie(){
        return $this->belongsTo('App\Models\Admin\moviedataModel');
    }
}