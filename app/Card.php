<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    // table name
    public  $table = "card";

    //relation to user
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    //realtion to product
    public function product()
    {
        return $this->belongsTo('App\Product');
    }


}
