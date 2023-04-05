@extends('layout.main')

@section('title')
Form Customers
@endsection

@section('content')
<div class="pagetitle">
      <h1>Form Layouts</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item active">Layouts</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <br></br>
                    <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <form action="/customers/{{$customers->id}}" method="post"> 
                    {{csrf_field()}}
                    @method('PUT')
            <form action="/customers" method="post"  enctype="multipart/form-data">
                @csrf
                    <div class="form-group">
                        <label for="customers_id">Customers ID</label>
                        <input type="text" class="form-control" 
                        required="required" name="customers_id" value="{{$buku->judul}}" placeholder="Masukkan id"></br>
                    </div>
                    <div class="form-group">
                        <label for="name_customers">Nama</label>
                        <input type="text" class="form-control" 
                        required="required" name="name_customers" placeholder="Masukkan Nama"></br>
                    </div>
                    <div class="form-group">
                        <label for="nik">NIK</label>
                        <input type="text" class="form-control" 
                        required="required" name="nik"></br>
                    </div class="form-group">
                    <div class="form-group">
                        <label for="jk">Jenis Kelamin</label>
                        <input type="text" class="form-control" 
                        required="required" name="jk"></br>
                    </div class="form-group">
                    <div class="form-group">
                        <label for="no_tlp">No Telepon</label>
                        <input type="text" class="form-control" 
                        required="required" name="no_tlp"></br>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" 
                        required="required" name="alamat"></br>
                    </div>
                    <br>
                    <button type="submit" name="add" class="btn btn-primary float-right">Add Data</button>
                    <a href='/customers' class="btn btn-info">Kembali</a>
            </form>
                </div>
            </div>
         </div>
    </div>
</div>
@endsection