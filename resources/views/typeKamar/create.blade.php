@extends('layout.main')

@section('title')
Form Type Kamar
@endsection

@section('content')
<div class="pagetitle">
      <h1>Form Type Kamar</h1>
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
            <form action='/typeKamar' method="post"  enctype="multipart/form-data"> 
                    @csrf
                    <div class="form-group">
                        <label for="typeKamar_id">Type Kamar ID</label>
                        <input type="text" class="form-control" 
                        required="required" name="typeKamar_id" placeholder="Masukkan id"></br>
                    </div>
                    <div class="form-group">
                        <label for="name_typeKamar">Type Kamar</label>
                        <input type="text" class="form-control" 
                        required="required" name="name_typeKamar" placeholder="Masukkan Type Kamar"></br>
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="text" class="form-control" 
                        required="required" name="harga" placeholder="Masukkan Harga"></br>
                    </div class="form-group">
                    <br>
                    <button type="submit" name="add" class="btn btn-primary float-right">Add Data</button>
                    <a href='/typeKamar' class="btn btn-info">Kembali</a>
            </form>
                </div>
            </div>
         </div>
    </div>
</div>
  </main>
@endsection