@extends('home.layouts.layout')

@section('content')
    <section id="header">
        <div class="container rounded-4 shadow">
            <div class="row align-items-center h-100">
                <div class="col">
                    <h1 class="text-center text-white fw-bold">Website Pelayanan</h1>
                    <h3 class="text-center text-white">Puskesmas Bargas Kabupaten Semarang</h3>
                </div>
            </div>
        </div>
    </section>
    <section id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-6">
                    <h2 class="fw-bold">Tentang Kami</h2>
                    <p class="text-justify">
                        Selamat datang di Puskesmas Bargas! Kami adalah pusat layanan kesehatan masyarakat yang berdedikasi
                        untuk memberikan pelayanan kesehatan yang terjangkau, berkualitas, dan berorientasi pada kebutuhan
                        masyarakat di Kabupaten Semarang.
                        Dengan visi menjadi Puskesmas yang unggul, terpercaya, dan ramah masyarakat, kami berkomitmen untuk
                        terus meningkatkan mutu layanan melalui inovasi dan kerja sama dengan berbagai pihak. Tim kami
                        terdiri dari tenaga medis profesional, seperti dokter, perawat, bidan, dan tenaga kesehatan lainnya,
                        yang siap melayani Anda dengan sepenuh hati.
                        Layanan kami mencakup berbagai aspek kesehatan, mulai dari pemeriksaan umum, layanan gizi, kesehatan
                        ibu dan anak, hingga penanganan penyakit kronis dan layanan darurat. Kami juga aktif dalam
                        program-program preventif seperti imunisasi, pemeriksaan kesehatan rutin, serta edukasi kesehatan
                        bagi masyarakat.
                        Di Puskesmas Bargas, kesehatan Anda adalah prioritas kami. Bersama, kita wujudkan masyarakat
                        Kabupaten Semarang yang sehat dan sejahtera.
                    </p>
                </div>
                <div class="col-6 d-flex justify-content-center">
                    <img src="{{ asset('images/dokter.png') }}" alt="doktor" class="img-fluid w-75">
                </div>
            </div>
        </div>
    </section>
    <section id="kenapa">
        <div class="container py-5">
            <div class="row">
                <div class="col-12 d-flex flex-column align-items-center">
                    <h3>Kenapa Harus Ada Website Pelayanan Puskesmas?</h3>
                    <p class="text-center w-75">
                        Di era digital saat ini, website pelayanan menjadi kebutuhan penting untuk memudahkan akses
                        masyarakat terhadap informasi dan layanan kesehatan. Website Puskesmas Bargas hadir sebagai solusi
                        untuk memberikan pelayanan yang lebih cepat, transparan, dan efisien. Berikut beberapa alasan kenapa
                        website pelayanan sangat penting:
                    </p>
                </div>
            </div>
            <div class="row row-cols-4 g-4 mt-3">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="card-title text-center text-primary"><i class="bi bi-clock"></i></h1>
                            <p class="card-text text-center fw-bold">Akses Informasi 24/7</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="card-title text-center text-primary"><i class="bi bi-pen"></i></h1>
                            <p class="card-text text-center fw-bold">Kemudahan Pendaftaran Online</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="card-title text-center text-primary"><i class="bi bi-chat-square-dots"></i></h1>
                            <p class="card-text text-center fw-bold">Konsultasi Kesehatan</p>
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
            </div>
            <div class="row mt-5 justify-content-center">
                <div class="col-3">
                    <a href="" class="btn btn-primary w-100 py-3 rounded-pill">Dapatkan Pelayanan</a>
                </div>
            </div>
        </div>
    </section>
    <section id="maps">
        <div class="container">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15833.808987396167!2d110.4255983!3d-7.1891257!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70869d4d53c673%3A0x7c89c94263c5d5ef!2sPuskesmas%20Bergas!5e0!3m2!1sid!2sid!4v1729644606771!5m2!1sid!2sid"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
@endsection
