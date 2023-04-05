@extends('layout.main')

@section('title')
Form Fasilitas
@endsection

@section('content')
<div class="pagetitle">
      <h1>Form Fasilitas</h1>
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
            <form action="/fasilitas" method="post"  enctype="multipart/form-data"> 
                    @csrf
                    <div class="form-group">
                        <label for="fasilitas_id">Fasilitas ID</label>
                        <input type="text" class="form-control" 
                        required="required" name="fasilitas_id" placeholder="Masukkan id"></br>
                    </div>
                    <div class="form-group">
                        <label for="nama_fasilitas">Nama Fasilitas</label>
                        <input type="text" class="form-control" 
                        required="required" name="nama_fasilitas" placeholder="Masukkan Nama"></br>
                    </div>
                    <div class="form-group">
                        <label for="harga_fasilitas">Harga Fasilitas</label>
                        <input type="text" class="form-control" 
                        required="required" name="harga_fasilitas" placeholder="Masukkan Harga"></br>
                    </div class="form-group">
                    <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <input type="text" class="form-control" 
                        required="required" name="keterangan" placeholder="Masukkan Keterangan"></br>
                    </div class="form-group">
                    <div class="mb-3">
                      <label for="photo" class="form-label">Photo</label>
                      <input class="form-control" type="file" id="photo" name="photo">
                    </div>
                    <br>
                    <button type="submit" name="add" class="btn btn-primary float-right">Add Data</button>
                    <a href='/fasilitas' class="btn btn-info">Kembali</a>
            </form>
                </div>
            </div>
         </div>
    </div>
</div>
  </main>
@endsection