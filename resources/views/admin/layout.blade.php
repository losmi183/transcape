<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  {{-- Csrf token  --}}
  <meta name="csrf-token" content="{{ csrf_token() }}">    
  
  {{-- Fontawsome Icons with my KIT CODE  --}}
  <script src="https://kit.fontawesome.com/7532718861.js"></script>
  
  {{-- <link rel="icon" href="{!! asset('/img/icon.png') !!}"/> --}}
  <title>Admin | Dashboard</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  
  <!-- Custom styles for this template -->
  <link href="/css/admin.css" rel="stylesheet">

  {{-- Extra css  --}}
  @yield('extra-css')

</head>

<body>
  <div id="app">
      
      <!-- Top Navbar  -->
    <div id="top-area">
        <button id="menu-toggle" title="hide/show sidebar" class="hamburger mr-3"><i class="fas fa-bars"></i></button>
        <a style="text-decoration: none" href="/admin"><h3 class="mt-0 secondary-color">Transcape Admin panel</h3></a> 
    </div>


    <div id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar">
            <ul class="sidebar-list">
                {{-- <li class="sidebar-item"><a href="/admin"><i class="fas fa-tachometer-alt"></i></i>Admin</a></li> --}}               
                <li class="sidebar-item"><a href="/admin"><i class="fas fa-home"></i></i>Dashboard</a></li>
                <li class="sidebar-item"><a href="/admin/news"><i class="far fa-calendar-alt"></i>News</a></li>   
                <li class="sidebar-item"><a href="/admin/releases"><i class="fas fa-compact-disc"></i></i>Releases</a></li>                   
                
                <li class="sidebar-item"><a href="/"><i class="fab fa-font-awesome-flag"></i>Front end</a></li>
                <li class="sidebar-item"><a href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                    <i class="fas fa-sign-out-alt mr-2 enlarge-mobile"></i><span class="hide-mobile">Logout</span>
                  </a></li>
                  

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>

    
        </div>
        <!-- /#sidebar-wrapper -->

        <div id="content">

          <div>
            @include('admin.messages')
          </div>

              <div class="container-fluid p-0">
                  <div class="row no-gutters">
                      <div class="col-12">
                          <div class="card">
                              
                              @yield('content')
                              
                          </div>
                      </div>
                  </div>
              </div>

        </div>
    </div>

  </div>   {{-- #app div for vue.js  --}}

  <script src="/js/app.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#sidebar").toggleClass("toggled");
    });
  </script>

  {{-- extra JS  --}}
  @yield('extra-js')

</body>

</html>
