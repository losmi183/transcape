<?php

namespace App\Http\Controllers;

use App\Models\Release;
use Illuminate\Http\Request;

class ReleasesController extends Controller
{
    public function index()
    {
        $releases = Release::orderBy('id', 'DESC')->paginate(24);

        return view('releases', compact('releases'));
    }
        
    public function show(Release $release)
    {
        return view('release', compact('release'));
    }
}
