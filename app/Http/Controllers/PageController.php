<?php
/**
 * Created by PhpStorm.
 * User: НАТАША
 * Date: 27.08.2019
 * Time: 14:20
 */

namespace App\Http\Controllers;


use App\Category;
use App\Product;

class PageController
{
    public function index()
    {

        $products = Product::paginate(16);
        return view('pages.collection', compact('products'));


    }


}