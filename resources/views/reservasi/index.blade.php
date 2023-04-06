@extends('layout.main')

@section('title')
Data Reservasi
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
              <a href="/reservasi/create" class="btn btn-primary">Tambah Data</a> 
                 <br><br>
              <!-- Default Table -->
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">ID Reservasi</th>
                    <th scope="col">ID Customers</th>
                    <th scope="col">ID Kamar</th>
                    <th scope="col">ID Fasilitas</th>
                    <th scope="col">Check In</th>
                    <th scope="col">Check Out</th>
                    <th scope="col">Total Pembayaran</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($reservasi as $data)
                  <tr>
                         <td>{{ $data->reservasi_id }}</td>
                         <td>{{ $data->customersReservasi->name_customers}}</td>
                         <td>{{ $data->kamarReservasi->kamar_id}}</td>
                         <td>{{ $data->fasilitasReserfasi->fasilitas_id}}</td>
                         <td>{{ $data->check_in}}</td>
                         <td>{{ $data->check_out}}</td>
                         <td>{{ $data->total_pembayaran}}</td>
                         <td>
                            <form action="/reservasi/{{$data->reservasi_id}}" method="post">
                             <a href="/reservasi/{{$data->reservasi_id}}/edit" class="btn btn-warning">Edit</a>
                             <a href="/reservasi/{{$data->reservasi_id}}" class="btn btn-info">View</a>
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