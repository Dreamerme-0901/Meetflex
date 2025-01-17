<?php

namespace App\Models\Front;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class classList extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "movie";
    protected $primaryKey = "id";
    protected $fillable = [
        "id",
        "image",
        "release_date",
        "title",
        "description",
        "genres"
    ];

    public function checkMovie($movieId){
        $movie = self::where("id",$movieId)->first();
        return $movie;
    }
}