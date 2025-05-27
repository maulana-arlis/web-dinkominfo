<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    // Tampilkan daftar FAQ
    public function index()
    {
        $faqs = Faq::orderBy('created_at', 'desc')->get();
        return view('faqs.index', compact('faqs'));
    }

    // Form tambah FAQ
    public function create()
    {
        return view('faqs.create');
    }

    // Simpan FAQ baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'question' => 'required|string|max:255',
            'answer' => 'required|string',
        ]);

        Faq::create($validated);

        return redirect()->route('faqs.index')->with('status', 'FAQ berhasil ditambahkan!');
    }

    // Form edit FAQ
    public function edit(Faq $faq)
    {
        return view('faqs.edit', compact('faq'));
    }

    // Update FAQ
    public function update(Request $request, Faq $faq)
    {
        $validated = $request->validate([
            'question' => 'required|string|max:255',
            'answer' => 'required|string',
        ]);

        $faq->update($validated);

        return redirect()->route('faqs.index')->with('status', 'FAQ berhasil diperbarui!');
    }

    // Hapus FAQ
    public function destroy(Faq $faq)
    {
        $faq->delete();
        return redirect()->route('faqs.index')->with('status', 'FAQ berhasil dihapus!');
    }
}
