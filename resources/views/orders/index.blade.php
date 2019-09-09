@extends('layouts.frontend')

@section('content')
    <div class="container">
        <div class="cart-title">
            <h1>История заказов</h1>
        </div>
        <div>
            @php
            /** @var \App\Order[] $orders */
            @endphp
            @foreach($orders as $order)
                <div class="order">
                    <h4 class="title">
                        {{ $order->created_at }} - {{ $order->status }}
                    </h4>
                    <div class="add-info">
                        Count: {{ count($order->products) }}
                        <br>
                        Price: {{ array_sum(array_map(function ($product){
                        return $product['price'];
                        }, $order->products)) }}
                        <br>
                        Address: {{$order->address}}
                        <br>
                    </div>
                    <a href="{{ action('Front\OrderController@view', ['id' => $order->id]) }}">Details</a>
                </div>
            @endforeach
        </div>
    </div>

@endsection
