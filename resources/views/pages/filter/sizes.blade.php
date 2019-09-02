<ul>
    @php
    @endphp
    <form action="{{route('category')}}" method="post">
        @csrf
        <input type="hidden" name="id" value="{{$categoryId}}">
        @foreach($sizes as $size)
            <li>
                <input type="checkbox" name="size[]" {{ in_array($size, $selectedSizes) ? 'checked' : '' }} value="{{$size}}">
                <label>{{$size}}</label>
            </li>
        @endforeach
            <input type="submit" value="GET SIZES">
    </form>
</ul>
