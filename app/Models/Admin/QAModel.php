<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class QAModel extends Model
{
    public $timestamps = false;
    protected $table = "qa";
    protected $primaryKey = "id";
    protected $fillable = [
        "id",
        "title",
        "content",
        "createTime"
    ];
}