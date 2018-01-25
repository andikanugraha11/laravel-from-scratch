@extends('layouts.dashboard')

@section('content')
    <h1>Create Post</h1>
    <form action="{{route('posts.store')}}" method="POST">
           {{ csrf_field() }}
        <div class="form-group">
            <label for="">Title</label>
            <input type="text" name="title" id="" class="form-control"/>
        </div>
        <div class="form-group">
            <label for="">Body</label>
            <textarea class="form-control" name="body" id="" cols="30" rows="10"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection