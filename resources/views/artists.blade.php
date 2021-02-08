@extends('layouts.app')

@section('content')
    
<div class="space-100"></div>

<section id="artists">
    <div class="container-fluid p-0">
        <div class="row no-gutters">

            <div class="col-12 d-flex justify-content-center my-4">
                <a href="/artists" class="button1 mr-2 {{ (request()->is('artists')) ? 'active' : '' }}">All</a>
                <a href="/artists/liveacts" class="button1 mr-2 {{ (request()->is('artists/liveacts')) ? 'active' : '' }}">Live Acts</a>
                <a href="/artists/djs" class="button1 mr-2 {{ (request()->is('artists/djs')) ? 'active' : '' }}">Djs</a>
            </div>

        @if (isset($liveacts))
            <!-- Live Acts  -->
            <div class="col-12">
                <div class="space-50"></div>
                <h2 class="title-primary">Live Acts</h2>
                <div class="d-flex justify-content-center">
                    <div class="line-glow"></div>
                </div>
                <div class="space-50"></div>
            </div>

            @foreach ($liveacts as $liveact)
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 ">
                    <a href="#">
                        <div class="realise-box">
                            <div class="img-wrapper">
                                <a href="/artists/{{ $liveact->slug }}">
                                    <img class="img-fluid" src="{{ $liveact->photo }}" alt="">
                                </a>
                            </div>
                            <div class="text-wrapper">
                                <a href="/artists/{{ $liveact->slug }}">
                                    <h3 class="artist">{{ $liveact->name }} -</h3> 
                                    <p class="realise-name">{{ $liveact->role }}</p>
                                </a>
                            </div>
                        </div>
                    </a>
                </div>                
            @endforeach     
        @endif
            
        
        @if (isset($djs))
            <!-- Djs  -->
            <div class="col-12">
                <div class="space-50"></div>
                <h2 class="title-primary">Djs</h2>
                <div class="d-flex justify-content-center">
                    <div class="line-glow"></div>
                </div>
                <div class="space-50"></div>
            </div>

            @foreach ($djs as $dj)
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 ">
                    <a href="#">
                        <div class="realise-box">
                            <div class="img-wrapper">
                                <a href="/artists/{{ $dj->slug }}">
                                    <img class="img-fluid" src="{{ $dj->photo }}" alt="">
                                </a>
                            </div>
                            <div class="text-wrapper">
                                <a href="/artists/{{ $dj->slug }}">
                                    <h3 class="artist">{{ $dj->name }} -</h3> 
                                    <p class="realise-name">{{ $dj->role }}</p>
                                </a>
                            </div>
                        </div>
                    </a>
                </div>                
            @endforeach   
        @endif


        </div>
    </div>
</section>

<div class="space-100"></div>

@endsection