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
                        <h1 data-aos="fade-up" data-aos-delay="">Contact Us</h1>
                        <p class="mb-5" data-aos="fade-up" data-aos-delay="100">Hubungi kami untuk bantuan atau
                            pertanyaan tambahan</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<section class="section">
    <div class="container">
        <div class="row mb-5 align-items-end">
            <div class="col-md-12" data-aos="fade-up">

                <h2>Formulir Hubungi Kami</h2>
                <p class="mb-0">Silakan gunakan formulir kontak di bawah ini untuk mengirim pertanyaan atau memberikan
                    umpan balik. Mohon masukkan nama, email, nomor WhatsApp yang aktif, dan isi dari saran atau
                    pertanyaan Anda. Kami akan dengan senang hati membantu Anda!</p>
            </div>

        </div>

        <div class="row">
            <div class="col-md-4 ms-auto order-2" data-aos="fade-up">
                <ul class="list-unstyled">
                    <li class="mb-3">
                        <strong class="d-block mb-1">Alamat</strong>
                        <span>Jl. Pare Kandangan No.10, Kemirahan, Damarwulan, Kec. Kepung, Kabupaten Kediri</span>
                    </li>
                    <li class="mb-3">
                        <strong class="d-block mb-1">no_wa</strong>
                        <span>0835-328-631</span>
                    </li>
                    <li class="mb-3">
                        <strong class="d-block mb-1">Email</strong>
                        <span>smkwiyatamandala@gmail.com</span>
                    </li>
                </ul>
            </div>

            <div class="col-md-6 mb-5 mb-md-0" data-aos="fade-up">
                <form action="{{ route('contact.store') }}" method="post" role="form" class="php-email-form">
                    @csrf
                    @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                    @endif
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="name">Nama</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="masukkan Nama Lengkap" required>
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Masukkan Alamat Email" required>
                        </div>
                        <div class="col-md-12 form-group mt-3">
                            <label for="no_wa">No. WhatsApp</label>
                            <input type="number" class="form-control" name="no_wa" id="no_wa" placeholder="Masukkan Nomor Whatsapp Yang AKtif" required>
                        </div>
                        <div class="col-md-12 form-group mt-3">
                            <label for="content">Pesan</label>
                            <textarea class="form-control" name="content" placeholder="Masukkan Pesan Kamu" required></textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>

                        <div class="col-md-6 form-group">
                            <button type="submit" class="btn btn-primary d-block w-100">Kirim Pesan</button>
                        </div>
                    </div>

                </form>
            </div>

        </div>
    </div>
</section>

@endsection
