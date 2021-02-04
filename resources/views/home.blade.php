@extends('layouts.app')

@section('content')


<!-- NEWS SLIDESHOW  -->
<div class="space-100"></div>
<h2 class="title-primary">NEWS</h2>
<div class="d-flex justify-content-center">
    <div class="line-glow"></div>
</div>
<div class="space-50"></div>

<section id="slideshow">
    <!-- <div class="container"> -->
    <div id="demo" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ul class="carousel-indicators">
            @foreach ($news as $item)
                <li data-target="#demo" data-slide-to="{{ $loop->index }}" class="{{ $loop->index == 0 ? 'active' : '' }}"></li>
            @endforeach
        </ul>      
        <!-- The slideshow -->
        <div class="carousel-inner">
            @foreach ($news as $item)
            <div class="carousel-item {{ $loop->index == 0 ? 'active' : '' }}">
                <img src="{{ $item->image }}">
            </div>
            @endforeach
        </div>      
        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>      
    </div>
    <!-- </div> -->
</section>

<!-- REALISES  -->
<div class="space-150"></div>
<h2 class="title-primary">RELEASES</h2>
<div class="d-flex justify-content-center">
    <div class="line-glow"></div>
</div>
<div class="space-50"></div>

<section id="realises-short">
    <div class="container-fluid p-0">
        <div class="row no-gutters">
            @foreach ($releases as $release)
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 ">
                    <a href="#">
                        <div class="realise-box">
                            <div class="img-wrapper">
                                <a href="/releases/{{ $release->id }}">
                                    <img class="img-fluid" src="{{ $release->cover }}" alt="">
                                </a>
                            </div>
                            <div class="text-wrapper">
                                <a href="/releases/{{ $release->id }}">
                                    <h3 class="artist">{{ $release->artist }}</h3> 
                                    <p class="realise-name">{{ $release->title }}</p>
                                </a>
                            </div>
                        </div>
                    </a>
                </div>                
            @endforeach            
        </div>
    </div>
</section>

<!-- ARTISTS  -->
<div class="space-150"></div>
<h2 class="title-primary">Artists</h2>
<div class="d-flex justify-content-center">
    <div class="line-glow"></div>
</div>
<div class="space-50"></div>

<section id="artists">
    <div class="container-fluid p-0">
        <div class="row no-gutters">
            @foreach ($artists as $artist)
                <div class="col-xl-3 col-lg-6 col-md-6 col-12" >
                    <div class="artist-box">
                        <div class="img-wrapper">
                            <a href="/artists/{{ $artist->slug }}">
                                <img src="{{ $artist->photo }}" alt="">
                            </a>
                        </div>
                        <div class="text-wrapper">
                            <a href="/artists/{{ $artist->slug }}">
                                <h3>{{ $artist->name }}</h3>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach    
        </div>
    </div>
</section>
    

<!-- YOUTUBE  -->
<div class="space-150"></div>
<h2 class="title-primary">YOUTUBE VIDEOS</h2>
<div class="d-flex justify-content-center">
    <div class="line-glow"></div>
</div>
<div class="space-50"></div>

<section id="youtube">
<div class="container-fluid">
    <div class="row">

    <!-- <a href="https://www.youtube.com/watch?v=sjUhEK426xo">
        <img src="http://img.youtube.com/vi/sjUhEK426xo/0.jpg"/>
    </a> -->

    @foreach ($youtubes as $youtube)
        <div class="col-lg-4">
            <div class="iframe-container">                
                <iframe width="560" height="315" src="{{ $youtube->link }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            </a>
        </div>
    @endforeach

    </div>
</div>
</section>


<!-- INSTAGRAM  -->
{{-- <div class="space-150"></div>
<h2 class="title-primary">Transcape on instagram</h2>
<div class="d-flex justify-content-center">
    <div class="line-glow"></div>
</div>
<div class="space-50"></div>

<section id="instagram">
<div id="instagram-feed-demo" class="instagram_feed"></div>
</section> --}}


@endsection
