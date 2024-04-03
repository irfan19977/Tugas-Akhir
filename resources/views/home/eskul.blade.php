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
                        <h1 data-aos="fade-up" data-aos-delay="">Ekstrakurikuler</h1>
                        <p class="mb-5" data-aos="fade-up" data-aos-delay="100">Berikut merupakan beberapa ekstrakurikuler
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
                    <img src="{{ asset('hekel/assets/img/ekstra/tbs.jpg') }}" class="card-img-top" alt="Gambar 2" style="object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title text-center"><strong>Tata Busana</strong></h5>
                    </div>
                </div>
            </div>
                
                <div class="col-md-3">
                    <div class="card" style="width: 90%;">
                        <img src="{{ asset('hekel/assets/img/ekstra/trs.jpeg') }}" class="card-img-top" alt="Gambar 2" style="object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title text-center"><strong>Tata Rias</strong></h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card" style="width: 90%;">
                        <img src="{{ asset('hekel/assets/img/ekstra/design-grafis.jpg') }}" class="card-img-top" alt="Gambar 2" style="object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title text-center"><strong>Design Grafis</strong></h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card" style="width: 90%;">
                        <img src="{{ asset('hekel/assets/img/ekstra/tartil1.jpg') }}" class="card-img-top" alt="Gambar 2" style="object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title text-center"><strong>Tartil</strong></h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card" style="width: 90%;">
                        <img src="{{ asset('hekel/assets/img/ekstra/band.png') }}" class="card-img-top" alt="Gambar 2" style="object-fit: cover; height: 178px;">                        <div class="card-body">
                            <h5 class="card-title text-center"><strong>Musik Band</strong></h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card" style="width: 90%;">
                        <img src="{{ asset('hekel/assets/img/ekstra/pidato.jpg') }}" class="card-img-top" alt="Gambar 2" style="object-fit: cover; height: 178px;">                        <div class="card-body">
                            <h5 class="card-title text-center"><strong>Pidato</strong></h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card" style="width: 90%;">
                        <img src="{{ asset('hekel/assets/img/ekstra/drumband.jpg') }}" class="card-img-top" alt="Gambar 2" style="object-fit: cover; height: 178px;">                        <div class="card-body">
                            <h5 class="card-title text-center"><strong>Drumband</strong></h5>
                        </div>
                    </div>
                </div>
            <div class="col-md-3">
                <div class="card" style="width: 90%;">
                    <img src="{{ asset('hekel/assets/img/ekstra/voly.jpg') }}" class="card-img-top" alt="Gambar 1" style="object-fit: cover; height: 178px;">
                    <div class="card-body">
                        <h5 class="card-title text-center"><strong>Bola Voly</strong></h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 90%;">
                    <img src="{{ asset('hekel/assets/img/ekstra/futsal.jpg') }}" class="card-img-top" alt="Gambar 1" style="object-fit: cover; height: 178px;">
                    <div class="card-body">
                        <h5 class="card-title text-center"><strong>Futsal</strong></h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 90%;">
                    <img src="{{ asset('hekel/assets/img/ekstra/badminton.jpg') }}" class="card-img-top" alt="Gambar 1" style="object-fit: cover; height: 178px;">
                    <div class="card-body">
                        <h5 class="card-title text-center"><strong>Badminton</strong></h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 90%;">
                    <img src="{{ asset('hekel/assets/img/ekstra/sepak-bola.jpg') }}" class="card-img-top" alt="Gambar 1" style="object-fit: cover; height: 178px;">
                    <div class="card-body">
                        <h5 class="card-title text-center"><strong>Sepak Bola</strong></h5>
                        </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 90%;">
                    <img src="{{ asset('hekel/assets/img/ekstra/renang.jpg') }}" class="card-img-top" alt="Gambar 1" style="object-fit: cover; height: 178px;">
                    <div class="card-body">
                        <h5 class="card-title text-center"><strong>Berenang</strong></h5>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>


<hr>
@endsection
