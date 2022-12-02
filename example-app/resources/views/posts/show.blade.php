@extends('posts.layout')
@section('content')

<div class="row">
    <div class="col-12 col-md-10">
        <h3>Post Detail</h3>
    </div>
    <div class="col-12 col-md-2 text-end">
        <a class="btn btn-primary" href="{{route('posts.index')}}">
            Go Back to Posts
        </a>
    </div>
</div>

<div class="row">
    <div class="col-12 mb-3">
        <strong>Post Title</strong>
        {!! $post->post_title !!}
    </div>
    <div class="col-12 mb-3">
        <strong>Post Content</strong>
        {!! $post->post_content !!}
    </div>
</div>