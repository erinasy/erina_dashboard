@extends('layout.main')

@section('title')
Detail Customers
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('DATA CUSTOMERS') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table table-responsive">
                        <tr>
                            <tr><th>ID Customers</th><th>:</th><td>{{ $customers->id }}</td></tr>
                            <tr><th>Nama Customers</th><th>:</th><td>{{ $customers->name_customers }}</td></tr>
                            <tr><th>NIK</th><th>:</th><td>{{ $customers->nik }} </td></tr>
                            <tr><th>Jenis Kelamin</th><th>:</th><td>{{ $customers->jk}}</td></tr>
                            <tr><th>Nomer Telepon</th><th>:</th><td>{{ $customers->no_tlp }}</td></tr>
                            <tr><th>Alamat</th><th>:</th><td>{{ $customers->alamat }}</td></tr>
                            <tr><th>Created At</th><th>:</th><td>{{ $customers->created_at }}</td></tr>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection