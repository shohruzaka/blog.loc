<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.post.list', [
            'posts' => Post::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::pluck('name', 'id')->all();
        return view('admin.post.create', [
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'title' => 'required',
            'descript' => 'required',
            'content' => 'required',
            'category_id' => 'required',
            'image' => 'image|required'
        ]);
        
        $data['title'] = $request->title;
        $data['slug'] = Str::of($request->title)->slug('-');
        $data['descript'] = $request->descript;
        $data['content'] = $request->content;
        $data['category_id'] = $request->category_id;
        
        if ($request->hasFile('image')) {
            $folder = date('F-Y');
            $data['image'] = $request->file('image')->store("images/{$folder}");
        }

        $post = Post::create($data);
        if ($post) {
            return redirect()->route('post.index')->with('success', "Yangilik qoshildi");
        }
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $categories = Category::pluck('name', 'id')->all();
        return view('admin.post.edit', [
            'post' => Post::findOrFail($id),
            'categories' => $categories
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'descript' => 'required',
            'content' => 'required',
            'category_id' => 'required',
            'image' => 'image|required'
        ]);

        $post = Post::findOrFail($id);
        
        $data['title'] = $request->title;
        $data['slug'] = Str::of($request->title)->slug('-');
        $data['descript'] = $request->descript;
        $data['content'] = $request->content;
        $data['category_id'] = $request->category_id;
        
        if ($request->hasFile('image')) {
            // Delete the old image
            if ($post->image) {
            Storage::delete($post->image);
            }
            // Store the new image
            $folder = date('F-Y');
            $data['image'] = $request->file('image')->store("images/{$folder}");
        }

        $post->update($data);
        if ($post) {
            return redirect()->route('post.index')->with('success', "Yangilik o'zgartirildi");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        
        if ($post->image) {
            Storage::delete($post->image);
        }
        $post->delete();
        return redirect()->route('post.index')->with('success', "Yangilik o'chirildi");
    }
    
}
