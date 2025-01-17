<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class UserqaModel extends Model
{
    public $timestamps = false;
    protected $table = "userqa";
    protected $primaryKey = "id";
    protected $fillable = [
        "id",
        "title",
        "content",
        "createTime"
    ];
}