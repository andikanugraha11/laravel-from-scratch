@extends('layouts.dashboard')

@section('content')
    <h1>Index Post</h1>
    @if (count($posts) > 0)
        @foreach ($posts as $post)
            <div class="well">
                <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                <small>Write on : {{$post->created_at}}</small>
            </div>
        @endforeach
        {{$posts->links()}}
    @else
        <p>Data not found</p>
    @endif
@endsection