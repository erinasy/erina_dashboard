@extends('layout.main')

@section('title')
Data Type Kamar
@endsection

@section('content')
<div class="pagetitle">
      <h1>Tabel Type Kamar</h1>
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
              <a href="/typeKamar/create" class="btn btn-primary">Tambah Data</a> 
                 <br><br>
              <!-- Default Table -->
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">ID Type Kamar</th>
                    <th scope="col">Type Kamar</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($typeKamar as $a)
                  <tr>
                         <td>{{ $a->typeKamar_id }}</td>
                         <td>{{ $a->name_typeKamar}}</td>
                         <td>{{ $a->harga}}</td>
                         <td>
                            <form action="/typeKamar/{{$a->typeKamar_id}}" method="post">
                             <a href="/typeKamar/{{$a->typeKamar_id}}/edit" class="btn btn-warning">Edit</a>
                             <a href="/typeKamar/{{$a->typeKamar_id}}" class="btn btn-info">View</a>
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