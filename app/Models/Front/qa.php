<?php

namespace App\Models\Front;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class qa extends Model
{
    use HasFactory;
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