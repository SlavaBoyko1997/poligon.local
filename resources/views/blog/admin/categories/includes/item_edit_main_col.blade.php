<div class="form-group">
    <label for="title">Заголовок</label>
    <input name="title" value="{{$item->title}}"
           id="title"
           type="text"
           class="form-control"
           minlength="3"
           required>
</div>
<div class="form-group">
    <label for="slug">Идентифекатор</label>
    <input name="slug" value="{{$item->slug}}"
           id="slug"
           type="text"
           class="form-control">
</div>
<div class="form-group">
    <label for="parent_id">Родитель</label>
    <select name="parent_id"
           id="parent_id"
           class="form-control"
           required>
        @foreach($categoryList as $categoryOption)
            <option value="{{$categoryOption->id}}"
                    @if($categoryOption->id == $item->parent_id) selected @endif>
                {{$categoryOption->id}}.{{$categoryOption->title}}
            </option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label for="description">Описания</label>
    <textarea name="description"
           id="description"
           class="form-control"
           rows="3">{{old('description',$item->description)}}
    </textarea>
</div>