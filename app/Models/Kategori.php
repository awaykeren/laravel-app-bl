<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table="kategori";
    protected $primaryKey = "id";
    public $timestamps = true;

    public function post()
    {
        return $this->hasMany('App\Models\Posting');
    }
}   
