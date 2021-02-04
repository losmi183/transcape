@extends('layouts.app')

@section('content')
    
<div class="space-100"></div>

<section id="realises">
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
                                    <h3 class="artist">Relative -</h3> 
                                    <p class="realise-name">Bambre</p>
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