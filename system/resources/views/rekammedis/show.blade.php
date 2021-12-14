@extends('template.basebidan')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    Detail Profil Rekam Medis
                </div>
                <div class="card-body">
                    <h3>{{$rekammedis->nama}}</h3>
                    <br>
                    <p>{{$rekammedis->tempat_lahir}}, {{$rekammedis->tanggal_lahir}}</p>
                    <hr>
                    <p>
                        {{$rekammedis->no_telepon}}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection