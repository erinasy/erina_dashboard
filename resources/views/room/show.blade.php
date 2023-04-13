@extends('layout.main')

@section('title')
Detail Room
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('DATA ROOM') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table table-responsive">
                        <tr>
                            <tr><th>ID Room</th><th>:</th><td>{{ $room->id }}</td></tr>
                            <tr><th>Lokasi</th><th>:</th><td>{{ $room->lokasi_rooms }}</td></tr>
                            <tr><th>No Room</th><th>:</th><td>{{ $room->no_rooms }} </td></tr>
                            <tr><th>Type Room</th><th>:</th><td>{{ $room->dt_type->name_type}}</td></tr>
                            <tr><th>Harga Room</th><th>:</th><td>{{ $room->harga_rooms }}</td></tr>
                            <tr><th>Keterangan</th><th>:</th><td>{{ $room->keterangan }}</td></tr>
                            <tr><th>Created At</th><th>:</th><td>{{ $room->created_at }}</td></tr>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection