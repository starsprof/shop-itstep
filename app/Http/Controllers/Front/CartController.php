<?php

namespace App\Http\Controllers\Front;


use App\Http\Controllers\Controller;
use App\Product;
use Auth;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        Cart::restore(Auth::id());
//        Cart::destroy();
//        dd(Cart::content());
        return view('pages.cart');
    }
    public function addItem(Request $request, $id)
    {

        $size = $request->input('size');

        $product = Product::findOrFail($id);
        if(!$size){
            $size = $product->size[0];
        }
        Cart::add($product, 1, ['size' => $size]);
        return redirect()->route('cart');
    }

    public function addItemAjax(Request $request)
    {
        $id = $request->all('id')['id'];
        $product = Product::findOrFail($id);
        $size = $product->size[0];
        Cart::add($product, 1, ['size' => $size]);
        $data = Cart::content()->map(function ($cartItem){
            return [$cartItem->name, $cartItem->price, $cartItem->qty];
        });
        return response()->json(['content'=> $data, 'count' => Cart::count()]);
    }

    public function removeItem($rowId)
    {
        Cart::remove($rowId);
        return redirect()->route('cart');
    }

    public function removeItemAjax(Request $request)
    {
        $rowId = $request->all('rowId')['rowId'];
        Cart::remove($rowId);
        $data = Cart::content()->map(function ($cartItem){
            return [$cartItem->name, $cartItem->price, $cartItem->qty];
        });
        return response()->json([
            'success'=> true,
            'content' => $data,
            'count' => Cart::count(),
            'price' => Cart::total()
        ]);

    }

    public function updateItem(Request $request, $rowId)
    {
        $quantity = $request->input('quantity');
        $size = $request->input('size');

        $cartItem = Cart::get($rowId);
        Cart::remove($rowId);
        $product = Product::findOrFail($cartItem->id);
        Cart::add($product, $quantity,  ['size' => $size]);
        Cart::store(Auth::id());
        return redirect()->route('cart');

    }
}
