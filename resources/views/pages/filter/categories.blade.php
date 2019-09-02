<ul>
    @php
    /** @var \App\Category[] $filter_categories */
    @endphp
    @foreach($filter_categories as $category)

        @if(($category->parent_id == $parentCategoryId || $category->parent_id==$categoryId) && $category->parent_id != null)
            <li><a href="{{ route('category', ['id' => $category->id]) }}" class="filter-section-link{{ $category->id == $categoryId ? 'active' : ''}}">{{ $category->title }}</a></li>
        @endif
    @endforeach
</ul>
