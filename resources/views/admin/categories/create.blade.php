@extends('admin.layouts.app_admin')

@section('content')

    <div class="container">

        @component('admin.components.breadcrumb')
            @slot('title') Список категорий @endslot
            @slot('parent') Главная @endslot
            @slot('active') Категории @endslot
        @endcomponent

        <form class="" action="{{route('category.store', $category)}}" method="POST">
            @csrf

            @include('admin.categories.partials.form')

        </form>





    </div>
@endsection