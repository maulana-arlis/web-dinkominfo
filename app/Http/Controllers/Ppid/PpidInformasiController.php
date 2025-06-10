<?php
namespace App\Http\Controllers\Ppid;

use App\Http\Controllers\Controller;
use App\Models\Contact;

class PpidInformasiController extends Controller
{
    public function index()
{
    $contact = Contact::first();
    return view('ppid.informasi', compact('contact'));
}
}
?>