<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
//        $products = json_decode(Storage::disk()->get('products.json'),true);
//        $categories = Category::all();
//        //echo Storage::url('product_images/0a1d05a5-7b16-4c19-b3cb-15d9e28c36f7.jpg');
//        $image = 'images/359f81c9-1714-4f0c-bb25-74a12ff2cc0b.jpg';
//        $tmp = explode('/', $image);
//        echo array_pop($tmp);
//
//        return;
        return view('home');
    }
}
