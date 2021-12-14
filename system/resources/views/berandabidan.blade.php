@extends('template.basebidan')
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
                  <h5 class="card-title text-uppercase text-muted mb-0">Ibu Hamil</h5>
                  <span class="h2 font-weight-bold mb-0">12</span>
                </div>
                <div class="col-auto">
                  <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                    <a href="{{url('bidan/profilibuhamil')}}">
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
                  <h5 class="card-title text-uppercase text-muted mb-0">Rekam Medis</h5>
                  <span class="h2 font-weight-bold mb-0">2</span>
                </div>
                <div class="col-auto">
                  <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                    <a href="{{url('bidan/rekammedis')}}">
                      <i class="ni ni-folder-17 text-light"> </i>
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
                  <h5 class="card-title text-uppercase text-muted mb-0">Konsultasi</h5>
                  <span class="h2 font-weight-bold mb-0">2</span>
                </div>
                <div class="col-auto">
                  <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                    <a href="{{url('bidan/konsultasi')}}">
                      <i class="ni ni-chat-round text-light"> </i>
                    </a>
                  </div>
                </div>
              </div>   
             </div>
          </div>
        </div>
      </div>
    
@endsection