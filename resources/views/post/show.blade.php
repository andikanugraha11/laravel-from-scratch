@extends('layouts.dashboard')

@section('content')
<a href="/posts" class="btn btn-default">Go Back</a>
    <h1>{{$post->title}}</h1>
    {!!$post->body!!}
    {{--  {{$post->body}}  --}}
    <hr>
    <small>{{$post->created_at}}</small>
@endsection