<?php

namespace App\Models\Front;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "news";
    protected $primaryKey = "id";
    protected $fillable = [
        "id",
        "title",
        "content",
        "image",
        "createTime"
    ];


}