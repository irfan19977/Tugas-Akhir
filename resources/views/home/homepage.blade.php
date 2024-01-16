@extends('home.layouts.master')
@section('content')
<section class="hero-section" id="hero">

  <div class="wave">

    <svg width="100%" height="355px" viewBox="0 0 1920 355" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
      <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
          <path d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,757 L1017.15166,757 L0,757 L0,439.134243 Z" id="Path"></path>
        </g>
      </g>
    </svg>

  </div>

  <div class="container">
    <div class="row align-items-center">
      <div class="col-12 hero-text-image">
        <div class="row">
          <div class="col-lg-8 text-center text-lg-start">
            <h1 data-aos="fade-right">SMK WIYATA MANDALA</h1>
            <p class="mb-5" data-aos="fade-right" data-aos-delay="100">Jl. Pare Kandangan No.1945, Kemirahan, 
              Damarwulan, Kec. Kepung, Kabupaten Kediri</p>
            <p data-aos="fade-right" data-aos-delay="200" data-aos-offset="-500"><a href="#" class="btn btn-outline-white">Daftar Sekarang</a></p>
          </div>
          <div class="col-lg-4 iphone-wrap">
            <img src="{{ asset('hekel/assets/img/phone_1.png') }}" alt="Image" class="phone-1" data-aos="fade-right">
            <img src="{{ asset('hekel/assets/img/phone-2.png') }}" alt="Image" class="phone-2" data-aos="fade-right" data-aos-delay="200">
          </div>
        </div>
      </div>
    </div>
  </div>

</section>

<main id="main">
    <!-- ======= Home Section ======= -->
    <section class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="step">
              <span class="number">01</span>
              <h3>Pendaftaran</h3>
              <p>Ayo daftar sekarang di SMK Wiyata Mandala Kepung</p>
              <p><a href="#" class="btn btn-primary">Info Selengkapnya</a></p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="step">
              <span class="number">02</span>
              <h3>Fasillitas Sekolah</h3>
              <p>
                Fasilitas yang tersedia di SMK Wiyata Mandala sebagai berikut</p>
              <p><a href="#" class="btn btn-primary">Info Selengkapnya</a></p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="step">
              <span class="number">03</span>
              <h3>Manual Book</h3>
              <p>
                Berikut merupakan manual book website SMK Wiyata Mandala</p>
              <p><a href="#" class="btn btn-primary">Download Manual Book</a></p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ======= CTA Section ======= -->
    <section class="section cta-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-7 me-auto">
            <h2 class="mb-4">Sambutan Kepala Sekolah</h2>
            <p class="mb-4  justify-text" text-align="justify">Selamat datang di website Sekolah Menengah Kejuruan (SMK) Wiyata Mandala Kepung semoga bermanfaat untuk seluruh unsur pimpinan, guru, karyawan dan siswa serta khalayak umum untuk mendapatkan akses informasi tentang sekolah kami, mulai dari profil, aktifitas/kegiatan serta fasilitas sekolah kami.</p>
            <p class="mb-4  justify-text" text-align="justify">Tentunya dalam penyajian informasi masih banyak kekurangan, oleh karena itu kepada seluruh civitas akademika dan masyarakat umum dapat memberika saran dan kritikan yang membangun demi kemajuan website ini lebih lanjut.</p>
            <p><a href="#" class="btn btn-primary">Info Selengkapnya</a></p>
          </div>
          <div class="col-md-4" data-aos="fade-left">
            <img src="{{ asset('kepsek.png') }}" alt="Image" class="img-fluid">
          </div>
        </div>
      </div>
    </section>
    <!-- End CTA Section -->

    <!-- ======= Testimonials Section ======= -->
    <section class="section border-top border-bottom">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-4">
            <h2 class="section-heading">Review From Our Users</h2>
          </div>
        </div>
        <div class="row justify-content-center text-center">
          <div class="col-md-7">

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
              <div class="swiper-wrapper">

                <div class="swiper-slide">
                  <div class="review text-center">
                    <p class="stars">
                      <span class="bi bi-star-fill"></span>
                      <span class="bi bi-star-fill"></span>
                      <span class="bi bi-star-fill"></span>
                      <span class="bi bi-star-fill"></span>
                      <span class="bi bi-star-fill muted"></span>
                    </p>
                    <h3>Excellent App!</h3>
                    <blockquote>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius ea delectus pariatur, numquam
                        aperiam dolore nam optio dolorem facilis itaque voluptatum recusandae deleniti minus animi,
                        provident voluptates consectetur maiores quos.</p>
                    </blockquote>

                    <p class="review-user">
                      <img src="assets/img/person_1.jpg" alt="Image" class="img-fluid rounded-circle mb-3">
                      <span class="d-block">
                        <span class="text-black">Jean Doe</span>, &mdash; App User
                      </span>
                    </p>

                  </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                  <div class="review text-center">
                    <p class="stars">
                      <span class="bi bi-star-fill"></span>
                      <span class="bi bi-star-fill"></span>
                      <span class="bi bi-star-fill"></span>
                      <span class="bi bi-star-fill"></span>
                      <span class="bi bi-star-fill muted"></span>
                    </p>
                    <h3>This App is easy to use!</h3>
                    <blockquote>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius ea delectus pariatur, numquam
                        aperiam dolore nam optio dolorem facilis itaque voluptatum recusandae deleniti minus animi,
                        provident voluptates consectetur maiores quos.</p>
                    </blockquote>

                    <p class="review-user">
                      <img src="assets/img/person_2.jpg" alt="Image" class="img-fluid rounded-circle mb-3">
                      <span class="d-block">
                        <span class="text-black">Johan Smith</span>, &mdash; App User
                      </span>
                    </p>

                  </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                  <div class="review text-center">
                    <p class="stars">
                      <span class="bi bi-star-fill"></span>
                      <span class="bi bi-star-fill"></span>
                      <span class="bi bi-star-fill"></span>
                      <span class="bi bi-star-fill"></span>
                      <span class="bi bi-star-fill muted"></span>
                    </p>
                    <h3>Awesome functionality!</h3>
                    <blockquote>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius ea delectus pariatur, numquam
                        aperiam dolore nam optio dolorem facilis itaque voluptatum recusandae deleniti minus animi,
                        provident voluptates consectetur maiores quos.</p>
                    </blockquote>

                    <p class="review-user">
                      <img src="assets/img/person_3.jpg" alt="Image" class="img-fluid rounded-circle mb-3">
                      <span class="d-block">
                        <span class="text-black">Jean Thunberg</span>, &mdash; App User
                      </span>
                    </p>

                  </div>
                </div><!-- End testimonial item -->

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Testimonials Section -->

    

  </main>
@endsection