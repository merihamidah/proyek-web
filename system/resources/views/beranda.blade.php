@extends('template.base')
@section('content')
<div class="row align-items-center py-4">
    <div class="col-lg-6 col-7">
      <h1 class="text-white d-inline-block mb-0">Selamat Datang</h1>
    </div>
</div>
    <div class="row">
        <div class="col-l-3 col-md-6">
          <div class="card card-stats">
            <!-- Card body -->
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <h5 class="card-title text-uppercase text-muted mb-0">User</h5>
                  <span class="h2 font-weight-bold mb-0">12</span>
                </div>
                <div class="col-auto">
                  <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                    <a href="{{url('admin/user')}}">
                      <i class="ni ni-circle-08 text-light"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-l-3 col-md-6">
          <div class="card card-stats">
            <!-- Card body -->
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <h5 class="card-title text-uppercase text-muted mb-0">Bidan</h5>
                  <span class="h2 font-weight-bold mb-0">2</span>
                </div>
                <div class="col-auto">
                  <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                    <a href="{{url('admin/profilbidan')}}">
                      <i class="ni ni-single-02 text-light"> </i>
                    </a>
                  </div>
                </div>
              </div>
             </div>
          </div>
        </div>
        <div class="col-l-3 col-md-6">
          <div class="card card-stats">
            <!-- Card body -->
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <h5 class="card-title text-uppercase text-muted mb-0">Rekomendasi Makanan</h5>
                  <span class="h2 font-weight-bold mb-0">10</span>
                </div>
                <div class="col-auto">
                  <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                    <a href="{{url('admin/rekomendasimakanan')}}">
                      <i class="ni ni-box-2 text-light"> </i>
                    </a>
                  </div>
                </div>
            </div>
            </div>
          </div>
        </div>
        <div class="col-ll-3 col-md-6">
          <div class="card card-stats">
            <!-- Card body -->
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <h5 class="card-title text-uppercase text-muted mb-0">Artikel</h5>
                  <span class="h2 font-weight-bold mb-0">5</span>
                </div>
                <div class="col-auto">
                  <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                    <a href="{{url('admin/artikel')}}">
                      <i class="ni ni-archive-2 text-light"> </i>
                    </a>
                  </div>
                </div>
            </div>
            </div>
          </div>
        </div>
      </div>
    
@endsection