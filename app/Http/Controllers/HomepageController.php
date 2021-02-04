<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Models\News;
use App\Models\Release;
use App\Models\Youtube;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        $releases = Release::orderBy('id', 'DESC')->take(8)->get();

        $news = News::take(3)->get();

        $youtubes = Youtube::take(3)->get();

        $artists = Artist::where('role', 'act')->take(4)->get();

        return view('home', compact('releases', 'news', 'youtubes', 'artists'));
    }
}
