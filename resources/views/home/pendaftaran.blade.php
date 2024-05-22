@extends('home.layouts.master')

@section('content')
<section class="hero-section inner-page">
    <div class="wave">
        <svg width="1920px" height="265px" viewBox="0 0 1920 265" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
                    <path d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,667 L1017.15166,667 L0,667 L0,439.134243 Z" id="Path"></path>
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
                        <p class="mb-5" data-aos="fade-up" data-aos-delay="100">Berikut merupakan informasi pendaftaran SMK Wiyata Mandala</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section pb-0">
    <div class="container">
        <div class="row align-items-start" data-aos="fade-right">
            <div class="col-md-6">
                <h2 class="mb-4">Langkah Melakukan Pendaftaran</h2>
                <ol class="step-list" style="text-align: justify;">
                    <li class="mb-4">
                        <strong>Login atau Register</strong>
                        <ol class="nested-list">
                            <li><strong>Jika sudah memiliki akun:</strong>
                                <ol class="nested-list">
                                    <li>Buka situs web <a href="/login" style="color: #2d71a1;"><strong>Login</strong></a> sekolah.</li>
                                    <li>Masukkan email dan password yang sudah terdaftar.</li>
                                    <li>Klik tombol "Login".</li>
                                </ol>
                            </li>
                            <li><strong>Jika belum memiliki akun:</strong>
                                <ol class="nested-list">
                                    <li>Buka situs web <a href="/register" style="color: #2d71a1;"><strong>Register</strong></a> sekolah.</li>
                                    <li>Isi formulir pendaftaran dengan data yang diminta, seperti nama, alamat email, dan kata sandi.</li>
                                    <li>Klik "Register" atau "Submit".</li>
                                </ol>
                            </li>
                        </ol>
                    </li>
                    <li class="mb-4">
                        <strong>Masuk Menu Pendaftaran dan Mengisi Formulir</strong>
                        <ol class="nested-list">
                            <li>Setelah berhasil login, masuk ke menu "Pendaftaran" atau "Pendaftaran Siswa Baru".</li>
                            <li>Isi formulir pendaftaran dengan data pribadi, data orang tua, dan data akademik yang diminta.</li>
                            <li>Pastikan semua kolom diisi dengan benar dan lengkap.</li>
                            <li>Klik "Simpan" setelah semua data terisi.</li>
                        </ol>
                    </li>
                    <li class="mb-4">
                        <strong>Tunggu Informasi Mengenai Tes Penjurusan</strong>
                        <ol class="nested-list">
                            <li>Setelah mengirim formulir pendaftaran, tunggu informasi selanjutnya dari pihak sekolah mengenai jadwal tes penjurusan.</li>
                            <li>Informasi biasanya akan dikirim melalui email atau diumumkan di situs web resmi sekolah.</li>
                            <li>Persiapkan diri untuk mengikuti tes penjurusan yang meliputi mata pelajaran:</li>
                            <ul>
                                <li>Matematika (MM)</li>
                                <li>Ilmu Pengetahuan Alam (IPA)</li>
                                <li>Bahasa Inggris (B.ING)</li>
                            </ul>
                            <li>Ikuti tes penjurusan sesuai dengan jadwal yang ditentukan.</li>
                        </ol>
                    </li>
                    <li class="mb-4">
                        <strong>Tunggu Informasi Masuk Jurusan</strong>
                        <ol class="nested-list">
                            <li>Setelah mengikuti tes penjurusan, tunggu hasil evaluasi dan pengumuman penempatan jurusan dari pihak sekolah.</li>
                            <li>Informasi penempatan jurusan akan diberitahukan melalui email,dan diumumkan di situs web resmi sekolah.</li>
                            <li>Pastikan selalu memeriksa email dan situs web untuk update terbaru.</li>
                        </ol>
                    </li>
                </ol>
            </div>
            <div class="col-md-6" data-aos="fade-left">
                <img src="{{ asset('hekel/assets/img/ppdb.jpg') }}" alt="Foto TKJ1" class="img-fluid">
            </div>
        </div>
    </div>
</section>

<hr>
@endsection
