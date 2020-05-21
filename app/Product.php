<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //table name
    public $table = "products";



    //realtion cateogry
    
    public function category()
    {
        return $this->belongsTo('App\Category');
    }


    //ralation user

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
