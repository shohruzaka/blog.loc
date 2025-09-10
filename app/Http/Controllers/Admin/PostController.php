<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Laravel\Facades\Image;

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
            'title' => 'required|string|max:255',
            'descript' => 'nullable|string|max:500',
            'content' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|image',
            'tags' => 'nullable|string|max:1000', // Teglar sonini cheklash
            'status' => 'nullable|boolean'
        ]);

        $status = $request->has('status') && $request->status ? 'published' : 'draft';

        DB::beginTransaction();

        try {
            $imagePath = null;

            if ($request->hasFile('image')) {                
                $folder = date('F-Y');
                $image = Image::read($request->file('image'));
                $resizedImage =  $image->scale(800, 600); // 800x600 ga o'lchamlarni o'zgartirish
                $imageName = uniqid() . '.' . $request->file('image')->getClientOriginalExtension();
                $imagePath = "images/{$folder}/{$imageName}";

                Storage::disk('public')->put($imagePath, (string) $resizedImage->encode());
            }

            $post = Post::create([
                'title' => $request->title,
                'slug' => Str::of($request->title)->slug('-'),
                'descript' => $request->descript,
                'content' => $request->content,
                'image' => $imagePath,
                'status' =>  $status,
                'user_id' => auth()->id(),
                'category_id' => $request->category_id,
                'published_at' => $status ? now() : null,
            ]);

            // Teglarni saqlash (optimallashtirilgan usul)
            if ($request->filled('tags')) {
                $this->syncTagsOptimized($post, $request->tags);
            }
            DB::commit();
            return redirect()->route('post.index')->with('success', "Yangilik qoshildi");
        } catch (\Exception $e) {
            DB::rollBack();

            if (isset($imagePath) && $imagePath) {
                Storage::disk('public')->delete($imagePath);
            }
            return redirect()->back()->with('error', "Yangilik qo'shishda xatolik: " . $e->getMessage());
        }
    }

    /**
     * Teglarni optimal tarzda saqlash
     * Bu usul eng tez va xotira tejamkor
     */
    private function syncTagsOptimized(Post $post, string $tagsString)
    {
        // 1. Teglarni tozalash va normalizatsiya qilish
        // Teglarni vergul bo'yicha ajratish
        $tagNames = explode(',', $tagsString);

        // Har bir tagni tozalash va filtrlash
        $tagNames = array_map(function ($tag) {
            $tag = trim($tag); // Bo'shliqlarni olib tashlash
            $tag = preg_replace('/\s+/', ' ', $tag); // Ko'p bo'shliqlarni bitta qilish
            $tag = ucwords(strtolower($tag)); // Har so'zning birinchi harfini katta qilish
            return $tag;
        }, $tagNames);

        // Bo'sh va takrorlanuvchi teglarni olib tashlash
        $tagNames = array_filter($tagNames, function ($tag) {
            return !empty($tag) && strlen($tag) >= 2 && strlen($tag) <= 50;
        });

        $tagNames = array_unique($tagNames);

        if (empty($tagNames)) {
            return;
        }

        // 2. Mavjud teglarni topish
        $existingTags = Tag::whereIn('name', $tagNames)
            ->pluck('id', 'name')
            ->toArray();

        // 3. Yangi teglarni aniqlash
        $newTagNames = array_diff($tagNames, array_keys($existingTags));
        $newTagsData = [];

        foreach ($newTagNames as $tagName) {
            $newTagsData[] = [
                'name' => $tagName,
                'slug' => Str::slug($tagName),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        // 4. Yangi teglarni bulk insert qilish
        if (!empty($newTagsData)) {
            Tag::insert($newTagsData);

            // Yangi yaratilgan teglarni olish
            $newlyCreatedTags = Tag::whereIn('name', $newTagNames)
                ->pluck('id', 'name')
                ->toArray();

            $existingTags = array_merge($existingTags, $newlyCreatedTags);
        }

        // 5. Post va teglar o'rtasidagi bog'lanishni yaratish
        $tagIds = array_values($existingTags);
        $post->tags()->sync($tagIds);
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
            'title' => 'required|string|max:255',
            'descript' => 'nullable|string|max:500',
            'content' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|image',
            'tags' => 'nullable|string|max:1000',
            'status' => 'nullable|boolean'
        ]);

        $status = $request->has('status') && $request->status ? 'published' : 'draft';

        $post = Post::findOrFail($id);

        DB::beginTransaction();

        try {
            $data = [
                'title' => $request->title,
                'slug' => Str::of($request->title)->slug('-'),
                'descript' => $request->descript,
                'content' => $request->content,
                'category_id' => $request->category_id,
                'status' => $status,
                'published_at' => $status ? now() : null,
            ];

            if ($request->hasFile('image')) {
                // Eski rasmni o'chirish
                if ($post->image) {
                    Storage::disk('public')->delete($post->image);
                }
                $folder = date('F-Y');
                $image = Image::read($request->file('image'));
                $resizedImage =  $image->scale(800, 600); // 800x600 ga o'lchamlarni o'zgartirish
                $imageName = uniqid() . '.' . $request->file('image')->getClientOriginalExtension();
                $imagePath = "images/{$folder}/{$imageName}";
               
                Storage::disk('public')->put($imagePath, (string) $resizedImage->encode());
                $data['image'] = $imagePath;
            }

            $post->update($data);

            // Teglarni yangilash
            if ($request->filled('tags')) {
                $this->syncTagsOptimized($post, $request->tags);
            } else {
                $post->tags()->detach();
            }

            DB::commit();
            return redirect()->route('post.index')->with('success', "Yangilik o'zgartirildi");
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', "Yangilikni yangilashda xatolik: " . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);

        if ($post->image) {
            Storage::disk('public')->delete($post->image);
        }
        $post->delete();
        return redirect()->route('post.index')->with('success', "Yangilik o'chirildi");
    }
}
