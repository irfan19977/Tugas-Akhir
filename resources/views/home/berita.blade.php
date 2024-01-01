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
            <div class="col-md-7 text-center hero-text">
              <h1 data-aos="fade-up" data-aos-delay="">Berita Sekolah</h1>
              <p class="mb-5" data-aos="fade-up" data-aos-delay="100">Berikut merupakan berita mengenai sekolah SMK Wiyata Mandala</p>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>

  <section class="section">
    <div class="container">
      <div class="row mb-5">
       @foreach ($beritas as $berita)
       <div class="col-md-4">
        <div class="post-entry">
            <a href="{{ route('detail_berita', ['slug' => $berita->slug]) }}" class="d-block mb-4">
                <img src="{{ asset($berita->sampul) }}" alt="Image" class="img-fluid" style="height: 300px; width: 400px;">
            </a>
            <div class="post-text">
                <span class="post-meta">{{ $berita->updated_at }} &bullet; By <a href="#">Admin</a></span>
                <h3><a href="{{ route('detail_berita', ['slug' => $berita->slug]) }}">{{ $berita->judul }}</a></h3>
                <p>{!! Str::limit(strip_tags($berita->isi), 150) !!}</p>
                <p><a href="{{ route('detail_berita', ['slug' => $berita->slug]) }}" class="readmore">Read more</a></p>
            </div>
        </div>
      </div>
    
       @endforeach

      </div>

      <div class="row">
        <div class="col-12 text-center">
          <span class="p-3 active text-primary">1</span>
          <a href="#" class="p-3">2</a>
          <a href="#" class="p-3">3</a>
          <a href="#" class="p-3">4</a>
        </div>
      </div>
    </div>

  </section>
  <hr>
@endsection