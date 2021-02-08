<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Http\Request;

class ArtistsController extends Controller
{
    public function index()
    {
        $liveacts = Artist::where('role', 'act')->orderBy('name', 'ASC')->get();

        $djs = Artist::where('role', 'dj')->orderBy('name', 'ASC')->get();

        return view('artists', compact('liveacts', 'djs'));
    }

    public function indexLiveacts()
    {
        $liveacts = Artist::where('role', 'act')->orderBy('name', 'ASC')->get();

        return view('artists', compact('liveacts'));
    }

    public function indexDjs()
    {
        $djs = Artist::where('role', 'dj')->orderBy('name', 'ASC')->get();

        return view('artists', compact('djs'));
    }

    public function show($slug)
    {
        $slug;
        $artist = Artist::where('slug', $slug)->first();

        return view('artist', compact('artist'));        
    }
}
