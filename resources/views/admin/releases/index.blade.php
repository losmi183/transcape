@extends('admin.layout')

@section('content')

<div id="projects-index">

    <h1 class='admin-title p-3'>
        Releases
        <a  href="/admin/releases/create" class="btn btn-primary ml-3">Add Release</a>
    </h1>

    <table class="table">
        <tr>
            <th>#</th>
            <th>Artist</th>
            <th>Title</th>
            <th>Cover</th>
            <th>Release Date</th>
            <th></th>
        </tr>
        @foreach ($releases as $release)
        <tr>
            <td>{{$release->id}}</td>
            <td>{{$release->artist}}</td>
            <td>{{$release->title}}</td>
            <td>{{$release->cover}}</td>
            <td>{{ formatDate($release->release_date) }}</td>
        </tr>
        @endforeach
    </table>

    <div class="d-flex justify-content-center my-5">
        {{ $releases->links() }}
    </div>

</div>


@endsection