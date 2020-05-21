<?php

namespace App\Http\Controllers;

use App\Card;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CardsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function add($id)
    {
        $user = Auth::id();
        $card = new Card();
        $card->user_id = $user;
        $card->product_id = $id;
        $card->save();
        
        return redirect()->back();
    }

    public function index()
    {
        $cards = Card::where('user_id',Auth::id())->get();
        return view('card',compact('cards'));
    }

    public function delete($id)
    {
        $card = Card::find($id);
        $card->delete();
        
        return redirect()->back();
    }
    public function checkout()
    {
        
        // send to email
        return view('checkout')->with('success');
    }
}
