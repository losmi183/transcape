<!-- Navbar  -->
<div class="fixed">
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
</div>