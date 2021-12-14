@extends('template.base')
@section('content')
<div class="header pb-6 d-flex align-items-center" style="min-height: 500px; background-image: url({{url('public')}}/assets/img/brand/logo_janin.png); background-size: cover; background-position: center top;">
    <!-- Mask -->
    <span class="mask bg-gradient-default opacity-8"></span>
    <!-- Header container -->
    <div class="container-fluid d-flex align-items-center">
      <div class="row">
        <div class="col-lg-7 col-md-10">

          <h1 class="display-2 text-white">Hello,
            @if(Auth::check())
                          {{request()->user()->nama}}
                      @else
                          Silakan Login
            @endif
          </h1>
          <p class="text-white mt-0 mb-5">Ini merupakan halaman profil kamu. Kamu dapat melihat detail profil dan juga mengeditnya</p>
          </div>
      </div>
    </div>
  </div>
  <!-- Page content -->
  <div class="container-fluid mt--8">
    <div class="row">
      <div class="col-xl-12 order-xl-1">
        <div class="card">
          <div class="card-header">
            <div class="row align-items-center">
              <div class="col-8">
                <h3 class="mb-0">Informasi Saya</h3>
              </div>
              <div class="col-4 text-right">
                <a href="{{url('editprofilsaya')}}" class="btn btn-sm btn-primary">Edit Profil</a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <form>
              <div class="pl-lg-4">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label" for="input-username">Username</label>
                      <p>
                        @if(Auth::check())
                        {{request()->user()->username}}
                    @else
                        Silakan Login
          @endif
                      </p>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label" for="input-email">Email </label>
                      <p> @if(Auth::check())
                        {{request()->user()->email}}
                    @else
                        Silakan Login
          @endif</p>
                    </div>
                  </div>
                </div>
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label" for="input-first-name">Nama</label>
                    <p>
                      @if(Auth::check())
                      {{request()->user()->nama}}
                  @else
                      Silakan Login
        @endif
                    </p>
                  </div>
                </div>
              </div>
            </div>
          
              <hr class="my-4" />
              <!-- Address -->
              <h6 class="heading-small text-muted mb-4">Contact information</h6>
              <div class="pl-lg-4">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="form-control-label" for="input-address">Address</label>
                      <input id="input-address" class="form-control" placeholder="Home Address" value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09" type="text">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label" for="input-city">City</label>
                      <input type="text" id="input-city" class="form-control" placeholder="City" value="New York">
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label" for="input-country">Country</label>
                      <input type="text" id="input-country" class="form-control" placeholder="Country" value="United States">
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label" for="input-country">Postal code</label>
                      <input type="number" id="input-postal-code" class="form-control" placeholder="Postal code">
                    </div>
                  </div>
                </div>
              </div>
              <hr class="my-4" />
              <!-- Description -->
              <h6 class="heading-small text-muted mb-4">About me</h6>
              <div class="pl-lg-4">
                <div class="form-group">
                  <label class="form-control-label">About Me</label>
                  <textarea rows="4" class="form-control" placeholder="A few words about you ...">A beautiful Dashboard for Bootstrap 4. It is Free and Open Source.</textarea>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection