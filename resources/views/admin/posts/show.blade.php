@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header d-flex justify-content-between">
            Dettagli post: {{ $post->title }}
            <a href="{{ route('admin.posts.index')}}"><-</a>
          </div>

          <div class="card-body">

            {{ $post->content }}

          </div>
        </div>
      </div>
    </div>
  </div>
@endsection