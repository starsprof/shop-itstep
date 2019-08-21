@extends('admin.layouts.app_admin')

@section('content')

    <div class="container">

        @component('admin.components.breadcrumb')
            @slot('title') Список продуктов @endslot
            @slot('parent') Главная @endslot
            @slot('active') Продукты @endslot
        @endcomponent

        {{--@if ($errors->any())--}}
            {{--<div class="alert alert-danger">--}}
                {{--<strong>Whoops!</strong> There were some problems with your input.<br><br>--}}
                {{--<ul>--}}
                    {{--@foreach ($errors->all() as $error)--}}
                        {{--<li>{{ $error }}</li>--}}
                    {{--@endforeach--}}
                {{--</ul>--}}
            {{--</div>--}}
        {{--@endif--}}


            {{--@php--}}
               {{--var_dump($product) ;--}}
            {{--@endphp--}}



        <form class="" action="{{route('products.store')}}" method="POST">
            @csrf

            @include('admin.products.partials.form')

        </form>





    </div>
@endsection