@extends('admin.layouts.layout')

@section('content')
    <h3 class="fw-bold mb-3">Daftar Riwayat</h3>
    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Pelayanan</th>
                        <th scope="col">Tanggal Pelayanan</th>
                        <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $transaksi)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $transaksi->pelayanan->name }}</td>
                            <td>{{ $transaksi->date }}</td>
                            <td>
                                <a href="{{ route('admin.riwayat.show', $transaksi->id) }}"
                                    class="btn btn-primary">Detail</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
