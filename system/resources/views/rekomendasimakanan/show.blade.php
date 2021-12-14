@extends('template.base')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    Detail Rekomendasi Makanan
                </div>
                <div class="card-body">
                    <h3>{{$rekomendasimakanan->judul}}</h3>
                    <br>
                    <p>Tanggal Publikasi:</p>
                    <hr>
                    <p>
                        <img src="{{ url("public", $rekomendasimakanan->foto)}}" alt="">
                    </p>
                    <p>
                        {!! nl2br($rekomendasimakanan->deskripsi) !!}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection