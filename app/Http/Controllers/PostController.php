<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\PostRequest;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return view("pages.posts.index", ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $post = new Post();
        return view("pages.posts.create", ['post' => $post]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostRequest $request)
    {
        $validated = $request->validated();        

        if ($request->hasFile('image_path')) {
           $filePath = Storage::disk('public')->put('images/posts', request()->file('image_path'));
           $validated['image_path'] = $filePath;
       }

        Post::create($validated);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view("pages.posts.show", ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view("pages.posts.edit", ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PostRequest $request, Post $post)
    {
        $validated = $request->validated();        

        if ($request->hasFile('image_path')) {
           $filePath = Storage::disk('public')->put('images/posts', request()->file('image_path'));
           $validated['image_path'] = $filePath;
       }

        $post->update($validated);

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect('/')->withSuccess(__('Post delete successfully.'));
    }
}
