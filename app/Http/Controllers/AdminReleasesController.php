<?php

namespace App\Http\Controllers;

use App\Models\Release;
use Illuminate\Http\Request;

class AdminReleasesController extends Controller
{
    public function index()
    {
        $releases = Release::paginate(5);

        return view('admin.releases.index', compact('releases'));
    }

    public function create()
    {
        return view('admin.releases.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'artist' => 'required|max:255',
            'title' => 'required|max:255',
            'slug' => 'required|max:255',
            'release_date' => 'sometimes',
            'beatport' => 'max:255',
            'juno' => 'max:255',
            'soundcloud' => 'max:255',
            'cover' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2000',
        ]);      

        $image = $request->file('cover');

        $extension = $image->getClientOriginalExtension();         
        
        $image_full = $image->storeAs('/images/releases', $data['slug'].'.'.$extension);  

        
        $release = Release::create($data);
        $release->cover = $image_full;
        $release->save();

        return redirect()->route('admin.releases')->with('success', 'New Release created');
    }

}
