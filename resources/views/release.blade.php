@extends('layouts.app')

@section('content')
    
<div class="space-100"></div>

<section id="release">
    <div class="container-fluid">
        <div class="d-flex justify-content-center">
            <img src="/images/releases/rel-1.jpg" alt="" class="img-fluid">
        </div>
        <div class="space-40"></div>
        <div class="realise-caption">
            {{ $release->artist }} - {{ $release->title }}
        </div>
        
        <div class="space-40"></div>
        <div class="d-flex justify-content-center">
            <div class="line-glow"></div>
        </div>
        <div class="space-40"></div>

        <div class="row">
            <div class="col-xl-6 offset-xl-3 col-ld-8 offset-ld-2 col-md-12 release-info">

                <div class="row">
                    <div class="col-md-6">
                        <h4  class="secondary-color">Release info</h4>
                        <p>Title: {{ $release->artist }}</p>
                        <p>artist: {{ $release->title }}</p>
                        <p>Release date: 2020-08-31</p>
                    </div>
                    <div class="col-md-6 text-right">
                        <h4 class="secondary-color">Listen and buy</h4>
                        <div class="icons-wrapper">
                            @if ($release->beatport)
                                <a href="{{ $release->beatport }}">
                                    <img src="/images/icons/beatport.png" alt="beatport">
                                </a>                              
                            @endif
                            @if ($release->juno)
                                <a href="{{ $release->juno }}">
                                    <img src="/images/icons/juno.png" alt="juno ">
                                </a>                              
                            @endif
                            @if ($release->soundcloud)
                                <a href="{{ $release->soundcloud }}">
                                    <img src="/images/icons/soundcloud.png" alt="soundcloud">
                                </a>                              
                            @endif    
                        </div>
                    </div>
                </div>
            </div>  
        </div>

    </div>
</section>

<div class="space-100"></div>

@endsection