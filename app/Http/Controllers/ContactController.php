<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    // Tampilkan daftar kontak
    public function index()
    {
        $contact = Contact::orderBy('created_at', 'desc')->first();
        return view('contacts.index', compact('contact'));
    }


    // Form tambah kontak
    public function create()
    {
        return view('contacts.create');
    }

    // Simpan kontak baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'address' => 'required|string|max:255',
            'phone_number' => 'required|string|max:20',
            'faq_number' => 'nullable|string|max:20',
            'email1' => 'required|email|max:255',
            'email2' => 'nullable|email|max:255',
            'operasional_days' => 'required|string|max:255',
            'operasional_times' => 'required|string|max:255',
            'twitter_url' => 'nullable|url',
            'facebook_url' => 'nullable|url',
            'instagram_url' => 'nullable|url',
            'maps_url' => 'nullable|url',
        ]);

        Contact::create($validated);

        return redirect()->route('contacts.index')->with('status', 'Kontak berhasil ditambahkan!');
    }

    // Form edit kontak
    public function edit(Contact $contact)
    {
        return view('contacts.edit', compact('contact'));
    }

    // Update kontak
    public function update(Request $request, Contact $contact)
    {
        $validated = $request->validate([
            'address' => 'required|string|max:255',
            'phone_number' => 'required|string|max:20',
            'faq_number' => 'nullable|string|max:20',
            'email1' => 'required|email|max:255',
            'email2' => 'nullable|email|max:255',
            'operasional_days' => 'required|string|max:255',
            'operasional_times' => 'required|string|max:255',
            'twitter_url' => 'nullable|url',
            'facebook_url' => 'nullable|url',
            'instagram_url' => 'nullable|url',
            'maps_url' => 'nullable|url',
        ]);

        $contact->update($validated);

        return redirect()->route('contacts.index')->with('status', 'Kontak berhasil diperbarui!');
    }

    // Hapus kontak
    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('contacts.index')->with('status', 'Kontak berhasil dihapus!');
    }
}
