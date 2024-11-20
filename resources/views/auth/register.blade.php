@extends('auth.layouts.layout')

@section('content')
    <div class="container">
        <div class="row vh-100 align-items-center justify-content-center">
            <div class="col-6">
                <div class="card shadow">
                    <div class="card-body p-5">
                        <h1 class="text-center mb-4">Register</h1>
                        <form action="{{ route('authenticate.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama</label>
                                <input name="name" type="text" class="form-control" id="name"
                                    placeholder="contoh: John Doe">
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Nomor Telepon</label>
                                <input name="phone" type="number" class="form-control" id="phone"
                                    placeholder="contoh: 81234567890">
                            </div>
                            <div class="mb-3">
                                <label for="no_nik" class="form-label">Nomor NIK</label>
                                <input name="no_nik" type="number" class="form-control" id="no_nik"
                                    placeholder="contoh: 1234567890">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input name="email" type="email" class="form-control" id="email"
                                    placeholder="contoh: jhon@example.com">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input name="password" type="password" class="form-control" id="password">
                            </div>
                            <button type="submit" class="btn btn-primary w-100 rounded-pill">Register</button>
                        </form>
                        <a href="{{ route('login') }}" class="text-center d-block mt-3 text-decoration-none">Sudah Punya
                            Akun?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
