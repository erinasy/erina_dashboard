@extends('layout.main')

@section('title')
Data Customers
@endsection

@section('content')
<div class="pagetitle">
      <h1>Tabel Customers</h1>
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
        <div class="col-lg-20">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Default Table</h5>
              <a href="/customers/create" class="btn btn-primary">Tambah Data</a> 
                 <br><br>
              <!-- Default Table -->
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">ID Customers</th>
                    <th scope="col">Nama Customers</th>
                    <th scope="col">NIK</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Nomor Telepon</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($customers as $a)
                  <tr>
                         <td>{{ $a->id }}</td>
                         <td>{{ $a->name_customers }}</td>
                         <td>{{ $a->nik }}</td>
                         <td>{{ $a->jk }}</td>
                         <td>{{ $a->no_tlp }}</td>
                         <td>{{ $a->alamat }}</td>
                         <td>
                            <form action="/customers/{{$a->id}}" method="post">
                             <a href="/customers/{{$a->id}}/edit" class=" btn btn-warning">Edit</a>
                             <a href="/customers/{{$a->id}}" class="btn btn-info">View</a>
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