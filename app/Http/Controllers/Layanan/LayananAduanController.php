<?php
namespace App\Http\Controllers\Layanan;

use App\Http\Controllers\Controller;
use App\Models\Contact;

class LayananAduanController extends Controller
{
    public function index()
{
    $contact = Contact::first();
    return view('layanan.aduan', compact('contact'));
}
}
?>