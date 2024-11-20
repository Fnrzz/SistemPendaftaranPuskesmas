@extends('home.layouts.layout')

@section('content')
    <section id="pelayanan" class=" d-flex flex-column justify-content-center">
        <div class="container mb-3">
            <div class="row">
                <div class="col-12 d-flex flex-column align-items-center">
                    <h3>Pelayanan Kami:</h3>
                    <p class="w-75 text-center">
                        Di Puskesmas Bargas, kami menyediakan berbagai layanan kesehatan yang dirancang untuk memenuhi
                        kebutuhan kesehatan masyarakat Kabupaten Semarang. Dengan tenaga medis yang profesional dan
                        peralatan yang memadai, kami berkomitmen memberikan pelayanan yang berkualitas dan berorientasi pada
                        kepuasan pasien. Berikut adalah layanan yang tersedia:
                    </p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row row-cols-4 g-4">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="card-title text-center text-primary"><i class="bi bi-activity"></i></h1>
                            <p class="card-text text-center fw-bold">Pemeriksaan Umum</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="card-title text-center text-primary"><i class="bi bi-heart-pulse"></i></h1>
                            <p class="card-text text-center fw-bold">Pemeriksaan Gizi</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="card-title text-center text-primary"><i class="bi bi-briefcase"></i></h1>
                            <p class="card-text text-center fw-bold">Kesehatan Ibu dan Anak</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="card-title text-center text-primary"><i class="bi bi-people"></i></h1>
                            <p class="card-text text-center fw-bold">Edukasi Kesehatan</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="card-title text-center text-primary"><i class="bi bi-clock"></i></h1>
                            <p class="card-text text-center fw-bold">Layanan Gawat Darurat</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="card-title text-center text-primary"><i class="bi bi-clipboard-data"></i></h1>
                            <p class="card-text text-center fw-bold">Imunisasi</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="card-title text-center text-primary"><i class="bi bi-tags"></i></h1>
                            <p class="card-text text-center fw-bold">Pemeriksaan Laboratorium</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="card-title text-center text-primary"><i class="bi bi-search"></i></h1>
                            <p class="card-text text-center fw-bold">Layanan Penyakit Kronis</p>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
