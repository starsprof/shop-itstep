@extends('layouts.frontend')

@section('content')
    <div class="container">

        @component('components.breadcrumb')

            @slot('parent') Главная @endslot
            @slot('active') Женская коллекция @endslot
        @endcomponent
        <div class="catalog-wrap d-flex flex-nowrap">
            <div class="left-sidebar" style="width: 20%">
                <div class="list-group group-category list-group-flush">
                    <h2>Группа</h2>
                    @include('pages.filter.categories', ['parentCategoryId' => $parentCategoryId])
                </div>
                <div class="list-group group-category list-group-flush">
                    <h2>Размер</h2>
                    @include('pages.filter.sizes', ['sizes' => $sizes, 'categoryId' => $categoryId])
                </div>
                <div class="list-group group-color list-group-flush">
                    <h2>Цвет</h2>
                    <a href="#" class="list-group-item active">
                        Белый
                    </a>
                    <a href="#" class="list-group-item">Желтый</a>
                    <a href="#" class="list-group-item">Красный</a>
                    <a href="#" class="list-group-item">Зеленый</a>

                </div>
            </div>
            <div class="catalog d-flex flex-wrap" style="width: 80%">

                @php
                /** @var \App\Product[] $products */
                @endphp
                @foreach($products as $product)

                    <div class="card" style="width: 18rem;">
                        <img src="{{$product->image}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$product->title}}</h5>
                            <p class="card-text">{{$product->price}}</p>
                            <a href="{{ route('detail', ['id' => $product->id]) }}" class="btn btn-primary">Подробнее</a>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
        {{ $products->links() }}
    </div>
@endsection
