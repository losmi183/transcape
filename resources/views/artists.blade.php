@extends('layouts.app')

@section('content')
    
<div class="space-100"></div>

<section id="artists">
    <div class="container-fluid p-0">
        <div class="row no-gutters">
            @foreach ($artists as $artist)
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 ">
                    <a href="#">
                        <div class="realise-box">
                            <div class="img-wrapper">
                                <a href="/artists/{{ $artist->slug }}">
                                    <img class="img-fluid" src="{{ $artist->photo }}" alt="">
                                </a>
                            </div>
                            <div class="text-wrapper">
                                <a href="/artists/{{ $artist->slug }}">
                                    <h3 class="artist">{{ $artist->name }} -</h3> 
                                    <p class="realise-name">{{ $artist->role }}</p>
                                </a>
                            </div>
                        </div>
                    </a>
                </div>                
            @endforeach            
        </div>
    </div>
</section>

<div class="space-100"></div>

@endsection