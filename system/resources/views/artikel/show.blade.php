@extends('template.base')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    Detail Artikel
                </div>
                <div class="card-body">
                    <h3>{{$artikel->judul}}</h3>
                    <br>
                    <p>Tanggal Publikasi: {{$artikel->created_at}} </p>
                    <hr>
                    <p>                       
                        <img src="{{ url("public", $artikel->foto)}}" alt=".."  style="
                        width: 500px;
                        height: 400px;" >
                    </p>
                    <p>
                        {!! nl2br($artikel->deskripsi) !!}
                    </p>
                   
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection