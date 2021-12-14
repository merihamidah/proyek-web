 @php
     function checkRouteActive($route){
       if(Route::current()->uri  == $route) return 'active';
     }
 @endphp
 
 
 <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="{{ url('public') }}/assets/img/brand/logo_janin.png" class="navbar-brand-img" alt="...">
          <p>Bidan</p>
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link {{checkRouteActive('bidan/berandabidan')}}" href="{{ url('bidan/berandabidan') }}" >
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Beranda</span>
              </a>
            </li>
            </li> <li class="nav-item">
              <a class="nav-link {{checkRouteActive('bidan/profilibuhamil')}}" href="{{ url('bidan/profilibuhamil') }}">
                <i class="ni ni-circle-08 text-primary"></i>
                <span class="nav-link-text">Profil Ibu Hamil</span>
              </a>
            </li> <li class="nav-item">
              <a class="nav-link {{checkRouteActive('bidan/rekammedis')}}" href="{{ url('bidan/rekammedis') }}">
                <i class="ni ni-folder-17 text-primary"></i>
                <span class="nav-link-text">Rekam Medis Ibu Hamil</span>

              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>