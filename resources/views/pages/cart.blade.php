@extends('layouts.frontend')

@section('content')
    <div class="container">
        <div class="cart-content d-flex flex-nowrap"  style="padding: 20px 0">
            <div class="cart-items-block" style="width: 50%">
                <div id="cart-item-list">
                    <div class="item">
                        <h2 class="">Брюки зауженные со стрелками</h2>
                        <div class="image">
                            <a href="">
                                <img src="{{ asset('img/7e305d15065923a6fbec1d0dcf8f2369.jpg') }}"
                                     style="width: 50%">
                            </a>
                        </div>
                        <div class="item_properties" style="padding-top: 15px">
                            <div class="view values">
                                <div class="val">
                                    <input type="hidden" name="QUANTITY" value="1.00" size="3">
                                    <b>Количество:</b>
                                    1
                                </div>
                                <div class="val">
                                    <b>Цвет:</b>
                                    темно-синий + темно-серый клетка
                                </div>

                                <div class="val">
                                    <b>Размер:</b>
                                    46/182 (S)
                                </div>

                                <div class="val">
                                    <b>Артикул:</b>
                                    2L210280M/49425N/7925C
                                </div>
                                <div class="item-price-block">
                                    <p class="price text-danger">2 499 <span class="rub">P</span></p>
                                </div>
                            </div>

                            <div class="buttons" style="padding: 10px 0">
                                <a class="save text-dark btn bg-success" href="">Сохранить</a>
                                <a class="change text-dark btn bg-primary" href="">Изменить</a>
                                <a class="remove text-dark btn bg-danger" href="" data-id="11263517">Удалить</a>
                                <div class="button-popup">
                                    <span class="error-button error_1"
                                          style="display: none;">Нет других предложений</span>
                                    <div class="tail"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div id="cart-item-list">
                    <div class="item">
                        <h2 class="">Брюки зауженные со стрелками</h2>
                        <div class="image">
                            <a href="">
                                <img src="{{ asset('img/7e305d15065923a6fbec1d0dcf8f2369.jpg') }}"
                                     style="width: 50%">
                            </a>
                        </div>
                        <div class="item_properties" style="padding-top: 15px">
                            <div class="view values">
                                <div class="val">
                                    <input type="hidden" name="QUANTITY" value="1.00" size="3">
                                    <b>Количество:</b>
                                    1
                                </div>
                                <div class="val">
                                    <b>Цвет:</b>
                                    темно-синий + темно-серый клетка
                                </div>

                                <div class="val">
                                    <b>Размер:</b>
                                    46/182 (S)
                                </div>

                                <div class="val">
                                    <b>Артикул:</b>
                                    2L210280M/49425N/7925C
                                </div>
                                <div class="item-price-block">
                                    <p class="price text-danger">2 499 <span class="rub">P</span></p>
                                </div>
                            </div>

                            <div class="buttons" style="padding: 10px 0">
                                <a class="save text-dark btn bg-success" href="">Сохранить</a>
                                <a class="change text-dark btn bg-primary" href="">Изменить</a>
                                <a class="remove text-dark btn bg-danger" href="" data-id="11263517">Удалить</a>
                                <div class="button-popup">
                                    <span class="error-button error_1"
                                          style="display: none;">Нет других предложений</span>
                                    <div class="tail"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cart-content" style="width: 50%">
                <div class="title">
                    <h2>Состав заказа</h2>
                </div>
                <div class="total" style="padding: 10px 0">
                    <table>
                        <tbody>
                        <tr>
                            <td><b>Количество:</b></td>
                            <td class="tar" id="QUANTITY">2</td>
                        </tr>
                        <tr>
                            <td><b>Стоимость заказа:</b></td>
                            <td class="tar PRICE">
                                <span id="total-sum" class="text-danger">2 898 </span><span class="rub">P</span>
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

                        <p class="price">2 898 <span class="rub">a</span></p>
                    </div>
                    <a id="checkout" href="" class="btn bg-warning button-pad-fix mar-bot-fix">ОФОРМИТЬ ЗАКАЗ</a>
                    <!-- <a href="javascript:void(0)" class="fastorder button grey button-pad-fix2">БЫСТРЫЙ ЗАКАЗ</a> -->
                </div>
            </div>
        </div>
    </div>

@endsection