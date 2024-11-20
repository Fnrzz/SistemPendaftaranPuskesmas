@extends('admin.layouts.layout')

@section('content')
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3"><strong>Analytics</strong> Dashboard</h1>
        <div class="row">
            <div class="col-12 col-lg-8 col-xxl-9 d-flex">
                <div class="card flex-fill">
                    <div class="card-header">

                        <h5 class="card-title mb-0">Riwayat Terakhir</h5>
                    </div>
                    <table class="table table-hover my-0">
                        <thead>
                            <tr>
                                <th>Nama Pelayanan</th>
                                <th class="d-none d-xl-table-cell">Nama Dokter</th>
                                <th class="d-none d-xl-table-cell">Nama Pasien</th>
                                <th class="d-none d-xl-table-cell">Tanggal</th>
                                <th class="d-none d-xl-table-cell">Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $riwayat)
                                <tr>
                                    <td>{{ $riwayat->pelayanan->name }}</td>
                                    <td class="d-none d-xl-table-cell">{{ $riwayat->pelayanan->doktor_name }}</td>
                                    <td class="d-none d-xl-table-cell">{{ $riwayat->user->name }}</td>
                                    <td class="d-none d-xl-table-cell">{{ $riwayat->date }}</td>
                                    <td class="d-none d-xl-table-cell"><a
                                            href="{{ route('admin.riwayat.show', $riwayat->id) }}"
                                            class="btn btn-primary">Detail</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-12 col-lg-4 col-xxl-3 d-flex">
                <div class="card flex-fill w-100">
                    <div class="card-header">

                        <h5 class="card-title mb-0">Calendar</h5>
                    </div>
                    <div class="card-body d-flex">
                        <div class="align-self-center w-100">
                            <div class="chart">
                                <div id="datetimepicker-dashboard"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var date = new Date(Date.now());
            var defaultDate = date.getUTCFullYear() + "-" + (date.getUTCMonth() + 1) + "-" + date.getUTCDate();
            document.getElementById("datetimepicker-dashboard").flatpickr({
                inline: true,
                prevArrow: "<span title=\"Previous month\">&laquo;</span>",
                nextArrow: "<span title=\"Next month\">&raquo;</span>",
                defaultDate: defaultDate
            });
        });
    </script>
@endsection
