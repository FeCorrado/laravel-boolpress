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
            <p class="lead">
            {{ $post->content }}
          </p>

          <div class="mt-3">
            Data creazione: {{ $post->created_at }}
            <br>
            Data ultima modifica: {{ $post->updated_at }}
            <br>
            slug: {{ $post->slug  }}
          </div>

          <div>
            Utente: {{ $post->user->name }}
            <br>
            Email: {{ $post->user->email }}
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection