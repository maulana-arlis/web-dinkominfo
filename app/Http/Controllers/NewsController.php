<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;


class NewsController extends Controller
{
    // Tampilkan daftar berita
    public function index()
    {
        $news = News::with('user')->orderBy('created_at', 'desc')->get();
        return view('news.index', compact('news'));
    }

    public function show(News $news)
    {
        return view('news.show', compact('news'));
    }

    // Form tambah berita
    public function create()
    {
        return view('news.create');
    }

    // Simpan berita baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $path = $request->file('image')->store('news_images', 'public');

        News::create([
            'title' => $validated['title'],
            'slug' => Str::slug($validated['title']),
            'content' => $validated['content'],
            'image_path' => $path,
            'user_id' => Auth::id(),
            'visit_count' => 0,
        ]);

        return redirect()->route('news.index')->with('status', 'Berita berhasil ditambahkan!');
    }

    // Form edit berita
    public function edit(News $news)
    {
        return view('news.edit', compact('news'));
    }

    // Update berita
    // public function update(Request $request, News $news)
    // {
    //     $validated = $request->validate([
    //         'title' => 'required|string|max:255',
    //         'content' => 'required',
    //         'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
    //     ]);

    //     if ($request->hasFile('image')) {
    //         $path = $request->file('image')->store('news_images', 'public');
    //         $news->update(['image_path' => $path]);
    //     }

    //     $news->update([
    //         'title' => $validated['title'],
    //         'slug' => Str::slug($validated['title']),
    //         'content' => $validated['content'],
    //     ]);

    //     return redirect()->route('news.index')->with('status', 'Berita berhasil diperbarui!');
    // }

    public function update(Request $request, News $news)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Jika ada gambar baru, hapus gambar lama lalu simpan gambar baru
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($news->image_path) {
                Storage::disk('public')->delete($news->image_path);
            }

            // Simpan gambar baru
            $validated['image_path'] = $request->file('image')->store('news_images', 'public');
        }

        // Update berita (menggunakan satu kali update)
        $news->update([
            'title' => $validated['title'],
            'slug' => Str::slug($validated['title']),
            'content' => $validated['content'],
            'image_path' => $validated['image_path'] ?? $news->image_path, // Gunakan gambar lama jika tidak ada yang baru
        ]);

        return redirect()->route('news.index')->with('status', 'Berita berhasil diperbarui!');
    }


    // Hapus berita
    public function destroy(News $news)
    {
        $news->delete();
        return redirect()->route('news.index')->with('status', 'Berita berhasil dihapus!');
    }

    public function uploadImage(Request $request)
    {
        if ($request->hasFile('upload')) {
            $file = $request->file('upload');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('news-images', $filename, 'public');

            return response()->json([
                'uploaded' => 1,
                'fileName' => $filename,
                'url' => asset('storage/' . $path)
            ]);
        }

        return response()->json(['uploaded' => 0, 'error' => ['message' => 'Upload gagal.']]);
    }
}
