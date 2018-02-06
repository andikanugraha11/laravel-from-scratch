@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (count($posts) > 0)
                    <table class="table table-striped">
                        <tr>
                            <th>Judul</th>
                            <th></th>
                            <th></th>
                        </tr>
                        
                            @foreach ($posts as $post)
                                <tr>
                                    <td>{{$post->title}}</td>
                                    <td>
                                        <a href="{{route('posts.edit',$post->id)}}" class="btn btn-info">Edit</a>
                                    </td>
                                    <td>
                                        <form action="{{route('posts.destroy', $post->id)}}" class="pull-right" method="post">
                                            {{ csrf_field() }}
                                            <input name="_method" type="hidden" value="DELETE">
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        
                        
                    </table>
                    @else
                        <p>Tidak ada post</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
