@extends('layout.main')

@section('title')
Form Kamar
@endsection

@section('content')
<div class="pagetitle">
      <h1>Form Kamar</h1>
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
            <form action="/kamar" method="post"  enctype="multipart/form-data"> 
                    @csrf
                    <div class="form-group">
                        <label for="kamar_id">ID Kamar</label>
                        <input type="text" class="form-control" 
                        required="required" name="kamar_id" placeholder="Masukkan id"></br>
                    </div>
                    <div class="form-group">
                        <label for="lokasi">Lokasi</label>
                        <input type="text" class="form-control" 
                        required="required" name="lokasi" placeholder="Masukkan Lokasi"></br>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="form-label mt-4">Kode Type Kamar</label>
                        {{-- dropdown rakbuku --}}
                        <div class="drop-down">
                            <div class="btn-group">
                                <select id="typeKamar-dropdown" class="form-control" name="typeKamar_id">
                                    <option value="">-- Pilih Type Kamar--</option>
                                    @foreach ($typeKamar as $t)
                                    <option value="{{$t->typeKamar_id}}">
                                        {{$t->typeKamar_id}} - {{$t->name_typeKamar}}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="no_kamar">No Kamar</label>
                        <input type="text" class="form-control" 
                        required="required" name="no_kamar" placeholder="Masukkan Jenis Kelamin"></br>
                    </div class="form-group">
                    <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <input type="text" class="form-control" 
                        required="required" name="keterangan" placeholder="Masukkan No Telepon"></br>
                    </div>
                    <div class="mb-3">
                      <label for="photo" class="form-label">Photo</label>
                      <input class="form-control" type="file" id="photo" name="photo">
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
  </main>
@endsection