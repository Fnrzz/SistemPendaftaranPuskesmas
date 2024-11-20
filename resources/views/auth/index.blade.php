@extends('auth.layouts.layout')

@section('content')
    <div class="container">
        <div class="row vh-100 align-items-center justify-content-center">
            <div class="col-6">
                <div class="card shadow">
                    <div class="card-body p-5">
                        <h1 class="text-center mb-4">Login</h1>
                        <form action="{{ route('authenticate') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" id="email">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" id="password">
                            </div>
                            <button type="submit" class="btn btn-primary w-100 rounded-pill">Login</button>
                        </form>
                        <a href="{{ route('register') }}" class="text-center d-block mt-3 text-decoration-none">Belum Punya
                            Akun?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
