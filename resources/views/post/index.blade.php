@extends('layouts.dashboard')

@section('content')
    <h1>Index Post</h1>
    @if (count($posts) > 0)
        @foreach ($posts as $post)
            <div class="well">
                <h3>{{$post->title}}</h3>
                <p>{{$post->body}}</p>
                <small>Write on : {{$post->created_at}}</small>
            </div>
        @endforeach
    @else
        <p>Data not found</p>
    @endif
@endsection