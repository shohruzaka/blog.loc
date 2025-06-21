<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Comment;

class DashboardController extends Controller
{

    public function index()
    {
        $stats = [
            'total_posts' => Post::count(),
            'published_posts' => Post::where('status', 'published')->count(),
            'draft_posts' => Post::where('status', 'draft')->count(),
            'total_users' => User::count(),
            'total_comments' => Comment::count(),
            'pending_comments' => Comment::where('approved', false)->count(),
        ];

        $recentPosts = Post::with('user')->latest()->take(5)->get();
        $recentComments = Comment::with(['user', 'post'])->latest()->take(5)->get();

        return view('admin.dashboard', compact('stats', 'recentPosts', 'recentComments'));
    }
}
