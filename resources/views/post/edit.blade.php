@extends('layouts.dashboard')

@section('content')
    <h1>Edit Post</h1>
    <form action="{{route('posts.update', $post->id)}}" method="POST">
           {{ csrf_field() }}
        <input name="_method" type="hidden" value="PUT">
        <div class="form-group">
            <label for="">Title</label>
            <input type="text" name="title" id="" class="form-control" value="{{$post->title}}"/>
        </div>
        <div class="form-group">
            <label for="">Body</label>
            <textarea class="form-control" name="body" id="article-ckeditor" cols="30" rows="10">{{$post->body}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection