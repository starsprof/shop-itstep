@extends('layouts.frontend')

@section('content')
    @php
        /** @var \App\Product $product */
    @endphp
    <div class="container">
        <div class="catalog-item d-flex flex-nowrap" style="padding: 50px 0">

            <div class="catalog-item-image" style="width: 40%">
                <div class="img-wrap">
                    <img src="{{ $product->image }}">
                </div>
                <div class="images-wrap" style="margin-top: 10px">
                    @foreach($product->gallery as $image)
                        <img src="{{ $image }}" style="width: 25%">
                    @endforeach
                </div>
            </div>
            <div class="catalog-item-description" style="width: 60%; padding-left: 50px">
                <h2>{{ $product->title }}</h2>
                <br>

                <p class="PropArticle" data-color="2301M">
                    <b>Модель:</b>{{ $product->code }}</p>
                <p><b>Состав:</b> {{$product->composition}}</p>

                <p><b>Линия:</b>
                    {{$product->line}}
                </p>

                <p><b>Цвет:</b> <span id="CurColor">{{ $product->color }}</span></p>

                <p><b>Цена:</b> <span id="CurColor">{{ $product->price }}</span></p>

                <form action="">
                    <p><b>Размер:</b></p>
                    @foreach($product->size as $key => $size)
                        <div class="d-flex">
                            <input type="radio" name="size" aria-label="Размер" value="{{$key}}"> {{ $size }}
                        </div>
                    @endforeach
                    <p><b>Рост:</b></p>
                    @foreach($product->height as $key => $height)
                        <div class="d-flex">
                            <input type="radio" name="height" aria-label="Рост" value="{{$key}}"> {{ $height }}
                        </div>
                    @endforeach
                    <input class="btn text-dark bg-danger" type="submit" value="В КОРЗИНУ">
                </form>

                <p><b>Описание:</b> <span id="CurColor"> {{ $product->description }}</span></p>

            </div>

        </div>
    </div>
@endsection
