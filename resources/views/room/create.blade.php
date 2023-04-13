@extends('layout.main')

@section('title')
Form Customers
@endsection

@section('content')
<div class="pagetitle">
      <h1>Form Room Create</h1>
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
            <form action="/room" method="post"  enctype="multipart/form-data"> 
                    @csrf
                    <div class="form-group">
                        <label for="id">ID Room</label>
                        <input type="text" class="form-control" 
                        required="required" name="id" placeholder="Masukkan id"></br>
                    </div>
                    <div class="form-group">
                        <label for="lokasi_rooms">Lokasi</label>
                        <input type="text" class="form-control" 
                        required="required" name="lokasi_rooms" placeholder="Masukkan Lokasi"></br>
                    </div>
                    <div class="form-group">
                        <label for="no_rooms">No Rooms</label>
                        <input type="text" class="form-control" 
                        required="required" name="no_rooms" placeholder="Masukkan Nomer Room"></br>
                    </div class="form-group">

                     <!-- TYPE ROOM --}} -->
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="form-label mt-4">Kode Type Room</label>
                        {{-- dropdown typekamar --}}
                        <div class="drop-down">
                            <div class="btn-group">
                                <select id="typeroom-dropdown" class="form-control" name="typerooms_id">
                                    <option value="">-- Pilih Type Room--</option>
                                    @foreach ($type as $t)
                                    <option value="{{$t->id}}">
                                    {{$t->id}}-{{$t->name_type}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="harga_rooms">Harga Room</label>
                        <input type="text" class="form-control" 
                        required="required" name="harga_rooms" placeholder="Masukkan Harga Room"></br>
                    </div class="form-group">
                    <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <input type="text" class="form-control" 
                        required="required" name="keterangan" placeholder="Masukkan Keterangan"></br>
                    </div>
                    <br>
                    <button type="submit" name="add" class="btn btn-success">Simpan Data</button>
                    <a href='/room' class="btn btn-secondary">Kembali</a>
            </form>
                </div>
            </div>
         </div>
    </div>
</div>
  </main>
@endsection