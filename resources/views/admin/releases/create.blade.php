@extends('admin.layout')

@section('content')

<div class="card-header">
    <span class='admin-title mr-3'>Add new Release</span>            
</div>

<div class="card-body">   

    <form method="POST" action="/admin/releases" enctype="multipart/form-data">
        @csrf

        {{-- Artist  --}}
        <div class="form-group row">
            <label class="col-md-4 col-form-label text-md-right">Artist</label>
            <div class="col-md-6">
                <input id="artist" type="text" class="form-control @error('artist') is-invalid @enderror" name="artist" value="{{ old('artist') }}"  autocomplete="artist" autofocus>

                @error('artist')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        {{-- title  --}}
        <div class="form-group row">
            <label class="col-md-4 col-form-label text-md-right">Title</label>
            <div class="col-md-6">
                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}"  autocomplete="title" autofocus>

                @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        {{-- slug  --}}
        <div class="form-group row">
            <label class="col-md-4 col-form-label text-md-right">Slug</label>

            <div class="col-md-6">
                <input id="slug" type="text" class="form-control @error('slug') is-invalid @enderror" name="slug" value="{{ old('slug') }}"  autocomplete="slug" autofocus>

                @error('slug')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        
        {{-- Release date  --}}
        <div class="form-group row">
            <label class="col-md-4 col-form-label text-md-right">Release date</label>
            <div class="col-md-6">
                <input id="release_date" type="date" class="form-control @error('release_date') is-invalid @enderror" name="release_date" value="{{ old('release_date') }}"  autocomplete="release_date" autofocus>

                @error('release_date')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        {{-- Beatport  --}}
        <div class="form-group row">
            <label class="col-md-4 col-form-label text-md-right">Beatport</label>
            <div class="col-md-6">
                <input id="beatport" type="text" class="form-control @error('beatport') is-invalid @enderror" name="beatport" value="{{ old('beatport') }}"  autocomplete="beatport" autofocus>

                @error('beatport')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        {{-- juno  --}}
        <div class="form-group row">
            <label class="col-md-4 col-form-label text-md-right">Juno</label>
            <div class="col-md-6">
                <input id="juno" type="text" class="form-control @error('juno') is-invalid @enderror" name="juno" value="{{ old('juno') }}"  autocomplete="juno" autofocus>

                @error('juno')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        {{-- soundcloud  --}}
        <div class="form-group row">
            <label class="col-md-4 col-form-label text-md-right">Soundcloud</label>
            <div class="col-md-6">
                <input id="soundcloud" type="text" class="form-control @error('soundcloud') is-invalid @enderror" name="soundcloud" value="{{ old('soundcloud') }}"  autocomplete="soundcloud" autofocus>

                @error('soundcloud')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>        


        {{-- cover  --}}
        <div class="form-group row">
            <label class="col-md-4 col-form-label text-md-right">cover</label>

            <div class="col-md-6">                                  
                <input type="file" name="cover" class="form-control @error('cover') is-invalid @enderror">

                @error('cover')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <small class="d-block mt-1 text-dark"><span class="text-danger">*</span>Slike bi trebalo da budu širine 1920px ili veće kako bi zauzele celu širinu ekrana na velikim rezolucijama</small>
                <small class="d-block text-dark"><span class="text-danger">*</span>Podržani formati: jpeg, png, jpg, gif, maksimalna veli;ina fajla: 5 Mb</small>
            </div>
        </div>

        <div class="col-md-6 offset-md-4">
            <button class="btn btn-secondary">Sačuvaj</button>
            <a href="/actions" class="btn btn-outline-secondary">Poništi</a>
        </div>

</div>

@endsection