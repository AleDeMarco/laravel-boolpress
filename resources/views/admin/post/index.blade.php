@extends('layouts.app')

@section('content')
<div class="container">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">User id</th>
      <th scope="col">Created at</th>
      <th scope="col">Updated at</th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    @foreach ($posts as $post)
      <tr>
        <th scope="row">{{ $post->id }}</th>
        <td>{{ $post->title }}</td>
        <td>{{ $post->user_id }}</td>
        <td>{{ $post->created_at }}</td>
        <td>{{ $post->updated_at }}</td>
        <td><a class="btn btn-info" href="{{ route('post.show', $post->id) }}">View</a></td>
        <td><a class="btn btn-info" href="{{ route('post.edit', $post->id) }}">Edit</a></td>
        <td>
          <form action="{{ route('post.destroy', $post) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
          </form>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection
