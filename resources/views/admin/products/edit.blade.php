@extends('admin.layouts.app_admin')


@section('content')

    <div class="container">

        @component('admin.components.breadcrumb')
            @slot('title') Редактировать продукт @endslot
            @slot('parent') Главная @endslot
            @slot('active') Продукты @endslot
        @endcomponent

        <form class="" action="{{route('products.update', $product)}}" method="POST">

            @csrf
            @method('PUT')

            @include('admin.categories.partials.form')

        </form>





    </div>
@endsection