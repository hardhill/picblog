<div class="form-group mb-2">
    <input name="title" type="text" class="form-control"  required value="{{ old('title')?? isset($post->title)??'' }}"/>
</div>
<div class="form-group mb-2">
    <textarea name="description" rows="3" class="form-control" required>{{ old('description')??isset($post->description)??'' }}</textarea>
</div>
<div class="form-group mb-2">
    <input name="img" type="file">
</div>
