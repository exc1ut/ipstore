<?php

namespace App\Http\Controllers;

use App\Card;
use App\Category;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Console\Input\Input;

class ProductsController extends Controller
{



    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show','search','seller',]]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $products = Product::all();
        return view('index', ['products' => $products]);
    }

    public function search()
    {
        $string = $_GET['string'];

        $products = Product::where('name', 'LIKE', '%' . $string . '%')->get();


        return view('index', ['products' => $products]);
    }

    public function seller($id)
    {
        $user = User::find($id);
        $products = $user->products;

        return view('index',['products'=>$products]);
    }

    

    


    public function buy($id)
    {
    
        return view('payment',['id'=>$id]);
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('create', ['categories' => $categories]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'unique:products', 'max:255'],
            'description' => ['required'],
            'image'=> ['required','mimes:jpeg,jpg,png,gif|required|max:10000']
        ]);

        $product = new Product;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->category_id = $request->category;


        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension(); // getting image extension
        $filename = time() . '.' . $extension;
        $file->move('uploads/images/', $filename);

        $product->image = $filename;
        $product->isValidated = true;
        $product->user_id = Auth::user()->id;
        $product->save();

        return redirect()->to('/');
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        return view('view',['product'=>$product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        
        return redirect()->back();

    }
}
