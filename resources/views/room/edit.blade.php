@extends('layout.main')

@section('title')
Form Room
@endsection

@section('content')
<div class="pagetitle">
      <h1>Form Room Edit | Update </h1>
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
        <div class="col-md-15">
            <div class="card">
            <br></br>
                    <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <form action="/room/{{$room->id}}" method="post" enctype="multipart/form-data"> 
                    {{csrf_field()}}
                    @method('PUT')
                @csrf
                    <div class="form-group">
                        <label for="id">ID Room</label>
                        <input type="text" class="form-control @error('id') is-invalid @enderror" name="id" value="{{ $room->id}}">
                        @error('id')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                        </br>
                    </div>
                    <div class="form-group">
                        <label for="lokasi_rooms">Lokasi</label>
                        <input type="text" class="form-control @error('lokasi_rooms') is-invalid @enderror" name="lokasi_rooms" value="{{ $room->lokasi_rooms}}">
                        @error('lokasi_rooms')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                        </br>
                    </div>
                    <div class="form-group">
                        <label for="no_rooms">No Room</label>
                        <input type="text" class="form-control @error('no_rooms') is-invalid @enderror" name="no_rooms" value="{{ $room->no_rooms}}">
                        @error('no_rooms')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="form-label mt-4">Kode Type Room</label>
                        {{-- dropdown typekamar --}}
                        <div class="drop-down">
                            <div class="btn-group">
                                <select id="typeroom-dropdown" class="form-control" name="typerooms_id">
                                    <option value="">-- Pilih Type Room--</option>
                                    @foreach ($type as $t)
                                    @if(old('id')== $t->id)
                                        <option value="{{$t->id}}" selected>{{ $t->name_type}}</option>
                                    @else
                                        <option value="{{$t->id}}" selected>{{ $t->name_type}}</option>
                                    @endif
                                    @endforeach
                                </select></br>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="harga_rooms">Harga Room</label>
                        <input type="text" class="form-control @error('harga_rooms') is-invalid @enderror" name="harga_rooms" value="{{ $room->harga_rooms}}">
                        @error('harga_rooms')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                        </br>
                    </div class="form-group">
                    <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <input type="text" class="form-control @error('keterangan') is-invalid @enderror" name="keterangan" value="{{ $room->keterangan}}">
                        @error('keterangan')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                        </br>
                    </div>
                    <button type="submit" name="add" class="btn btn-primary float-right">Save</button>
                    <a href='/customers' class="btn btn-secondary">Kembali</a>
            </form>
                </div>
            </div>
         </div>
    </div>
</div>
@endsection