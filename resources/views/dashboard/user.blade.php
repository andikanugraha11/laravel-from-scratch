@extends('layouts.dashboard')

@section('content')
    <h1>{{$page}}</h1>
    @if(count($users)>0)
        <ul>
        @foreach($users as $user)
            <li>{{$user}}</li>
        @endforeach
        </ul>
    @endif
    <button class="btn btn-primary">Test</button>
@endsection