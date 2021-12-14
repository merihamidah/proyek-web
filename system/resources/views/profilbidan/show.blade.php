@extends('template.base')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    Detail Profil Bidan
                </div>
                <div class="card-body">
                    <h3>{{$profilbidan->nama}}</h3>
                    <hr>
                    <label for="">Tempat, Tanggal Lahir:</label>
                    <br>
                    <p>{{$profilbidan->tempat_lahir}}, {{$profilbidan->tanggal_lahir}}</p>
                    <br>
                    <label for=""> Alamat</label>
                    <br>
                    <p>{{$profilbidan->alamat}}</p>
                    <br>
                    <label for=""> No. Handphone</label>
                    <p>
                        {{$profilbidan->no_telepon}}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection