@extends('admin.layouts.app_admin')

@php
    /** @var  \App\Category $category */
@endphp
@section('content')

    <div class="container">

        @component('admin.components.breadcrumb')
            @slot('title') Редактировать категорию @endslot
            @slot('parent') Главная @endslot
            @slot('active') Категории @endslot
        @endcomponent

        <form class="" action="{{route('category.update', ['category' => $category])}}" method="POST">

            @csrf
            @method('PUT')

            @include('admin.categories.partials.form')

        </form>





    </div>
@endsection