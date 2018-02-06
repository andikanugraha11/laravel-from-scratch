@extends('layouts.dashboard')

@section('content')
<a href="/posts" class="btn btn-default">Go Back</a>
    <h1>{{$post->title}}</h1>
    {!!$post->body!!}
    {{--  {{$post->body}}  --}}
    <hr>
    <small>{{$post->created_at}}</small>
    <hr>
    @if (!Auth::guest())
        @if (Auth::user()->id == $post->author_id)
            <div class="row">
                <a href="{{route('posts.edit', $post->id)}}" class="btn btn-info">Edit</a>
                <form action="{{route('posts.destroy', $post->id)}}" class="pull-right" method="post">
                    {{ csrf_field() }}
                    <input name="_method" type="hidden" value="DELETE">
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        @endif
        
    @endif
    
    
@endsection