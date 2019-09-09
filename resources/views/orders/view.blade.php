@extends('layouts.frontend')

@section('content')
    <div class="container">
        <div class="cart-title">
            <h1>заказ  {{ $order->created_at }} - {{ $order->status }}</h1>
        </div>
        <div>
            @php
                /** @var \App\Order $order */
            @endphp
                <div class="order">
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
                </div>
        </div>
    </div>

@endsection
