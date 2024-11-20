@extends('admin.layouts.layout')

@section('content')
    <section>
        <h3 class="fw-bold mb-3">Tambah Pelayanan</h3>
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.pelayanan.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Pelayanan</label>
                        <input name="name" type="text" class="form-control" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="doktor_name" class="form-label">Nama Dokter</label>
                        <input name="doktor_name" type="text" class="form-control" id="doktor_name">
                    </div>
                    <button type="submit" class="btn btn-success w-100 rounded-pill">Save</button>
                </form>
            </div>
        </div>
    </section>
@endsection
