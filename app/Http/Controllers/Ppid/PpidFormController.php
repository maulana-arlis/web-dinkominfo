<?php
namespace App\Http\Controllers\Ppid;

use App\Http\Controllers\Controller;
use App\Models\Contact;

class PpidFormController extends Controller
{
    public function index()
{
    $contact = Contact::first();
    return view('ppid.permohonan', compact('contact'));
}
}
?>