@extends('admin.layouts.layout')

@section('content')
    <section>
        <h3 class="fw-bold mb-3">Pelayanan</h3>
        <a href="{{ route('admin.pelayanan.create') }}" class="btn btn-primary rounded-pill mb-3">Tambah Pelayanan</a>
        <div class="card">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Pelayanan</th>
                            <th scope="col">Nama Dokter</th>
                            <th scope="col">Handle</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $pelayanan)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $pelayanan->name }}</td>
                                <td>{{ $pelayanan->doktor_name }}</td>
                                <td>
                                    <a href="{{ route('admin.pelayanan.edit', $pelayanan->id) }}"
                                        class="btn btn-warning">Edit</a>
                                    <a href="{{ route('admin.pelayanan.delete', $pelayanan->id) }}"
                                        class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
