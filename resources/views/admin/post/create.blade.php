@extends('layouts.app')

@section('content')
<div class="container">
  <h1>Add your post</h1>
  <form action="{{route('post.store')}}" method="post">
    @csrf
    @method('POST')
    <div class="form-group">
      <label for="inputName">Title</label>
      <input type="text" name="title" class="form-control" id="inputName">
    </div>
    <div class="form-group">
      <label for="inputAge">Content</label>
      <input type="text" name="content" class="form-control" id="inputAge">
    </div>
    <div class="form-group">
      <label>Tags</label>
      @foreach ($tags as $tag)
        <div class="form-check">
          <input name="tags[]" class="form-check-input" type="checkbox" value="{{ $tag->id }}" id="{{ $tag->id }}">
          <label class="form-check-label" for="{{ $tag->id }}">
            {{ $tag->name }}
          </label>
        </div>
      @endforeach
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection
