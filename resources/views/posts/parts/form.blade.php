<div class="form-group mb-2">
    <input name="title" type="text" class="form-control"  required value="{{ isset($post->title)?$post->title:'' }}"/>
</div>
<div class="form-group mb-2">
    <textarea name="description" rows="3" class="form-control" required>{{ isset($post->description)?$post->description:'' }}</textarea>
</div>
<div class="form-group mb-2">
    <input name="img" type="file">
</div>
