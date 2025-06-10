<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Profile;
use App\Models\News;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index', [
            'totalUsers' => User::count(),
            'totalProfiles' => Profile::count(),
            'totalNews' => News::count(),
        ]);
    }
}