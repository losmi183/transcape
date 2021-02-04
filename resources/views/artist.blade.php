@extends('layouts.app')

@section('content')
    
<div class="space-100"></div>

<section id="artist">
    <div class="container-fluid">
        <div class="d-flex justify-content-center">
            <img src="{{ $artist->photo }}" alt="" class="img-fluid">
        </div>
        <div class="space-40"></div>
        <div class="artist-caption">
            {{ $artist->name }}
        </div>
        
        <div class="space-40"></div>
        <div class="d-flex justify-content-center">
            <div class="line-glow"></div>
        </div>
        <div class="space-40"></div>

        <div class="row">
            <div class="col-xl-6 offset-xl-3 col-ld-8 offset-ld-2 col-md-12 artist-info">
                <div class="icons-wrapper d-flex justify-content-center">
                    <a href="{{ $artist->soundcloud }}"><img class="icon-img" src="/images/icons/soundcloud.png" alt=""></a>                              
                    <a href="{{ $artist->mixcloud }}"><img class="icon-img"  src="/images/icons/mixcloud.png" alt=""></a>                              
                    <a href="{{ $artist->hearthis }}"><img class="icon-img"  src="/images/icons/hearthis.png" alt=""></a>                              
                    <a href="{{ $artist->facebook }}"><img class="icon-img"  src="/images/icons/facebook.png" alt=""></a>                              
                    <a href="{{ $artist->instagram }}"><img class="icon-img"  src="/images/icons/instagram.png" alt=""></a>    
                </div>

                <div class="space-40"></div>
                <div class="d-flex justify-content-center">
                    <div class="line-glow"></div>
                </div>
                
                <div class="col-12">
                    <h4 class="text-center mt-5">Biography</h4>
                    <div class="bio">
                        <small>{{ $artist->bio }}</small>
                    </div>
                </div>

            </div>  
        </div>

    </div>
</section>

<div class="space-100"></div>

@endsection