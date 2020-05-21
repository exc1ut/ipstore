<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function view($id)
    {
        

        $category = Category::find($id);
        $categoryName= $category->name;
        $products = $category->products;
        return view('index',['products'=>$products],['categoryName'=>$categoryName]);
    }
}
