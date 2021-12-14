@extends('template.base')
@section('content')
<div class="container">
    <div class="row">
      <div class="col">
        <div class="card">
          <!-- Card header -->
          <div class="card-header border-0">
            <h3 class="mb-0">Data User</h3>
            <a href="{{url('admin/user/create')}}" class="btn btn-dark float-right"><i class="fa fa-plus"> Tambah Data </i></a>

          </div>
          <!-- Light table -->
          <div class="table-responsive">
            <table class="table align-items-center table-flush">
              <thead class="thead-light">
                <tr>
                  <th scope="col" >No</th>
                  <th scope="col" >Aksi</th>
                  <th scope="col" >Nama</th>
                  <th scope="col" >Email</th>

                </tr>
              </thead>
              <tbody class="list">
                @foreach ($list_user  as $user)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>
                            <div class="btn-group">
                                <a href="{{url('admin/user', $user->id)}}" class="btn btn-dark"><i class="fa fa-info"></i></a>
                                <a href="{{url('admin/user', $user->id)}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                @include('template.utils.delete', ['url' => url('admin/user', $user->id)])
                            </div>
                    </td>
                    <td>{{$user->nama}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->level}}</td>


                </tr>
                @endforeach  
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection