@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex">
                <div class="ml-auto">Lista dei Post</div>

                <a class="ml-auto " href="{{ url('admin/posts/create')}}">Aggiungi...</a>
            </div>
                <div class="card-body">
                    <ul class="list-group">
                        @foreach ($posts as $post)
                            <li class="list-group-item">{{$post->title}}
                            <a href="{{ route('admin.posts.show', $post->slug) }}">Mostra</a></li>                          
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection