@extends('admin.layouts.app_admin')

@section('content')

    <div class="container">

        @component('admin.components.breadcrumb')
            @slot('title') Список продуктов @endslot
            @slot('parent') Главная @endslot
            @slot('active') Продукты @endslot
        @endcomponent

        <hr>

        <a href="{{route('products.create')}}" class="btn btn-primary text-right"><i class="far fa-plus-square"></i>Создать
            продукт</a>
        <table class="table table-bordered">
            <thead>
            <th>Картинка</th>
            <th>Найменование</th>
            <th>Описание</th>
            <th>Цена</th>
            <th>Действие</th>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <td><img class="img-thumbnail" style="max-width: 150px" src="{{$product->image}}" /></td>
                    <td>{{$product->title}}</td>
                    <td>{{$product->description}}</td>
                    <td>{{$product->price}}</td>
                    <td>

                        <form action="{{ route('products.destroy', $product) }}" method="POST" onsubmit="return confirm('Удалить?')">

                            <a class="btn btn-info" href="{{ route('products.show', $product) }}">Show</a>

                            <a class="btn btn-primary" href="{{ route('products.edit', $product) }}">Edit</a>

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
