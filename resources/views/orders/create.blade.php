@extends('layouts.frontend')

@section('content')
    <div class="container">
        <div class="cart-title">
            <h1>ваш заказ</h1>
        </div>
        <div class="cart-content d-flex flex-nowrap" style="padding: 20px 0">
            <div class="cart-items-block">
                @php
                    /** @var \Gloudemans\Shoppingcart\CartItem $cartItem */
                @endphp
                @foreach(Cart::content() as $cartItem)
                    <div class="cart-item-list">
                        <div class="title d-flex flex-nowrap">
                            <h2 class="">{{$cartItem->name}}</h2>
                            <div class="price-wrap">
                                <span>{{$cartItem->price}} P</span>
                            </div>
                        </div>

                        <div class="cart-item d-flex flex-nowrap">

                            <div class="image">
                                <img style="width: 74px; height: auto" src="{{ $cartItem->model->image }}">
                            </div>
                            <div class="item-properties">

                                <div class="view values">
                                    <div class="val">
                                        <b>Количество:</b> {{ $cartItem->qty  }}
                                    </div>

                                    <div class="val">
                                        <b>Размер:</b>
                                        {{ $cartItem->options['size'] }}
                                    </div>

                                    <div class="val">
                                        <b>Артикул:</b>
                                        {{ $cartItem->model->code }}
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>


                @endforeach


                <div class="cart-item-list">
                    <div class="title">
                        <h2>Состав заказа</h2>
                    </div>
                    <div class="total" style="padding: 10px 0">
                        <table>
                            <tbody>
                            <tr>
                                <td><b>Количество:</b></td>
                                <td class="tar" id="QUANTITY">{{ Cart::count() }}</td>
                            </tr>
                            <tr>
                                <td><b>Итого:</b></td>
                                <td class="tar PRICE">
                                    <span id="total-sum" class="text-danger">{{ Cart::total() }} </span><span
                                        class="rub">P</span>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                </div>


            </div>
            <div class="cart-content-right">
                <div class="address">
                    <form action="{{ route('payment') }}" method="post">
                        @csrf
                        <label for="address">Адрес:</label>
                        <br>
                        <textarea name="address" id="address" cols="60" rows="5"></textarea>
                        <br>
                        <p style="margin-top: 20px"><b>Способ оплаты:</b></p>
                        <input type="radio" name="payment[]" id="type1"> <label for="type1">Способ оплаты 1</label>
                        <br>
                        <input type="radio" name="payment[]" id="type2"> <label for="type2">Способ оплаты 2</label>
                        <br>
                        <input type="radio" name="payment[]" id="type3"> <label for="type3">Способ оплаты 3</label>
                        <br>
                        <input type="radio" name="payment[]" id="type4"> <label for="type4">Способ оплаты4</label>
                        <br>
                        <input type="submit" class="bnt bg-warning" value="Оплатить">
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
