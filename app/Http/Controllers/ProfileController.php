<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    // Tampilkan daftar profile
    public function index()
    {
        $profiles = Profile::orderBy('order')->get();
        return view('profiles.index', compact('profiles'));
    }

    // Form tambah profile
    public function create()
    {
        return view('profiles.create');
    }

    // Simpan profile baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'image_path' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'order' => 'required|integer|unique:profiles',
        ]);

        // Upload gambar
        if ($request->hasFile('image_path')) {
            $validated['image_path'] = $request->file('image_path')->store('profile_images', 'public');
        }

        Profile::create($validated);

        return redirect()->route('profiles.index')->with('status', 'Profile berhasil ditambahkan!');
    }

    // Form edit profile
    public function edit(Profile $profile)
    {
        return view('profiles.edit', compact('profile'));
    }

    // Update profile
    public function update(Request $request, Profile $profile)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'image_path' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'order' => 'required|integer|unique:profiles,order,' . $profile->id,
        ]);

        // Update gambar jika ada file baru
        if ($request->hasFile('image_path')) {
            $validated['image_path'] = $request->file('image_path')->store('profile_images', 'public');
        }

        $profile->update($validated);

        return redirect()->route('profiles.index')->with('status', 'Profile berhasil diperbarui!');
    }

    // Hapus profile
    public function destroy(Profile $profile)
    {
        $profile->delete();
        return redirect()->route('profiles.index')->with('status', 'Profile berhasil dihapus!');
    }
}
