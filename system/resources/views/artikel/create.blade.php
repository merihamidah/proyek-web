@extends('template.base')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        Tambah Data Artikel
                    </div>
                    <div class="card-body">
                        <form action="{{url ('admin/artikel')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="" class="control-label">Judul</label>
                            <input type="text" class="form-control" name="judul">
                        </div>                        
                        <div class="form-group">
                            <label for="" class="control-label">Foto</label>
                            <input type="file" class="form-control" name="foto" accept=" .png">
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label">Deskripsi</label>
                            <textarea name="deskripsi" class="form-control"></textarea>
                        </div>
                        <button class="btn btn-success float-right" ><i class="fa fa-save"> Simpan </i></button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
