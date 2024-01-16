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
                        <h1 data-aos="fade-up" data-aos-delay="">Teknik Komputer Jaringan</h1>
                        <p class="mb-5" data-aos="fade-up" data-aos-delay="100">Berikut merupakan profile jurusan Teknik Komputer Jaringan</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<section class="section pb-0">
    <div class="container ">
        <div class="row align-items-center" data-aos="fade-right">
            <div class="col-md-3 order-2"  data-aos="fade-right">
                <figure>
                    <img src="{{ asset('assets/img/akuntansi.jpg') }}" alt="Image" class="img-fluid">
                    <figcaption
                        style="font-family: Arial, sans-serif; font-style: italic; font-size: 14px; text-align: center;">
                        Keterangan Gambar</figcaption>
                </figure>
            </div>
            <div class="col-md-9  order-2 justify-text">
                <h3 class="mb-6">Mengenal Lebih Dekat Jurusan Teknik Komputer Jaringan</h3>
                <p class="mb-6">Jurusan Teknik Komputer dan Jaringan (TKJ) adalah salah satu bidang studi yang mendalami teknologi informasi dan komunikasi. Dalam konteks pendidikan tinggi, jurusan ini menjadi pilihan yang menarik bagi individu yang tertarik dalam bidang teknologi komputer, jaringan, dan sistem informasi.

                </p>
                <p class="mb-6">Pada intinya, jurusan TKJ mengajarkan prinsip-prinsip yang diperlukan untuk menjadi seorang profesional di dunia teknologi. Siswa belajar tentang perancangan, pengembangan, instalasi, dan pemeliharaan sistem komputer serta jaringan. Mereka juga diajarkan cara mengelola dan mengamankan data serta informasi di lingkungan digital.</p>
                <p class="mb-6">Jurusan TKJ mempersiapkan individu untuk memahami dan mengimplementasikan teknologi informasi dalam berbagai konteks, mulai dari bisnis hingga industri. Dengan perkembangan teknologi yang pesat, jurusan ini menawarkan peluang karir yang dinamis dan terus berkembang.
                </p>
            </div>
            
        </div>
    </div>
</section>

<section class="section pb-0" style="min-height: 400px;">
    <div class="container">
        <div class="row align-items-center justify-text">
            <div class="col-md-6" data-aos="fade-left" style="min-height: 400px;">
                <h3 class="mb-4 text-center"> Alasan Memilih Jurusan Teknik Komputer Jaringan</h3>
                <p class="mb-4">Ada beberapa alasan mengapa seseorang memilih untuk mengejar pendidikan di bidang Teknik Komputer Jaringan:</p>
                <p>
                    <ol>
                        <li class="mb-2"><strong>Relevansi dengan Industri :</strong>  Jurusan ini memberikan keterampilan yang sangat relevan dengan kebutuhan industri teknologi informasi.
                        </li>
                        <li class="mb-2"><strong>Peluang Karir yang Luas :</strong>  Lulusan TKJ memiliki peluang karir di berbagai industri, termasuk sebagai teknisi jaringan, administrator sistem, pengembang perangkat lunak, dan spesialis keamanan informasi.
                        </li>
                        <li class="mb-2"> <strong>Kontribusi pada Transformasi Digital :</strong>  Ilmu yang dipelajari dalam jurusan ini memungkinkan lulusannya untuk berkontribusi pada transformasi digital di berbagai sektor, membawa perubahan positif melalui teknologi.
                        </li>
                        <li class="mb-2"><strong>Permintaan Tinggi di Pasar Kerja :</strong>  Profesi dalam bidang teknologi informasi selalu diminati, sehingga lulusan TKJ memiliki kesempatan besar untuk diterima di dunia kerja.
                        </li>
                    </ol>
                </p>
            </div>
            <div class="col-md-6" data-aos="fade-right" style="min-height: 440px;">
                <h3 class="mb-4 text-center">Materi Yang Dipelajari</h3>
                <br>
                <p class="mb-4">Siswa jurusan Teknik Komputer Jaringan akan mengikuti beragam mata pelajaran yang mencakup:</p>
                <p>
                    <ol>
                        <li class="mb-2"><strong>Pemrograman Komputer :</strong> Mempelajari bahasa pemrograman, algoritma, dan struktur data untuk mengembangkan perangkat lunak.
                        </li>
                        <li class="mb-2"><strong>Jaringan Komputer :</strong>  Memahami konsep dasar jaringan, administrasi jaringan, dan keamanan jaringan.
                        </li>
                        <li class="mb-2"><strong>Sistem Operasi :</strong>  Menyelami berbagai sistem operasi dan cara mengelolanya dalam lingkungan komputer.
                        </li>
                        <li class="mb-2"><strong>Teknologi Web :</strong>  Memahami pengembangan aplikasi web, desain antarmuka pengguna, dan teknologi web terkini.
                        </li>
                    </ol>
                </p>
            </div>
        </div>
    </div>
</section>



<hr>
@endsection
