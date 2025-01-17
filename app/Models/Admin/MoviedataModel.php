<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class MoviedataModel extends Model
{
    public $timestamps = false;
    protected $table = "movie";
    protected $primaryKey = "id";
    protected $fillable = [
        "id","title","image","description","genres","release_date"];
}