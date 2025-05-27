<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Faq;
use App\Models\News;
use App\Models\Profile;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $contact = Contact::orderBy('created_at', 'desc')->first();
        $faqs = Faq::orderBy('created_at', 'desc')->get();
        $news = News::with('user')->orderBy('created_at', 'desc')->limit(5)->get();
        $profiles = Profile::orderBy('order')->get();
        $services = Service::orderBy('created_at', 'desc')->get();
        // dd($services, $profiles, $contact, $faqs, $news);

        return view('home', compact('contact', 'faqs', 'news', 'profiles','services'));
    }
}
