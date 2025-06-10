<?php
namespace App\Http\Controllers\Profil;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Profile;

class ProfilePejabatController extends Controller
{
    public function index()
    {
        $contact = Contact::first();
        $profiles = Profile::orderBy('order')->get();

        return view('profil.pejabat', compact('contact', 'profiles'));
    }
}
?>