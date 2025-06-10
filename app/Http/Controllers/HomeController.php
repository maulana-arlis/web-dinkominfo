<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\News;
use App\Models\Profile;

class HomeController extends Controller
{
    public function index()
    {
        $contact = Contact::orderBy('created_at', 'desc')->first();
        $news = News::with('user')->orderBy('created_at', 'desc')->limit(5)->get();
        $profiles = Profile::orderBy('order')->get();
        // dd($services, $profiles, $contact, $faqs, $news);

        return view('home', compact('contact', 'news', 'profiles'));
    }
}