@if(session('success'))
    <div class="alert alert-success m-2">{{session('success')}}</div>
@endif

@if(session('error'))
    <div class="alert alert-danger m-2">{{session('error')}}</div>
@endif