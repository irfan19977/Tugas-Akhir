@extends('home.layouts.master')

@section('content')
<section class="hero-section inner-page">
    <div class="wave">

        <svg width="1920px" height="265px" viewBox="0 0 1920 265" version="1.1" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink">
            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
                    <path
                        d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,667 L1017.15166,667 L0,667 L0,439.134243 Z"
                        id="Path"></path>
                </g>
            </g>
        </svg>

    </div>

    <div class="container">
        <div class="row align-items-center">
            <div class="col-12">
                <div class="row justify-content-center">
                    <div class="col-md-9 text-center hero-text">
                        <h1 data-aos="fade-up" data-aos-delay="">Informasi Pendaftaran</h1>
                        <p class="mb-5" data-aos="fade-up" data-aos-delay="100">Berikut merupakan informasi pendaftaran SMK
                            Wiyata Mandala</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<section class="section pb-0">
    <div class="container">
        <div class="row align-items-center" data-aos="fade-right">
            <div class="col-md-6" data-aos="fade-left">
                <img src="{{ asset('hekel/assets/img/ppdb.jpg') }}" alt="Foto TKJ1" style="width: 100%; height: 700px;">
            </div>
            <div class="col-md-6 me-auto justify-text">
                <h2 class="mb-3">Persyaratan yang Harus Dipenuhi</h2>
                <ol>
                    <li class="mb-3">Mengisi formulir pendaftaran dapat dilakukan dengan mengunjungi <a href="{{ route('ppdb.index') }}" style="color: #2d71a1;"><strong>link pendaftaran</strong></a></li>
                    <li class="mb-3">Fotokopi Kartu Tanda Penduduk (KTP) Kedua Orang Tua</li>
                    <li class="mb-3">Fotokopi Kartu Keluarga (KK)</li>
                    <li class="mb-3">Fotokopi Akta Kelahiran</li>
                </ol>
                <br>
                <h2 style="width: 100%; height: auto;">Langkah Melakukan Pendaftaran</h2>
                <ol>
                    <li class="mb-3">Lakukan <a href="{{ route('login') }}" style="color: #2d71a1;"><strong>login</strong> </a> terlebih dahulu. Jika Anda belum memiliki akun, silakan mendaftarkan akun melalui tautan berikut <a href="{{ route('register') }}" style="color: #2d71a1;"><strong>register</strong></a></li>
                    <li class="mb-3">Setelah login atau registrasi, pilih menu pendaftaran yang tersedia pada halaman dashboard.</li>
                    <li class="mb-3">Isilah data pendaftaran, dan setelah selesai mengisi, silakan klik tombol "Submit".</li>
                    <li class="mb-3">Jika proses pengisian data telah selesai, harap tunggu informasi lebih lanjut mengenai tes penjurusan.</li>
                    <li class="mb-3">Untuk informasi lebih lengkap mengenai penggunaan website, silakan kunjungi tautan berikut <a href="{{ asset('hekel/assets/manualbook.pdf') }}" style="color: #2d71a1;"><strong> Manual Book</strong></a>
                    </li>
                </ol>
            </div>
            
        </div>
    </div>
</section>

<hr>
@endsection
