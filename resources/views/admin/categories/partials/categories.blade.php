@foreach ($categories as $category_list)
    <option value="{{$category_list->id or ''}}"
            @isset($category->id)
                @if ($category->parent_id == $category_list->id)
                    selected=''
                @endif

                @if ($category->id == $category_list->id)
                    hidden=''
                @endif
            @endisset
    >
        {!! $delimiter ?? '' !!}{{$category_list->title ?? ''}}
    </option>

    @isset($category_list->children)

        @include('admin.categories.partials.categories', [
            'categories' => $category_list->children,
            'delimiter' => ' - ' . $delimiter
        ])

    @endisset

@endforeach


