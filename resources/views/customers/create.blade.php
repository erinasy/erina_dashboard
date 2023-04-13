@extends('layout.main')

@section('title')
Form Customers
@endsection

@section('content')
<div class="pagetitle">
      <h1>Form Customers</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ asset('dashboard')}}">Home</a></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item active">Layouts</li>
        </ol>
      </nav>
</div>
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-15">
            <div class="card">
            <br></br>
                    <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <form action="/customers" method="post"  enctype="multipart/form-data"> 
                    @csrf
                    <div class="form-group">
                        <label for="id">Customers ID</label>
                        <input type="text" class="form-control" 
                        required="required" name="id" placeholder="Masukkan id"></br>
                    </div>
                    <div class="form-group">
                        <label for="name_customers">Nama</label>
                        <input type="text" class="form-control" 
                        required="required" name="name_customers" placeholder="Masukkan Nama"></br>
                    </div>
                    <div class="form-group">
                        <label for="nik">NIK</label>
                        <input type="text" class="form-control" 
                        required="required" name="nik" placeholder="Masukkan NIK"></br>
                    </div class="form-group">
                    <div class="form-group">
                        <label for="jk">Jenis Kelamin</label>
                        <input type="text" class="form-control" 
                        required="required" name="jk" placeholder="Masukkan Jenis Kelamin"></br>
                    </div class="form-group">
                    <div class="form-group">
                        <label for="no_tlp">No Telepon</label>
                        <input type="text" class="form-control" 
                        required="required" name="no_tlp" placeholder="Masukkan No Telepon"></br>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" 
                        required="required" name="alamat" placeholder="Masukkan Alamat"></br>
                    </div>
                    <br>
                    <button type="submit" name="add" class="btn btn-success">Simpan Data</button>
                    <a href='/customers' class="btn btn-secondary">Kembali</a>
            </form>
                </div>
            </div>
         </div>
    </div>
</div>
  </main>
@endsection