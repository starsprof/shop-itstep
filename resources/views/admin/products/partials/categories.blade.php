@foreach ($categories as $category)
    <option value="{{$category->id}}"
            @isset($product->id)
                @foreach ($product->category as $category_product)
                    @if ($category->id == $category_product->id)
                        selected="selected"
                    @endif
                @endforeach
            @endisset
    >
        {!! $delimiter ?? '' !!}{{$category->title ?? ''}}
    </option>

    @isset($category_list->children)

        @include('admin.products.partials.categories', [
            'categories' => $category_list->children,
            'delimiter' => ' - ' . $delimiter
        ])

    @endisset

@endforeach


