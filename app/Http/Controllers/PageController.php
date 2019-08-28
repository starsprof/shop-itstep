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
use Illuminate\Http\Request;

class PageController
{
    public function index()
    {

        $products = Product::paginate(16);
        return view('pages.collection', compact('products'));


    }

    public function detail(Request $request)
    {
        $product_id = $request->all('id');
        $product = Product::find($product_id)->first();
        return view('pages.detail', compact('product'));
    }

    public function category(Request $request)
    {
        $categoryId = (int)$request->all()['id'];

        $categoriesIds = Category::find($categoryId)->children()->pluck('id');
        $categoriesIds[] = $categoryId;
        $products = Product::whereIn('category_id', $categoriesIds)->paginate(16);
        $parentCategoryId = Category::findOrFail($categoryId)->parent_id;
        $sizes = [];
        foreach ($products->pluck('size')->toArray() as $array ){
            foreach ($array as $elem){
                $sizes[] = $elem;
            }
        }
        $sizes = array_unique($sizes);

        if(isset($request->all()['size'])){
            $inputSizes = $request->all()['size'];
            var_dump($inputSizes);
        }

        return view('pages.collection', compact('products', 'parentCategoryId', 'categoryId', 'sizes'));
    }


}
