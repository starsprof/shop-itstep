@extends('layouts.frontend')

@section('content')
    @php
        /** @var \App\Product $product */
    @endphp
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{url('/')}}">Главная</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="#"></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page"></li>
            </ol>
        </nav>
        <div class="catalog-item d-flex flex-nowrap" style="padding: 50px 0">
            <div class="small-images js-smallImageBlock">
                @foreach($product->gallery as $image)
                    <a href="#" class=""><img src="{{ $image }}"></a>
                @endforeach
            </div>
            <div class="big-image">
                <a href="#">
                    <img src="{{ $product->image }}" class="preview-zoom">
                </a>

                {{--<div class="images-wrap" style="margin-top: 10px">--}}
                {{--@foreach($product->gallery as $image)--}}
                {{--<img src="{{ $image }}" style="width: 25%">--}}
                {{--@endforeach--}}
                {{--</div>--}}
            </div>
            <div class="catalog-item-textblock" style="width: 40%">
                <h1 class="catalog-item-title">{{ $product->title }}</h1>
                <div class="price-wrap">
                    <span>{{ $product->price }} P</span>
                </div>
                <div class="catalog-item-description">
                    <p><b>Модель: </b>{{ $product->code }}</p>

                    <p><b>Состав: </b> {{$product->composition}}</p>

                    <p><b>Линия: </b>{{$product->line}}</p>

                    <p><b>Цвет: </b> <span>{{ $product->color }}</span></p>
                </div>


                <form action="">
                    <div class="catalog-item-block">
                        <p class="text-up">Выберите размер</p>
                        @foreach($product->size as $key => $size)
                            <div class="sizeheight">
                                <input type="radio" name="size" aria-label="Размер" value="{{$key}}"> {{ $size }}
                            </div>
                        @endforeach
                    </div>
                    <div class="catalog-item-block">
                        <p class="text-up">Выберите рост</p>
                        @foreach($product->height as $key => $height)
                            <div class="sizeheight">
                                <input type="radio" name="height" aria-label="Рост" value="{{$key}}"> {{ $height }}
                            </div>
                        @endforeach
                    </div>
                    <input class="btn btn-warning add-to-cart" type="submit" value="В КОРЗИНУ">
                </form>
                <div class="catalog-item-block">
                <p><b>Описание:</b> {{ $product->description }}</p>
                </div>
            </div>

        </div>
    </div>
@endsection
