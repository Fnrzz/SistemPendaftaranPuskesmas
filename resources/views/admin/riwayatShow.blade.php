@extends('admin.layouts.layout')

@section('content')
    <h3 class="fw-bold mb-3">Detail Riwayat</h3>
    <div class="card">
        <div class="card-body">
            <div class="d-flex gap-3">
                <p class="fw-bold">Nama</p>
                <p>:</p>
                <p>{{ $data->user->name }}</p>
            </div>
            <div class="d-flex gap-3">
                <p class="fw-bold">Email</p>
                <p>:</p>
                <p>{{ $data->user->email }}</p>
            </div>
            <div class="d-flex gap-3">
                <p class="fw-bold">Phone</p>
                <p>:</p>
                <p>{{ $data->user->phone }}</p>
            </div>
            <div class="d-flex gap-3">
                <p class="fw-bold">NIK</p>
                <p>:</p>
                <p>{{ $data->user->no_nik }}</p>
            </div>
            <hr>
            <div class="d-flex gap-3">
                <p class="fw-bold">Nama Pelayanan</p>
                <p>:</p>
                <p>{{ $data->pelayanan->name }}</p>
            </div>
            <div class="d-flex gap-3">
                <p class="fw-bold">Nama Dokter</p>
                <p>:</p>
                <p>{{ $data->pelayanan->doktor_name }}</p>
            </div>

            <div class="d-flex gap-3">
                <p class="fw-bold">Tanggal Pelayanan</p>
                <p>:</p>
                <p>{{ $data->date }}</p>
            </div>
        </div>
    </div>
@endsection
