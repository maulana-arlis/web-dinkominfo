<?php
namespace App\Http\Controllers\Ppid;

use App\Models\Permohonan;
use Illuminate\Http\Request;

class PpidPermohonanController
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string',
            'telepon' => 'required|string',
            'email' => 'required|email',
            'informasi' => 'required|string',
            'tujuan' => 'nullable|string',
            'file' => 'nullable|file|max:2048',
        ]);

        // Handle file upload
        if ($request->hasFile('file')) {
            $filePath = $request->file('file')->store('lampiran', 'public');
            $validated['file'] = $filePath;
        }

        Permohonan::create($validated);

        return back()->with('success', 'Permohonan berhasil dikirim!');
    }
}
?>