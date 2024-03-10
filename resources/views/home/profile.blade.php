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
                    <div class="col-md-7 text-center hero-text">
                        <h1 data-aos="fade-up" data-aos-delay="">Profil Sekolah</h1>
                        <p class="mb-5" data-aos="fade-up" data-aos-delay="100">Berikut merupakan profil sekolah SMK
                            Wiyata Mandala</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<section class="section pb-0">
    <div class="container ">
        <div class="row align-items-center" data-aos="fade-right">
            <div class="col-md-6 me-auto justify-text">
                <h2 class="mb-6">SMK WIYATA MANDALA</h2>
                <ul>
                    <li class="mb-3">Alamat : Jl. Pare Kandangan No.10, Kemirahan, Damarwulan, Kec. Kepung, Kabupaten
                        Kediri, Jawa Timur 64293</li>
                    <li class="mb-3">Status : Swasta</li>
                    <li class="mb-3">NPSN : 20511969</li>
                    <li class="mb-3">NIS : 40 026 0</li>
                    <li class="mb-3">Telp / Fax : ( 0354 ) 328631</li>
                    <li class="mb-3">Email : smkwimakepung@gmail.com</li>
                    <li class="mb-3">SK Pendirian Sekolah : 609/34.U/1988</li>
                </ul>
            </div>
            {{-- <div class="col-md-5" data-aos="fade-left" >
          <iframe width="450" height="250" src="https://www.youtube.com/embed/s8jYBnCHWVk" frameborder="0" allowfullscreen></iframe>
        </div> --}}
        </div>
    </div>
</section>

<section class="section pb-0">
    <div class="container">
        <div class="row align-items-center justify-text">
            <div class="col-md-6 " data-aos="fade-right" style="min-height: 220px;">
                <h2 class="mb-4">Visi Sekolah</h2>
                <p class="mb-4">Menjadi sekolah kejuruan nasional yang menghasilkan lulusan yang mampu memenuhi kebutuhan industri 4.0, berkarakter profil pelajar Pancasila, dan berjiwa kewirausahaan pada tahun 2028 dengan berpedoman pada al-Qur’an dan Hadits
                </p>
            </div>
            <div class="col-md-6" data-aos="fade-left" style="min-height: 220px;">
                <!-- Sesuaikan tinggi minimum dengan kebutuhan -->
                <h2 class="mb-4"> Misi Sekolah</h2>
                <p class="mb-4">Mendidik anak bangsa dengan hati dan teknologi sehingga memenuhi dunia kerja. Menyelenggarakan pendidikan yang berfokus pada pengembangan dan moral siswa. Membangun kebersamaan sosial, jiwa kewirausahaan, gerakan cinta tanah air dan lingkungan</p>
            </div>
        </div>
    </div>
</section>

<section class="section pb-0">
    <div class="container">
        <div class="row align-items-center" data-aos="fade-right">
            <div class="col-md-12 me-auto justify-text">
                <h2 class="mb-6">Identitas Sekolah</h2>
                <p class="mb-4">Selamat datang di SMK Wiyata Mandala, sebuah lembaga pendidikan di Kabupaten Kediri
                    yang berkomitmen untuk memberikan pendidikan vokasional berkualitas tinggi. Dengan tujuan menjadi
                    pusat pendidikan unggul, kami bertekad mencetak lulusan yang kompeten, berdaya saing, dan berakhlak
                    mulia.
                </p>
                <p class="mb-4">Didirikan pada tahun 1988, SMK Wiyata Mandala telah menjadi bagian integral dari
                    perkembangan
                    pendidikan di wilayah ini. Melalui perjalanan panjang kami, kami telah sukses menciptakan lingkungan
                    pembelajaran yang mendukung dan merangsang perkembangan potensi setiap siswa.
                </p>
                <p class="mb-4">Program pendidikan kami mencakup jurusan-jurusan yang relevan dengan tuntutan industri,
                    mempersiapkan siswa untuk menghadapi dunia kerja dengan keahlian yang dibutuhkan. Laboratorium
                    modern,
                    perpustakaan lengkap, dan fasilitas pendukung lainnya memastikan pengalaman belajar yang
                    komprehensif.
                </p>
                <p class="mb-4">Tidak hanya dalam kelas, kami juga menghargai pentingnya pengembangan karakter dan
                    kegiatan
                    ekstrakurikuler. Pelatihan Tartil Qur’an, Pramuka, Fustal, Drum Band adalah sebagian dari beragam
                    kegiatan
                    yang kami tawarkan untuk mengembangkan potensi siswa di luar kurikulum.
                </p>
            </div>
            {{-- <div class="col-md-4" data-aos="fade-left">
          <img src="{{ asset('hekel/assets/img/smk.jpg') }}" alt="Image" class="img-fluid">
        </div> --}}
    </div>
    </div>
</section>
<hr>
@endsection
