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
            ->take(6)
            ->get();
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
}
