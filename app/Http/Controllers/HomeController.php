<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;

class HomeController extends Controller
{
    public function index()
    {

        $featuredPosts = Post::published()
            ->with(['user', 'category'])
            ->orderBy('views', 'desc')
            ->take(3)
            ->get();

        $recentPosts = Post::published()
            ->with(['user', 'category'])
            ->latest('published_at')
            ->paginate(3);

        $lastPost = $recentPosts->first();

        $randomTags = Tag::inRandomOrder()->take(10)->get();

        $categories = Category::withCount('posts')->get();

        return view("index", compact("featuredPosts", "recentPosts", "categories", "lastPost", "randomTags"));
    }

    public function allPosts()
    {
        $posts = Post::published()
            ->with(['user', 'category'])
            ->latest('published_at')
            ->paginate(5);

        return view('all-posts', compact('posts'));
    }

    function post_show($slug)
    {
        $post = Post::published()
            ->where('slug', $slug)
            ->with(['user', 'category', 'tags'])
            ->firstOrFail();

        // Ko'rishlar sonini oshirish
        $post->increment('views');

        // Tegishli postlarni olish (shu kategoriyadan 3 ta post)
        $relatedPosts = Post::published()
            ->where('category_id', $post->category_id)
            ->where('id', '!=', $post->id)
            ->take(3)
            ->get();

        return view('single-post', compact('post', 'relatedPosts'));
    }
}
