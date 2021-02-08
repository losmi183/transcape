<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Models\News;
use App\Models\Release;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $news = News::count();
        $releases = Release::count();
        $artists = Artist::count();

        return view('admin.index', compact('news', 'releases', 'artists'));
    }
}