@extends('template.basebidan')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        Tambah Data Rekam Medis
                    </div>
                    <div class="card-body">
                        <form action="{{url ('bidan/rekammedis')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="" class="control-label">Berat Badan Ibu</label>
                            <input type="text" class="form-control" name="berat_badan_ibu">
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label">Tekanan Darah Ibu</label>
                            <input type="text" class="form-control" name="tekanan_darah_ibu">
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label">Berat Janin</label>
                            <input type="text" class="form-control" name="berat_janin">
                        </div>                      
                        <div class="form-group">
                            <label for="" class="control-label">Panjang Janin</label>
                            <input type="text" class="form-control" name="panjang_janin">
                        </div>                      
                        <div class="form-group">
                            <label for="" class="control-label">Detak Jantung Janin</label>
                            <input type="text" class="form-control" name="detak_jantung_janin">
                        </div>                      
                        <div class="form-group">
                            <label for="" class="control-label">Tinggi Fundus</label>
                            <input type="text" class="form-control" name="tinggi_fundus">
                        </div>                      
                        <div class="form-group">
                            <label for="" class="control-label">LILA</label>
                            <input type="text" class="form-control" name="lila">
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label">Catatan</label>
                            <textarea name="catatan" class="form-control"></textarea>
                        </div>                     
                        <div class="form-group">
                            <label for="" class="control-label">Kunjungan Ke-</label>
                            <input type="text" class="form-control" name="kunjungan_ke">
                        </div>                  
                        <div class="form-group">
                            <label for="" class="control-label">Tanggal Pemeriksaaan</label>
                            <input type="date" class="form-control" name="tanggal_pemeriksaan">
                        </div>                      
                        <div class="form-group">
                            <label for="" class="control-label">Pemeriksaan Kembali</label>
                            <input type="date" class="form-control" name="tanggal_kembali">
                        </div>
                        <button class="btn btn-success float-right" ><i class="fa fa-save"> Simpan </i></button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
