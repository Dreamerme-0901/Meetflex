<?php

namespace App\Models\Front;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userLike extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "userlike";
    protected $primaryKey = "id";
    protected $fillable = [
        "id",
        "user_id",
        "movie_id",
        "createTime"
    ];
}
