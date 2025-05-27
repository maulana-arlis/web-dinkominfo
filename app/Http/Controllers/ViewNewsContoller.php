<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\News; 
use App\Models\Service;
use Illuminate\Http\Request;

class ViewNewsContoller extends Controller
{
    public function index() {
        $news = News::latest()->paginate(15);
        $contact = Contact::orderBy('created_at', 'desc')->first();
        $services = Service::orderBy('created_at', 'desc')->get();


        return view('viewnews.index', compact('news', 'contact', 'services'));
    }

    public function show($slug) {
        $contact = Contact::orderBy('created_at', 'desc')->first();
        $services = Service::orderBy('created_at', 'desc')->get();
        $news = News::where('slug', $slug)->firstOrFail();
        $news->increment('visit_count');
        return view('viewnews.show', compact('news', 'contact', 'services'));
    }
}
