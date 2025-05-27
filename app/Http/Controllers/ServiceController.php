<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    // Tampilkan daftar service
    public function index()
    {
        $services = Service::orderBy('created_at', 'desc')->get();
        return view('services.index', compact('services'));
    }

    // Form tambah service
    public function create()
    {
        return view('services.create');
    }

    // Simpan service baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'url' => 'required|url',
            'icon' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048', // Upload gambar
        ]);

        // Simpan gambar
        $iconPath = $request->file('icon')->store('icons', 'public');

        // Simpan ke database
        Service::create([
            'name' => $validated['name'],
            'description' => $validated['description'],
            'url' => $validated['url'],
            'icon_url' => $iconPath, // Simpan path ikon
        ]);

        return redirect()->route('services.index')->with('status', 'Service berhasil ditambahkan!');
    }

    // Form edit service
    public function edit(Service $service)
    {
        return view('services.edit', compact('service'));
    }

    // Update service
    public function update(Request $request, Service $service)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'url' => 'required|url',
            'icon' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        // Jika ada file baru diunggah, hapus yang lama & simpan baru
        if ($request->hasFile('icon')) {
            if ($service->icon_url) {
                Storage::disk('public')->delete($service->icon_url);
            }
            $validated['icon_url'] = $request->file('icon')->store('icons', 'public');
        }

        $service->update($validated);

        return redirect()->route('services.index')->with('status', 'Service berhasil diperbarui!');
    }

    // Hapus service
    public function destroy(Service $service)
    {
        // Hapus gambar dari storage
        if ($service->icon_url) {
            Storage::disk('public')->delete($service->icon_url);
        }

        $service->delete();

        return redirect()->route('services.index')->with('status', 'Service berhasil dihapus!');
    }
}
