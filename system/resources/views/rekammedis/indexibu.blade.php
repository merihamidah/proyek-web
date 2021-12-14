@extends('template.basebidan')
@section('content')

<div class="container">
    <div class="row">
      <div class="col">
        <div class="card">
          <!-- Card header -->
          <div class="card-header border-0">
            <h3 class="mb-0">Data Rekam Medis ibuuuuuuuuuuuuu</h3>
          </div>
          <!-- Light table -->
          <div class="table-responsive">
            <table class="table align-items-center table-flush">
              <thead class="thead-light">
                <tr>
                  <th scope="col" >No</th>
                  <th scope="col" >Aksi</th>
                  <th scope="col" >Nama</th>
                  <th scope="col" >Kunjungan Ke-</th>
                  <th scope="col" > Pemeriksaan Kembali</th>
                </tr>
              </thead>
              <tbody class="list">
                @foreach ($list_rekammedis  as $rekammedis)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>
                        <div class="btn-group">
                                <a href="{{url('bidan/rekammedis', $rekammedis->id)}}" class="btn btn-dark"><i class="fa fa-info"></i></a>
                                <a href="{{url('bidan/rekammedis', $rekammedis->id)}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                @include('template.utils.delete', ['url' => url('bidan/rekammedis', $rekammedis->id)])
                        </div>
                    </td>
                    <td>{{$rekammedis->nama}}</td>
                    <td>{{$rekammedis->kunjungan_ke}}</td>
                    <td>{{$rekammedis->tanggal_kembali}}</td>
                </tr>
                @endforeach 
              </tbody>
            </table>
          </div>
          <!-- Card footer -->
          
        </div>
      </div>
    </div>
</div>
  
@endsection