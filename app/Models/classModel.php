<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class classModel extends Model
{
    public $timestamps=false;
    protected $table="classification";
    protected $primaryKey="id";
    protected $fillable=[
        "id",
        "nu",
        "genres"
    ];

    public function checkMovie($movieId){
        $movie = self::where("id",$movieId)->first();
        return $movie;
    }

    
}