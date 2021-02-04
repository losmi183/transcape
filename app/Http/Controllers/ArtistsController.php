<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Http\Request;

class ArtistsController extends Controller
{
    public function index()
    {
        $artists = Artist::paginate(16);

        return view('artists', compact('artists'));
    }

    public function show($slug)
    {
        $slug;
        $artist = Artist::where('slug', $slug)->first();

        return view('artist', compact('artist'));        
    }
}
