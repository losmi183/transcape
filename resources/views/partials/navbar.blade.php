<!-- Navbar  -->
{{-- <div class="fixed">
    <div class="line-fx-up"></div>
    <nav id="main-nav">
        <ul>

            <li class="nav-item">
                <a <a class=" {{ (request()->is('/')) ? 'active' : '' }}" href="/">
                  <div class="dot top-left"></div>
                  <div class="dot top-left-2"></div>
                  <div class="dot bottom-right"></div>
                  <div class="dot bottom-right-2"></div>
                HOME
                </a>
              </li>


            <li><a class=" {{ (request()->is('releases*')) ? 'active' : '' }}" href="/releases">
                <div class="dot top-left"></div>
                <div class="dot top-left-2"></div>
                <div class="dot bottom-right"></div>
                <div class="dot bottom-right-2"></div>
                RELEASES
            </a></li>
            <li><a class=" {{ (request()->is('artists*')) ? 'active' : '' }}" href="/artists">
                <div class="dot top-left"></div>
                <div class="dot top-left-2"></div>
                <div class="dot bottom-right"></div>
                <div class="dot bottom-right-2"></div>
                ARTISTS
            </a></li>
            <li><a class=" {{ (request()->is('contact*')) ? 'active' : '' }}" href="/contact">
                <div class="dot top-left"></div>
                <div class="dot top-left-2"></div>
                <div class="dot bottom-right"></div>
                <div class="dot bottom-right-2"></div>
                CONTACTS
            </a></li>
        </ul>
    </nav>
    <div class="line-fx-down"></div>
</div> --}}


<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed">

    {{-- <a class="navbar-brand" href="#">Test Project</a> --}}
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        {{-- <span class="navbar-toggler-icon"></span> --}}
        <i class="fas fa-bars"></i>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto">
        <li class="nav-item">
            <div class="dot top-left"></div>
            <div class="dot top-left-2"></div>
            <div class="dot bottom-right"></div>
            <div class="dot bottom-right-2"></div>
            <a class="nav-link {{ (request()->is('/')) ? 'active' : '' }}" href="/">HOME</a></li>
        <li class="nav-item">
            <div class="dot top-left"></div>
            <div class="dot top-left-2"></div>
            <div class="dot bottom-right"></div>
            <div class="dot bottom-right-2"></div>
            <a class="nav-link {{ (request()->is('releases*')) ? 'active' : '' }}" href="/releases">RELEASES</a></li>
        <li class="nav-item">
            <div class="dot top-left"></div>
            <div class="dot top-left-2"></div>
            <div class="dot bottom-right"></div>
            <div class="dot bottom-right-2"></div>
            <a class="nav-link {{ (request()->is('artists*')) ? 'active' : '' }}" href="/artists">ARTISTS</a></li>
        <li class="nav-item">
            <div class="dot top-left"></div>
            <div class="dot top-left-2"></div>
            <div class="dot bottom-right"></div>
            <div class="dot bottom-right-2"></div>
            <a class="nav-link {{ (request()->is('contacts*')) ? 'active' : '' }}" href="/contact">CONTACT</a></li>
        </ul>
    </div>
  </nav>