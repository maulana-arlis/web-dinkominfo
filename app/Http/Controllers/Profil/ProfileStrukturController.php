<?php
namespace App\Http\Controllers\Profil;

use App\Http\Controllers\Controller;
use App\Models\Contact;

class ProfileStrukturController extends Controller
{
    public function index()
{
    $contact = Contact::first();
    return view('profil.struktur', compact('contact'));
}
}
?>