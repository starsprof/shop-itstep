<?php


namespace App\Http\Controllers\Front;


use App\Http\Controllers\Controller;
use App\Order;
use App\User;
use Auth;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function index()
    {
        $orders = Auth::getUser()->orders()->get();
//        dd($orders[0]->products);
        return view('orders.index', compact('orders'));
    }

    public function view(int $id)
    {
        $order = Order::findOrFail($id);
        if($order->user_id != Auth::id()){
            abort(404);
        }
        return view('orders.view', compact('order'));
    }

    public function create()
    {
        return view('orders.create');
    }

    public function store(Request $request)
    {
        $id = $request->all('order_id')['order_id'];
        $order = Order::findOrFail($id);
        $order->status = Order::PAYMENT;
        $order->save();
        return redirect(action('Front\OrderController@index'));
    }

    public function payment(Request $request)
    {

        $order = new Order();
        $order->user_id = Auth::id();
        $order->address = $request->input('address');
        $order->products = \Cart::content()->map(function ($cartItem) {
            return $cartItem->model;
        })->toArray();
        $order->status = Order::WAIT;
        $order->save();
        \Cart::destroy();
        return view('orders.payment', ['id' => $order->id]);

    }

}
