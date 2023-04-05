@extends('layout.main')

@section('title')
Data Fasilitas
@endsection

@section('content')
<div class="pagetitle">
      <h1>Tabel Fasilitas</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">General</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Default Table</h5>
              <a href="/fasilitas/create" class="btn btn-primary">Tambah Data</a> 
                 <br><br>
              <!-- Default Table -->
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">ID Fasilitas</th>
                    <th scope="col">Nama Fasilitas</th>
                    <th scope="col">Harga Fasilitas</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Photo</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($fasilitas as $s)
                  <tr>
                         <td>{{ $s->fasilitas_id }}</td>
                         <td>{{ $s->nama_fasilitas }}</td>
                         <td>{{ $s->harga_fasilitas }}</td>
                         <td>{{ $s->keterangan}}</td>
                         <td>
                            <img width="250px" src="{{asset('storage/'.$s->photo)}}" alt="image">
                         </td>
                         <td>
                            <form action="/fasilitas/{{$s->fasilitas_id}}" method="post">
                             <a href="/fasilitas/{{$s->fasilitas_id}}/edit" class="btn btn-warning">Edit</a>
                             <a href="/fasilitas/{{$s->fasilitas_id}}" class="btn btn-info">View</a>
                                 @csrf
                                 @method('DELETE')
                                <button type="submit" name="delete" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              <!-- End Default Table Example -->
            </div>
          </div>
@endsection