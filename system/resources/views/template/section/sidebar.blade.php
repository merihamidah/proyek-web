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
          <p>Admin</p>
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link {{checkRouteActive('admin/beranda')}}" href="{{ url('admin/beranda') }}" >
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Beranda</span>
              </a>
            </li>
             <li class="nav-item">
              <a class="nav-link {{checkRouteActive('admin/artikel')}}" href="{{ url('admin/artikel') }}">
                <i class="ni ni-archive-2 text-primary"></i>
                <span class="nav-link-text">Artikel</span>
              </a>
            </li> <li class="nav-item">
              <a class="nav-link {{checkRouteActive('admin/rekomendasimakanan')}}" href="{{ url('admin/rekomendasimakanan') }}">
                <i class="ni ni-box-2 text-primary"></i>
                <span class="nav-link-text">Rekomendasi Makanan</span>
              </a>
            </li> <li class="nav-item">
              <a class="nav-link {{checkRouteActive('admin/profilbidan')}}" href="{{ url('admin/profilbidan') }}">
                <i class="ni ni-single-02 text-primary"></i>
                <span class="nav-link-text">Profil Bidan</span>

              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{checkRouteActive('admin/user')}}" href="{{url('admin/user')}}">
                <i class="ni ni-single-02 text-yellow"></i>
                <span class="nav-link-text">Register User</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>