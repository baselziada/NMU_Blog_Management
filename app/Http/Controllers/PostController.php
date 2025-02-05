<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->approved()->published()->paginate(6);
        return view('posts', compact('posts'));
    }

    public function details($slug)
    {
        $post = Post::where('slug', $slug)->approved()->published()->first();

        $blogKey = 'blog_' . $post->id;

        if (!Session::has($blogKey)) {
            $post->increment('view_count');
            Session::put($blogKey, 1);
        }
        $randomposts = Post::approved()->published()->take(3)->inRandomOrder()->get();
        return view('post', compact('post', 'randomposts'));
    }

    public function postByCategory($slug)
    {
        $category = Category::where('slug', $slug)->first();
        $posts = $category->posts()->approved()->published()->get();
        return view('category', compact('category', 'posts'));
    }

    public function postByTag($slug)
    {
        $tag = Tag::where('slug', $slug)->first();
        $posts = $tag->posts()->approved()->published()->get();
        return view('tag', compact('tag', 'posts'));
    }

    /**
     * Store a new post with validation.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:3|unique:posts,title',
            'content' => 'required|min:10',
        ], [
            'title.required' => 'The title field is required.',
            'title.min' => 'The title must be at least 3 characters.',
            'title.unique' => 'This title has already been used.',
            'content.required' => 'The description field is required.',
            'content.min' => 'The description must be at least 10 characters.',
        ]);

        Post::create([
            'title' => $request->title,
            'slug' => str_slug($request->title),
            'content' => $request->content,
            'author' => auth()->user()->name ?? 'Guest',
        ]);

        return redirect()->back()->with('success', 'Post created successfully!');
    }

    /**
     * Update an existing post with validation.
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required|min:3|unique:posts,title,' . $post->id,
            'content' => 'required|min:10',
        ], [
            'title.required' => 'The title field is required.',
            'title.min' => 'The title must be at least 3 characters.',
            'title.unique' => 'This title has already been used.',
            'content.required' => 'The description field is required.',
            'content.min' => 'The description must be at least 10 characters.',
        ]);

        $post->update([
            'title' => $request->title,
            'slug' => str_slug($request->title),
            'content' => $request->content,
        ]);

        return redirect()->back()->with('success', 'Post updated successfully!');
    }
}
