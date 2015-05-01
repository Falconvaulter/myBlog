@extends('app')

@section('content')
    <a href="posts/create">Create a Post</a>
    <div class="col-xs-3">
        <h1>Recent Posts</h1>
        @include('partials.postList')
    </div>
    <div class="col-xs-9 fixed">
        <h1>Posts</h1>    
        @include('partials.post')
    </div>
    

@endsection