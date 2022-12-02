<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $post = Post::paginate(5);
        $view_data['posts'] = $post;
        return view('posts.index')->with($view_data);
    }

    public function create()
    {
        $view_data['page_title'] = 'Create Post';
        return view('posts.create')->with($view_data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'post_title' => 'required',
            'post_content' => 'required'
        ]);
        $request_data = $request->all();
        Post::create([
            'post_title' => $request_data['post_title'],
            'post_content' => $request_data['post_content'],
        ]);
        return redirect()->route('posts.index')->with('success', 'Post created successfully ! ! !');
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $request->validate([
            'post_title' => 'required',
            'post_content' => 'required'
        ]);
        $post->update($request->all());
        return redirect()->route('posts.index')->with('success', 'Post update successfully ! ! !');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index')->with('success', 'Post delete successfully ! ! !');
    }
}