@extends('layout.main')

@section('title')
Data Room
@endsection

@section('content')
<div class="pagetitle">
      <h1>Tabel Type Room</h1>
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
              <a href="/type/create" class="btn btn-primary">Tambah Data</a> 
                 <br><br>
              <!-- Default Table -->
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">ID Type</th>
                    <th scope="col">Name Type</th>
                    <th scope="col">Total</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($typeRooms as $a)
                  <tr>
                         <td>{{ $a->id }}</td>
                         <td>{{ $a->name_type}}</td>
                         <td>{{ $a->total}}</td>
                         <td>
                            <form action="/type/{{$a->id}}" method="post">
                             <a href="/type/{{$a->id}}/edit" class="btn btn-warning">Edit</a>
                             <a href="/type/{{$a->id}}" class="btn btn-info">View</a>
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