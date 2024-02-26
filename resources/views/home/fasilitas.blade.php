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
                        <h1 data-aos="fade-up" data-aos-delay="">Fasilitas</h1>
                        <p class="mb-5" data-aos="fade-up" data-aos-delay="100">Berikut merupakan beberapa fasilitas
                            yang ada di SMK Wiyata Mandala :</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="card" style="width: 90%;">
                    <img src="{{ asset('hekel/assets/img/fasilitas/r.kepsek.jpg') }}" class="card-img-top" alt="Gambar 1" style="object-fit: cover; height: 233px;">
                    <div class="card-body">
                        <h5 class="card-title text-center"><strong>Ruang Kepala Sekolah</strong></h5>
                        <p class="card-text justify-text">Ruang Kepala Sekolah: Pusat administratif sekolah yang didesain profesional dan fungsional, mendukung kepemimpinan efektif. Merupakan tempat pertemuan, perencanaan strategis, interaksi staf, dan kolaborasi produktif untuk pengelolaan sekolah yang optimal.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 90%;">
                    <img src="{{ asset('hekel/assets/img/fasilitas/r.guru.jpg') }}" class="card-img-top" alt="Gambar 1" style="object-fit: cover; height: 233px;">
                    <div class="card-body">
                        <h5 class="card-title text-center"><strong>Ruang Guru</strong></h5>
                        <p class="card-text justify-text">Ruang Guru: Ruang khusus bagi para pendidik, didesain untuk mendukung kreativitas dan pembelajaran yang optimal. Dilengkapi dengan fasilitas yang memudahkan penyusunan materi ajar, evaluasi, serta kerja tim antar guru. Berfungsi sebagai tempat persiapan dan refleksi pengajaran.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 90%;">
                    <img src="{{ asset('hekel/assets/img/fasilitas/r.tu.jpeg') }}" class="card-img-top" alt="Gambar 1" style="object-fit: cover; height: 233px;">
                    <div class="card-body">
                        <h5 class="card-title text-center"><strong>Ruang Tata Usaha</strong></h5>
                        <p class="card-text justify-text">Ruang Tata Usaha Sekolah: Pusat administratif untuk kegiatan pendaftaran dan pengelolaan sekolah. Dengan desain yang efisien dan keteraturan, ruang ini menciptakan lingkungan yang efektif bagi operasional sekolah, mendukung pengelolaan data dan proses administratif secara optimal.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 90%;">
                    <img src="{{ asset('hekel/assets/img/fasilitas/r.administrasi.jpg') }}" class="card-img-top" alt="Gambar 1" style="object-fit: cover; height: 233px;">
                    <div class="card-body">
                        <h5 class="card-title text-center"><strong>Ruang Administrasi</strong></h5>
                        <p class="card-text justify-text">
                            Ruang Administrasi Sekolah: Pusat administratif yang mengelola berbagai kegiatan terkait sekolah, termasuk pendaftaran, kehadiran siswa, dan arsip dokumen. Dengan desain fungsional dan efisien, ruang ini menciptakan lingkungan kerja yang mendukung pengelolaan tugas administratif dengan optimal.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 90%;">
                    <img src="{{ asset('hekel/assets/img/fasilitas/lab-ak1.png') }}" class="card-img-top" alt="Gambar 1" style="object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title text-center"><strong>Laboratorium Akuntansi</strong></h5>
                        <p class="card-text justify-text">Laboratorium akuntansi memiliki fungsi sebagai: Sarana kegiatan praktikum mahasiswa akuntansi guna mendukung kompetensi lulusan yang mampu menghasilkan informasi akuntansi yang akuntabel, benar, dan wajar, serta menghasilkan jasa akuntansi yang berkualitas.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 90%;">
                    <img src="{{ asset('hekel/assets/img/fasilitas/lab-tkj.png') }}" class="card-img-top" alt="Gambar 2" style="object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title text-center"><strong>Laboratorium Teknik Komputer dan Jaringan</strong></h5>
                        <p class="card-text justify-text">Laboratorium TKJ: Fasilitas praktikum mahasiswa untuk mengelola sistem dan jaringan komputer. Latihan instalasi perangkat keras, konfigurasi perangkat lunak, dan pemeliharaan jaringan. Tujuannya, menghasilkan kontributor berkualitas dalam teknologi informasi.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 90%;">
                    <img src="{{ asset('hekel/assets/img/fasilitas/lab-dkv.jpg') }}" class="card-img-top" alt="Gambar 3" style="object-fit: cover; height: 233px;">
                    <div class="card-body">
                        <h5 class="card-title text-center"><strong>Laboratorium  Design Komunikasi Visual</strong></h5>
                        <p class="card-text justify-text">Laboratorium Desain Komunikasi Visual: Fasilitas praktikum mahasiswa untuk mengasah keterampilan menciptakan komunikasi visual. Dengan peralatan desain, mendukung mahasiswa menghasilkan karya berkualitas tinggi dalam industri kreatif.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 90%;">
                    <img src="{{ asset('hekel/assets/img/fasilitas/lab-asper.png') }}" class="card-img-top" alt="Gambar 4" style="object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title text-center"><strong>Laboratorium Asisten Keperawatan</strong></h5>
                        <p class="card-text justify-text">Laboratorium Asisten Keperawatan: Praktikum keterampilan perawatan mahasiswa, dilengkapi peralatan medis, mendukung pemahaman dan latihan prosedur perawatan, vokasional untuk kontribusi di bidang kesehatan profesional secara optimal.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 90%;">
                    <img src="{{ asset('hekel/assets/img/fasilitas/lab-asper.png') }}" class="card-img-top" alt="Gambar 4" style="object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title text-center"><strong>Ruang Kelas</strong></h5>
                        <p class="card-text justify-text">Ruang Kelas: Lingkungan belajar yang didesain untuk memberikan kenyamanan dan inspirasi. Dengan pencahayaan yang baik dan tata letak yang teratur, menciptakan suasana yang kondusif untuk pembelajaran. Ruang ini memberikan pengalaman belajar yang positif dan mendukung perkembangan siswa.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 90%;">
                    <img src="{{ asset('hekel/assets/img/fasilitas/musholla.png') }}" class="card-img-top" alt="Gambar 4" style="object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title text-center"><strong>Musholla</strong></h5>
                        <p class="card-text justify-text">Musholla Sekolah: Sebuah ruang ibadah di dalam lingkungan sekolah, yang bertujuan menyediakan fasilitas untuk melaksanakan shalat dan kegiatan keagamaan lainnya. Ruangan ini didesain dengan suasana yang tenang dan memberikan dukungan untuk kehidupan spiritual siswa dan staf sekolah.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 90%;">
                    <img src="{{ asset('hekel/assets/img/fasilitas/perpus.jpg') }}" class="card-img-top" alt="Gambar 4" style="object-fit: cover; height: 233px;">
                    <div class="card-body">
                        <h5 class="card-title text-center"><strong>Perpustakaan</strong></h5>
                        <p class="card-text justify-text">Perpustakaan Sekolah: Pusat sumber belajar yang menyediakan akses ke beragam literatur dan sumber pengetahuan. Didesain untuk menciptakan lingkungan yang mendukung penelitian, membaca, dan pembelajaran. Ruang ini mempromosikan budaya literasi dan memberikan fasilitas untuk penelitian siswa.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 90%;">
                    <img src="{{ asset('hekel/assets/img/fasilitas/volly.jpg') }}" class="card-img-top" alt="Gambar 4" style="object-fit: cover; height: 233px;">
                    <div class="card-body">
                        <h5 class="card-title text-center"><strong>Lapangan Volly</strong></h5>
                        <p class="card-text justify-text">
                            Lapangan Volly: Area yang dirancang khusus untuk pertandingan dan latihan voli. Memiliki batas yang jelas dan permukaan yang sesuai untuk mendukung permainan yang aman dan optimal. Menyediakan ruang untuk pengembangan keterampilan atletik dan tim di lingkungan sekolah atau klub olahraga yang dinamis.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 90%;">
                    <img src="{{ asset('hekel/assets/img/fasilitas/parkir.jpeg') }}" class="card-img-top" alt="Gambar 4" style="object-fit: cover; height: 233px;">
                    <div class="card-body">
                        <h5 class="card-title text-center"><strong>Tempat Parkir</strong></h5>
                        <p class="card-text justify-text">Tempat Parkir Sekolah: Area yang disediakan secara khusus untuk parkir kendaraan siswa, staf, dan pengunjung di dalam lingkungan sekolah. Dengan tata letak yang teratur, tempat parkir ini tidak hanya menjamin efisiensi dalam pengelolaan kendaraan, tetapi juga menciptakan suasana yang aman, tertata rapi, dan nyaman.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 90%;">
                    <img src="{{ asset('hekel/assets/img/fasilitas/toilet.jpg') }}" class="card-img-top" alt="Gambar 4" style="object-fit: cover; height: 233px;">
                    <div class="card-body">
                        <h5 class="card-title text-center"><strong>Kamar Mandi</strong></h5>
                        <p class="card-text justify-text">Kamar Mandi Sekolah: Fasilitas saniter di lingkungan sekolah, dirancang untuk memberikan kebersihan dan kenyamanan bagi siswa dan staf. Dilengkapi dengan peralatan kebersihan dan perlengkapan mandi yang memadai, menciptakan lingkungan yang higienis dan mendukung kebutuhan dasar sanitasi di sekolah.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<hr>
@endsection
