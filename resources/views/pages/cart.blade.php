@extends('layouts.frontend')

@section('content')
    <div class="container">
        <div class="cart-title">
            <h1>ваша корзина</h1>
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

                                <div class="variations values" style="display: block;">
                                    <form action="{{ route('cart-update', ['rowId' => $cartItem->rowId]) }}">
                                        <div id="variation_quantity">
                                            <div class="val"><label>Количество:</label>
                                                <select name="quantity" id="variations-quantity">
                                                    @for($i = 1; $i<= 5; $i++)
                                                        <option
                                                            value="{{$i}}" {{ $i== $cartItem->qty ? 'selected="selected"' : '' }} >
                                                            {{$i}}
                                                        </option>
                                                    @endfor

                                                </select>
                                            </div>
                                        </div>

                                        <div id="variation_size">
                                            <div class="val"><label>Размер:</label>
                                                <select id="size" name="size">
                                                    @foreach($cartItem->model->size as $size)
                                                        <option
                                                            value="{{$size}}" {{ $size == $cartItem->options['size'] ?  'selected="selected"' : '' }}>
                                                            {{$size}}
                                                        </option>
                                                    @endforeach

                                                </select>
                                            </div>

                                        </div>
                                        <div id="variation_article">
                                            <div class="val"><label>Артикул:</label>
                                                2L210280M/49425N/7925C
                                            </div>
                                        </div>
                                        <input type="submit" value="Сохранить">
                                    </form>
                                </div>


                                <div class="buttons" style="padding: 10px 0">

                                    <a class="change text-dark" href="#">Изменить</a>
                                    <a class="remove text-dark" href="{{ route('cart-remove', $cartItem->rowId) }}">Удалить</a>
                                    <div class="button-popup">
                                    <span class="error-button error_1"
                                          style="display: none;">Нет других предложений</span>
                                        <div class="tail"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                @endforeach
            </div>
            <div class="cart-content-right">
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
                            <td><b>Стоимость заказа:</b></td>
                            <td class="tar PRICE">
                                <span id="total-sum" class="text-danger">{{ Cart::total() }} </span><span
                                    class="rub">P</span>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="buttons">
                    <div class="cart-promocode">
                        <div class="promocode-form">
                            <label class="promocode-label"><b>Промокод:</b></label>
                            <input id="promocode_input" type="text" value="" placeholder="Введите код">
                            <input type="button" class="promo-button button grey" value="Применить">
                        </div>

                        <div class="promocode-error-msg"></div>

                    </div>
                    <div class="block-price-amount">
                        <ins>итого:</ins>

                        <p class="price">{{ Cart::total() }} <span class="rub">Р</span></p>
                    </div>
                    <a id="checkout" href="" class="button bg-warning yellow">ОФОРМИТЬ ЗАКАЗ</a>
                    <!-- <a href="javascript:void(0)" class="fastorder button grey button-pad-fix2">БЫСТРЫЙ ЗАКАЗ</a> -->
                </div>
            </div>
        </div>
    </div>

@endsection
