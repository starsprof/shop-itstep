<label for="">Статус</label>
<select class="form-control" name="publish">
    @if (isset($category->id))
        <option value="0" @if ($category->publish == 0) selected="" @endif>Не опубликовано</option>
        <option value="1" @if ($category->publish == 0) selected="" @endif>Опубликовано</option>

    @else
        <option value="0">Не опубликовано</option>
        <option value="1">Опубликовано</option>
    @endif

</select>

<label for="">Найменование</label>
<input type="text" class="form-control" name="title" placeholder="Заголовок категории" value="{{$category->title ?? ''}}" required>

<label for="">Краткое описание</label>
<input type="text" class="form-control" name="description" placeholder="Краткое описание" value="{{$category->description ?? ''}}" required>
<label for="">Slug</label>
<input type="text" class="form-control" name="slug" placeholder="Автоматическая генерация" value="{{$category->slug ?? ''}}" readonly="">

<label for="">Родителькая категория</label>
<select class="form-control" name="parent_id">
        <option value="0">-- без родительской категории --</option>
        @include('admin.categories.partials.categories', ['categories' => $categories])
</select>

<hr/>

<input class="btn btn-primary" type="submit" value="Сохранить">