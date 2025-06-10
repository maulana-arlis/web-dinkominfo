<?php
namespace App\Http\Controllers\Ppid;

use App\Http\Controllers\Controller;
use App\Models\Contact;

class PpidProfileController extends Controller
{
    public function index()
{
    $contact = Contact::first();
    return view('ppid.profile', compact('contact'));
}
}
?>