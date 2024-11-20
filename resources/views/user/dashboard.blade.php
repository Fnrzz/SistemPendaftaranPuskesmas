@extends('user.layouts.layout')

@section('content')
    <h3 class="fw-bold text-center">Selamat Datang {{ Auth::user()->name }}</h3>
    <p class="text-center">
        Selamat datang di Dashboard User Puskesmas Bargas! Di sini, Anda dapat dengan mudah mengakses berbagai layanan
        kesehatan, seperti melihat dan memperbarui profil kesehatan, mendaftar untuk pemeriksaan online, serta memeriksa
        riwayat kunjungan dan hasil laboratorium Anda. Dashboard ini juga menyediakan pengingat otomatis untuk jadwal
        konsultasi dan pemeriksaan, fitur konsultasi online dengan tenaga medis, serta akses ke artikel edukasi kesehatan
        yang relevan dengan kondisi Anda. Selain itu, Anda bisa kelola resep obat dengan mudah dan memesan ulang jika
        diperlukan. Semua layanan ini kami hadirkan untuk memudahkan Anda menjaga kesehatan dengan lebih praktis dan
        efisien.
    </p>
@endsection
