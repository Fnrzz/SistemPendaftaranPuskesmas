@extends('user.layouts.layout')

@section('content')
    <h3 class="fw-bold mb-3">Pendaftaran Pelayanan</h3>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('user.pelayanan.store') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="pelayanan" class="form-label">Pelayanan</label>
                    <select name="pelayanan_id" id="pelayanan" class="form-select">
                        @foreach ($data as $pelayanan)
                            <option value="{{ $pelayanan->id }}">{{ $pelayanan->name }} - {{ $pelayanan->doktor_name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="date" class="form-label">Date</label>
                    <input name="date" type="date" class="form-control" id="date">
                </div>
                <button type="submit" class="btn btn-success w-100 rounded-pill">Save</button>
            </form>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {

            var dateInput = document.getElementById('date');

            var today = new Date();
            var day = String(today.getDate()).padStart(2, '0');
            var month = String(today.getMonth() + 1).padStart(2, '0'); // Januari adalah 0
            var year = today.getFullYear();

            var todayDate = year + '-' + month + '-' + day;

            dateInput.setAttribute('min', todayDate);
        });
    </script>
@endsection
