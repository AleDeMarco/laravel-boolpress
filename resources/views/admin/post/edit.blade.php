@extends('layouts.app')

  @section('content')
  <div class="container">
    <h1>Edit post: {{ $post->name }}</h1>
    <form action="{{route('post.update', $post)}}" method="post">
      @csrf
      @method('PUT')
      <div class="form-group">
        <label for="inputName">Title</label>
        <input type="text" name="title" class="form-control" id="inputName" value="{{ $post->title }}">
      </div>
      <div class="form-group">
        <label for="inputAge">Content</label>
        <input type="text" name="content" class="form-control" id="inputAge" value="{{ $post->content }}">
      </div>
      <div class="form-group">
        <label>Tags</label>
        @foreach ($tags as $tag)
          <div class="form-check">
            <input name="tags[]" class="form-check-input" type="checkbox" value="{{ $tag->id }}" id="{{ $tag->id }}" {{ $post->tags->contains($tag->id) ? 'checked' : '' }}>
            <label class="form-check-label" for="{{ $tag->id }}">
              {{ $tag->name }}
            </label>
          </div>
        @endforeach
      </div>
      <button type="submit" class="btn btn-primary">Edit</button>
    </form>
  </div>
  @endsection
