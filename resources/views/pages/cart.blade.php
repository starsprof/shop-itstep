@extends('layouts.frontend')

@section('content')
    <div class="container">
        <div class="cart-title">
            <h1>ваша корзина</h1>
        </div>
        <div class="cart-content d-flex flex-nowrap"  style="padding: 20px 0">
            <div class="cart-items-block">
                <div class="cart-item-list">
                    <div class="title d-flex flex-nowrap">
                        <h2 class="">Брюки зауженные со стрелками</h2>
                        <div class="price-wrap">
                            <span>1111 P</span>
                        </div>
                    </div>

                    <div class="cart-item d-flex flex-nowrap">

                        <div class="image" >
                            <a href="#">
                                <img src="{{ asset('img/Без названия.jpg') }}">
                            </a>
                        </div>
                        <div class="item-properties">

                            <div class="view values">
                                <div class="val">
                                    <input type="hidden" name="QUANTITY" value="1.00" size="3">
                                    <b>Количество:</b>1
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

                            </div>

                            <div class="buttons" style="padding: 10px 0">
                                <a class="save text-dark" style="display: none" href="#">Сохранить</a>
                                <a class="change text-dark" href="#">Изменить</a>
                                <a class="remove text-dark" href="#" >Удалить</a>
                                <div class="button-popup">
                                    <span class="error-button error_1"
                                          style="display: none;">Нет других предложений</span>
                                    <div class="tail"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cart-item-list">
                    <div class="title d-flex flex-nowrap">
                        <h2 class="">Брюки зауженные со стрелками</h2>
                        <div class="price-wrap">
                            <span>1111 P</span>
                        </div>
                    </div>

                    <div class="cart-item d-flex flex-nowrap">

                        <div class="image" >
                            <a href="#">
                                <img src="{{ asset('img/Без названия.jpg') }}">
                            </a>
                        </div>
                        <div class="item-properties">

                            <div class="view values" style="display: none">
                                <div class="val">
                                    <input type="hidden" name="QUANTITY" value="1.00" size="3">
                                    <b>Количество:</b>1
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

                            </div>

                            <div class="variations values" style="display: block;">
                                <div id="variation_quantity">
                                    <div class="val"><label>Количество:</label><select name="QUANTITY" id="variations-quantity">
                                            <option value="1" selected="selected">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select></div>
                                </div>
                                <div id="variation_color">
                                    <div class="val"><label>Цвет:</label>
                                        <select id="color" name="COLOR">

                                            <option selected="selected" value="7925C">темно-синий + темно-серый клетка</option>

                                        </select>
                                    </div>
                                </div>
                                <div id="variation_size">
                                    <div class="val"><label>Размер:</label><select id="size" name="SIZE">

                                            <option value="46/182" selected="selected">46/182</option>

                                            <option value="48/182">48/182</option>

                                            <option value="50/182">50/182</option>

                                            <option value="52/182">52/182</option>

                                            <option value="54/182">54/182</option>

                                            <option value="56/182">56/182</option>

                                        </select></div>

                                </div>
                                <div id="variation_article">
                                    <div class="val"><label>Артикул:</label>
                                        2L210280M/49425N/7925C
                                    </div>
                                </div>
                            </div>

                            <div class="buttons" style="padding: 10px 0">
                                <a class="save text-dark" href="#">Сохранить</a>
                                <a class="change text-dark" style="display: none" href="#">Изменить</a>
                                <a class="remove text-dark" href="#" >Удалить</a>
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
            <div class="cart-content-right">
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
                    <a id="checkout" href="" class="button bg-warning yellow">ОФОРМИТЬ ЗАКАЗ</a>
                    <!-- <a href="javascript:void(0)" class="fastorder button grey button-pad-fix2">БЫСТРЫЙ ЗАКАЗ</a> -->
                </div>
            </div>
        </div>
    </div>

@endsection