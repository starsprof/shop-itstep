<?php

namespace App\Http\Controllers\Front;


use App\Http\Controllers\Controller;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        //return view('pages.cart');

        return Cart::content();

    }
    public function addItem()
    {


        return Product::all();

    }
}
