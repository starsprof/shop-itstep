<label for="">Статус</label>
<select class="form-control" name="publish">
        @if (isset($product->id))
                <option value="0" @if ($category->publish == 0) selected="" @endif>Не опубликовано</option>
                <option value="1" @if ($category->publish == 0) selected="" @endif>Опубликовано</option>

        @else
                <option value="0">Не опубликовано</option>
                <option value="1">Опубликовано</option>
        @endif

</select>
<div class="form-group">
        <label for="inputImage">Картинка</label>
        <div class="custom-file">
                <input type="file" class="custom-file-input" name="image" id="inputImage">
                <label class="custom-file-label" for="inputImage">Choose Image</label>
        </div>
</div>
<div class="form-group">
        <label for="inputTitle">Название</label>
        <input type="text" value="{{ $product->title ?? ''}}"  class="form-control" name="title" id="inputTitle" placeholder="Название">
</div>
<div class="form-group">
        <label for="inputTitle">Артикул</label>
        <input type="text" value="{{ $product->code ?? '' }}"  class="form-control" name="code" id="inputCode" placeholder="Артикул">
</div>
<div class="form-group">
        <label for="inputDescription">Описание</label>
        <textarea class="form-control" name="description" id="inputDescription"   placeholder="Описание">
            {{$product->description ?? ''}}
        </textarea>

</div>
<div class="form-group">
        <label for="inputTitle">Цена</label>
        <input type="text" value="{{$product->price ?? ''}}"  class="form-control" name="price" id="inputPrice" placeholder="Цена">
</div>

<label for="">Категория</label>
<select class="form-control" name="category_id">
        @include('admin.products.partials.categories', ['categories' => $categories])
</select>

<hr/>
<input class="btn btn-primary" type="submit" value="Сохранить">
