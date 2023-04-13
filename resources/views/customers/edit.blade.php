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
        <div class="col-md-15">
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
                <input type="hidden" name="id" value="{{$customers->id}}"></br>
                    <div class="form-group">
                        <label for="id">ID Customers</label>
                        <input type="text" class="form-control @error('id') is-invalid @enderror" name="id" value="{{ $customers->id}}">
                        @error('id')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </br>
                    </div>
                    <div class="form-group">
                        <label for="name_customers">Nama Customers</label>
                        <input type="text" class="form-control @error('name_customers') is-invalid @enderror" name="name_customers" value="{{ $customers->name_customers}}">
                        @error('name_customers')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                        </br>
                    </div>
                    <div class="form-group">
                        <label for="nik">NIK</label>
                        <input type="text" class="form-control @error('nik') is-invalid @enderror" name="nik" value="{{ $customers->nik}}">
                        @error('nik')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                        </br>
                    </div>
                    <div class="form-group">
                        <label for="jk">Jenis Kelamin</label>
                        <input type="text" class="form-control @error('jk') is-invalid @enderror" name="jk" value="{{ $customers->jk}}">
                        @error('jk')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                        </br>
                    </div>
                    <div class="form-group">
                        <label for="no_tlp">Nomor Telepon</label>
                        <input type="text" class="form-control @error('no_tlp') is-invalid @enderror" name="no_tlp" value="{{ $customers->no_tlp}}">
                        @error('no_tlp')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                        </br>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ $customers->alamat}}">
                        @error('alamat')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                        </br>
                    </div>
                    <button type="submit" name="edit" class="btn btn-primary float-right">Save</button>
                    <a href='/customers' class="btn btn-secondary">Kembali</a>
            </form>
                </div>
            </div>
         </div>
    </div>
</div>
@endsection