@extends('template.base')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        Edit Data Profil Bidan
                    </div>
                    <div class="card-body">
                        <form action="{{url ('admin/profilbidan', $profilbidan->id)}}" method="post">
                        @csrf
                        @method("PUT") <div class="form-group">
                            <label for="" class="control-label">Nama</label>
                            <input type="text" class="form-control" name="nama" value="{{$profilbidan->nama}}">
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label">Tempat Lahir</label>
                            <input type="text" class="form-control" name="tempat_lahir" value="{{$profilbidan->tempat_lahir}}">
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label">Tanggal Lahir</label>
                            <input type="date" class="form-control" name="tanggal_lahir" value="{{$profilbidan->tanggal_lahir}}">
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label">Alamat</label>
                            <input type="text" class="form-control" name="alamat" value="{{$profilbidan->alamat}}">
                        </div>                        
                        <div class="form-group">
                            <label for="" class="control-label">No.Telepon</label>
                            <input type="text" class="form-control" name="no_telepon"  value="{{$profilbidan->no_telepon}}">
                        </div>
                        <button class="btn btn-success float-right" ><i class="fa fa-save"> Simpan </i></button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
