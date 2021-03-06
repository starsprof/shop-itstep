@extends('layouts.frontend')

@section('content')

    <div class="container">
        @php
            /** @var \App\Category[] $category */
        @endphp
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{url('/')}}">Главная</a>
                </li>
                @isset($category->parent)
                    <li class="breadcrumb-item">
                        <a href="{{ route('category', ['id' => $category->parent_id]) }}">{{ $category->parent->title }}</a>
                    </li>
                @endisset
                <li class="breadcrumb-item active" aria-current="page">
                    {{ $category->title }}
                </li>
            </ol>
        </nav>

        <div class="catalog-wrap d-flex flex-nowrap">
            <div class="left-sidebar" style="width: 20%">
                <div class="filter-section">
                    <h2 class="filter-section-title">Группа</h2>
                    <div class="filter-section-inner">
                        <ul>
                            @include('pages.filter.categories', ['parentCategoryId' => $parentCategoryId])
                        </ul>
                    </div>
                </div>
                <div class="filter-section">
                    <h2 class="filter-section-title">Размер</h2>
                    <div class="filter-section-inner">
                        <ul>
                            @include('pages.filter.sizes', ['sizes' => $sizes, 'categoryId' => $categoryId])
                        </ul>
                    </div>
                </div>

                <div class="filter-section">
                    <h2 class="filter-section-title">Цвет</h2>
                    <div class="filter-section-inner">
                        {{--<ul class="color-row">--}}
                        <ul>
                            <li>
                                <input type="checkbox" name="" value="">
                                <label>зеленый</label>
                            </li>
                            <li>
                                <input type="checkbox" name="" value="">
                                <label>белый</label>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="filter-section">
                    <h2 class="filter-section-title">Новинки/Акции</h2>
                    <div class="filter-section-inner">
                        <ul>
                            <li>
                                <input type="checkbox" name="" value="">
                                <label>Новинки</label>
                            </li>
                            <li>
                                <input type="checkbox" name="" value="">
                                <label>Акции</label>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="catalog d-flex flex-wrap" style="width: 80%">


                @php
                    /** @var \App\Product[] $products */
                @endphp
                @foreach($products as $product)
                    <div class="product-card">
                        <div class="product-wrap">
                            <div class="product-image">
                                <a href="#">
                                    <img class="pic-1" src="{{$product->image}}" alt="">
                                    @if(isset($product->gallery[0]))
                                        <img alt="" class="pic-2" src="{{$product->gallery[0]}}">
                                    @endif
                                </a>
                                <ul class="social">
                                    <li><a href="#" data-tip="Quick View"><i class="fas fa-eye"></i></a></li>
                                    <li><a href="#" data-tip="Add to Wishlist"><i
                                                    class="fas fa-shopping-bag"></i></a></li>
                                    <li>
                                        <a class="add-cart" data-id="{{ $product->id }}"
                                           href="{{ route('cart-add', ['id' => $product->id]) }}"
                                           data-tip="Add to Cart">
                                            <i class="fas fa-shopping-cart"></i></a>
                                    </li>
                                </ul>
                                {{--<span class="product-new-label">New</span>--}}
                                {{--<span class="product-discount-label">-10%</span>--}}
                            </div>
                            <div class="product-content">
                                <h3 class="title">{{$product->title}}</h3>
                                <div class="price">{{$product->price}}
                                    <span>{{$product->price}}</span>
                                </div>
                                <a class="add-to-cart"
                                   href="{{ route('detail', ['id' => $product->id]) }}">Подробнее</a>
                            </div>
                        </div>
                    </div>

                @endforeach

            </div>
        </div>
        {{ $products->links() }}
    </div>
@endsection
@push('scripts')
    <script src="{{asset('js/category.js')}}"></script>
@endpush
