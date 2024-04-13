@extends('home.layouts.master')

@section('content')
<main id="main">

  <!-- ======= Single Blog Section ======= -->
  <section class="hero-section inner-page">
    <div class="wave">

      <svg width="1920px" height="200px" viewBox="0 0 1920 265" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
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
            <div class="col-md-12 text-center hero-text">
              <h1 data-aos="fade-up" data-aos-delay="">{{ $beritas->judul }}</h1>
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
          <div class="row mb-3" style="margin-top: 25px;">
              <figure style="margin-bottom: 0;">
                  <img src="{{ asset('storage/sampul/' . basename($beritas->sampul)) }}" alt="{{ $beritas->judul }} Sampul" style="height: 500px; width: 730px;">             
                  <figcaption class="text-center" style="margin-top: 0;">{{ $beritas->keterangan }}</figcaption>
              </figure>
          </div>
        
          <div>
              <p>{!! $beritas->isi!!}</p>
          </div>   
          <p class="mb-5" data-aos="fade-up" data-aos-delay="100">{{ $beritas->updated_at }} &bullet; By Admin</p>   
      </div>
      
      <div class="col-md-4 sidebar">
        <div class="sidebar-box">
          <form action="{{ route('berita') }}" method="GET" class="search-form">
            <div class="form-group">
              <span class="icon fa fa-search"></span>
              <input type="text" name="q" class="form-control" placeholder="Masukkan Kata Kunci Berita">
            </div>
          </form>
        </div>
        <div class="sidebar-box">
          <div class="categories">
            <h3>DAFTAR KATEGORI</h3>
            @foreach($categories as $category)
                @php
                    $jumlahBerita = $category->berita()->count();
                @endphp
                <li><a href="{{ route('berita.by.category', ['slug' => $category->slug]) }}">{{ $category->name }} <span>({{ $jumlahBerita }})</span></a></li>
            @endforeach
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