@extends('admin.layouts.app_admin')

@section('content')

    <div class="container">

        @component('admin.components.breadcrumb')
            @slot('title') Список категорий @endslot
            @slot('parent') Главная @endslot
            @slot('active') Категории @endslot
        @endcomponent

        <hr>

        <a href="{{route('category.create')}}" class="btn btn-primary text-right"><i class="far fa-plus-square"></i>Создать
            категорию</a>
        <table class="table table-bordered">
            <thead>
            <th class="text-center">Найменование</th>
            <th class="text-center">Публикация</th>
            <th class="text-center">Родительская <br> категория</th>
            <th class="text-center">Создание</th>
            <th class="text-center">Действие</th>
            </thead>
            <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{$category->title}}</td>
                    <td>{{$category->publish}}</td>
                    <td>{{$category->parent_id}}</td>
                    <td>{{$category->create_by}}</td>
                    <td>

                        <form action="{{ route('category.destroy', $category) }}" method="POST" onsubmit="return confirm('Удалить?')">

                            <a class="btn btn-info" href="{{ route('category.show', $category) }}">Show</a>

                            <a class="btn btn-primary" href="{{ route('category.edit', $category) }}">Edit</a>

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>

                    </td>
                </tr>

            @endforeach

            </tbody>
        </table>
    </div>
@endsection