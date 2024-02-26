@extends('home.layouts.master')

@section('content')
<main id="main">

  <!-- ======= Single Blog Section ======= -->
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
            <div class="col-md-10 text-center hero-text">
              <h1 data-aos="fade-up" data-aos-delay="">{{ $beritas->judul }}</h1>
              <p class="mb-5" data-aos="fade-up" data-aos-delay="100">{{ $beritas->updated_at }} &bullet; By <a href="#" class="text-white">Admin</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>

  <section class="site-section mb-4">
    <div class="container">
      <div class="row">
        <div class="col-md-8 blog-content justify-text">
          <div class="row mb-3">
              <figure style="margin-bottom: 0;">
                  <img src="{{ asset('storage/sampul/' . basename($beritas->sampul)) }}" alt="{{ $beritas->judul }} Sampul" style="height: 500px; width: 730px;">             
                  <figcaption class="text-center" style="margin-top: 0;">{{ $beritas->keterangan }}</figcaption>
              </figure>
          </div>
          <div>
              <p>{!! $beritas->isi!!}</p>
          </div>      
      </div>
      
        <div class="col-md-4 sidebar">
          <div class="sidebar-box">
            <img src="{{ asset('hekel/assets/img/aku.jpg') }}" alt="Image placeholder" class="img-fluid mb-4">
            <h3>About The Author</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
            <p><a href="#" class="btn btn-primary btn-sm">Read More</a></p>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>

  <script>
    CKEDITOR.replace('isi');
</script>
@endsection