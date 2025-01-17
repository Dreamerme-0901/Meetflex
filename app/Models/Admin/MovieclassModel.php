<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class MovieclassModel extends Model
{
    public $timestamps = false;
    protected $table = "classification";
    protected $primaryKey = "id";
    protected $fillable = [
        "id","nu","genres"];
}