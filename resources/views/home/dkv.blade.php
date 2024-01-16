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
                        <h1 data-aos="fade-up" data-aos-delay="">Desain Komunikasi Visual</h1>
                        <p class="mb-5" data-aos="fade-up" data-aos-delay="100">Berikut merupakan profile jurusan Desain Komunikasi Visual</p>
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
                <h3 class="mb-6">Mengenal Lebih Dekat Jurusan Desain Komunikasi Visual</h3>
                <p class="mb-6">Jurusan Desain Komunikasi Visual merupakan bidang studi yang memadukan seni, desain, dan teknologi untuk menciptakan pesan visual yang efektif. Dalam konteks pendidikan tinggi, jurusan ini menjadi pilihan yang menarik bagi individu yang tertarik dalam seni rupa dan memiliki minat dalam menyampaikan pesan secara visual.
                </p>
                <p class="mb-6">Pada intinya, jurusan ini mengajarkan prinsip-prinsip desain grafis, ilustrasi, fotografi, dan elemen-elemen visual lainnya untuk mengomunikasikan ide dan informasi dengan daya tarik estetis. Mahasiswa belajar tentang kreativitas, komunikasi visual, serta penerapan teknologi dalam menghasilkan karya desain yang memenuhi kebutuhan klien atau audiens.</p>
                <p class="mb-6">Jurusan Desain Komunikasi Visual mempersiapkan individu untuk menjadi desainer visual yang kompeten dan kreatif, mampu mengartikulasikan pesan melalui elemen-elemen visual dengan pemahaman mendalam terhadap estetika dan kebutuhan komunikasi. Dengan perkembangan media digital, jurusan ini menawarkan peluang karir yang beragam dan terus berkembang.
                </p>
            </div>
            
        </div>
    </div>
</section>

<section class="section pb-0" style="min-height: 400px;">
    <div class="container">
        <div class="row align-items-center justify-text">
            <div class="col-md-6" data-aos="fade-left" style="min-height: 400px;">
                <h3 class="mb-4 text-center"> Alasan Memilih Jurusan Desain Komunikasi Visual</h3>
                <p class="mb-4">Ada beberapa alasan mengapa seseorang memilih untuk mengejar pendidikan di bidang Desain Komunikasi Visual:</p>
                <p>
                    <ol>
                        <li class="mb-2"><strong>Ekspresi Kreatif :</strong> Jurusan ini memberikan ruang bagi ekspresi kreatif dan pengembangan ide-ide inovatif melalui seni visual.
                        </li>
                        <li class="mb-2"><strong>Pemahaman Terhadap Audiens :</strong> Mahasiswa belajar untuk memahami audiens dan menciptakan desain yang sesuai dengan preferensi dan kebutuhan mereka.
                        </li>
                        <li class="mb-2"> <strong>Peluang Karir yang Luas :</strong> Lulusan memiliki peluang untuk bekerja di berbagai industri, termasuk sebagai desainer grafis, desainer web, dan spesialis media visual.
                        </li>
                        <li class="mb-2"><strong>Daya Saing di Era Digital :</strong> Dengan keahlian dalam desain digital, lulusan dapat bersaing di pasar kerja yang semakin didominasi oleh media online dan konten digital.
                        </li>
                    </ol>
                </p>
            </div>
            <div class="col-md-6" data-aos="fade-right" style="min-height: 420px;">
                <h3 class="mb-4 text-center">Materi Yang Dipelajari</h3>
                <br>
                <p class="mb-4">Mahasiswa jurusan Desain Komunikasi Visual akan mengikuti beragam mata kuliah yang mencakup:</p>
                <p>
                    <ol>
                        <li class="mb-2"><strong>Prinsip Desain Grafis :</strong> Mempelajari elemen-elemen desain, komposisi visual, dan penggunaan warna untuk menciptakan pesan yang efektif.
                        </li>
                        <li class="mb-2"><strong>Ilustrasi dan Seni Digital :</strong> Pengembangan keterampilan dalam menggambar tangan dan menggunakan alat-alat digital untuk menciptakan ilustrasi yang menarik.
                        </li>
                        <li class="mb-2"><strong>Fotografi :</strong> Menyelami teknik fotografi, komposisi gambar, dan pengolahan digital untuk mendukung desain visual.
                        </li>
                        <li class="mb-2"><strong>Desain Identitas Visual :</strong> Mempelajari pembuatan logo, brand identity, dan panduan desain untuk merepresentasikan merek atau organisasi.
                        </li>
                    </ol>
                </p>
            </div>
        </div>
    </div>
</section>



<hr>
@endsection
