@extends('layout.main')

@section('title')
Data Kamar
@endsection

@section('content')
<div class="pagetitle">
      <h1>Tabel Kamar</h1>
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
              <a href="/kamar/create" class="btn btn-primary">Tambah Data</a> 
                 <br><br>
              <!-- Default Table -->
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">ID Kamar</th>
                    <th scope="col">Lokasi</th>
                    <th scope="col">Type Kamar_ID</th>
                    <th scope="col">No_Kamar</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Photo</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($kamar as $a)
                  <tr>
                         <td>{{ $a->kamar_id }}</td>
                         <td>{{ $a->lokasi}}</td>
                         <td>{{ $a->typeKamar_id}}</td>
                         <td>{{ $a->no_kamar}}</td>
                         <td>{{ $a->keterangan}}</td>
                         <td>
                            <img width="150px" src="{{asset('storage/'.$a->photo)}}" alt="image">
                         </td>
                         <td>
                            <form action="/kamar/{{$a->kamar_id}}" method="post">
                             <a href="/kamar/{{$a->kamar_id}}/edit" class="btn btn-warning">Edit</a>
                             <a href="/kamar/{{$a->kamar_id}}" class="btn btn-info">View</a>
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