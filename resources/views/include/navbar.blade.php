<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">{{config('app.name')}}</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="/dashboard">Home</a></li>
                <li><a href="/dashboard/user">User</a></li>
                <li><a href="/posts">Posts</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="{{route('posts.create')}}">Add Post</a>
                </li>
            </ul>
        </div>
    </div>
</nav>