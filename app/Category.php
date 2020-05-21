<?php

namespace App;
// using Illuminate
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //table name
    public $table = "categories";
    
    //relation to category
    public function products()
    {
        return $this->hasMany('App\Product');
    }
}
