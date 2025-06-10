<?php
namespace App\Http\Controllers;

use App\Models\Contact;
class DetailController extends Controller
{
    public function index()
{
    $contact = Contact::first();
    return view('detail', compact('contact'));
}
}
?>