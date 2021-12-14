@extends('template.basebidan')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    <h3 class="mb-0">Detail  Profil Ibu Hamil</h3>
                    <a href="{{url('bidan/profilibuhamil/indexibu', $profilibuhamil->id)}}" class="btn btn-dark float-right"> Rekam Medis</a>

                </div>
                <div class="card-body">
                    <h3>{{$profilibuhamil->nama}}</h3>
                    <hr>
                    <label for="">Tempat, Tanggal Lahir:</label>
                    <br>
                    <p>{{$profilibuhamil->tempat_lahir}}, {{$profilibuhamil->tanggal_lahir}}</p>
                    <br>
                    <label for=""> Alamat</label>
                    <br>
                    <p>{{$profilibuhamil->alamat}}</p>
                    <br>
                    <label for=""> No. Handphone</label>
                    <p>
                        {{$profilibuhamil->no_telepon}}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection