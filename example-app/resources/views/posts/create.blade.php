@extends('posts.layout')
@section('content')

<div class="row">
    <div class="col-12 col-md-10">
        <h3>Create new Blog</h3>
    </div>
    <div class="col-12 col-md-2 text-end">
        <a class="btn btn-primary" href="{{route('posts.index')}}">
            Go Back to Posts
        </a>
    </div>
</div>

@if($errors->any())
<div class="row">
    <div class="col-12">
        <div class="alert alert-danger alert-dismissible fade show" role='alert'>
            <strong>Some error occured ! ! !</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endif

<div class="row">
    <div class="col-12">
        <form method="POST" action="{{route('posts.store')}}">
            @csrf
            <div class="mb-3">
                <input type="text" class="form-control" id="post_title" name="post_title" placeholder="post title">
            </div>
            <div class="mb-3">
                <textarea class="form-control" id="post_content" name="post_content"
                    placeholder="post content"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection