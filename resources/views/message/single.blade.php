@extends('layouts.app')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Detail Pesan</h1>
        </div>

        <div class="section-body">

            @can('message.show')
                <div class="card">
                    <div class="card-header">
                    <h4>{{ $messages->name }}</h4>
                    </div>
                    <div class="card-body">
                    {{ $messages->content }}
                    </div>
                    <div class="card-footer d-flex justify-content-between">
                        <button id="backButton" class="btn btn-light">Kembali</button>
                        <button id="replyButton" class="btn btn-primary">Balas Pesan</button>
                    </div>                    
                </div>
            @endcan
        </div>

    </section>
    <script>
        document.getElementById('backButton').addEventListener('click', function() {
            // Kembali ke halaman sebelumnya dan refresh halaman tersebut
            window.location.replace(document.referrer);
        });

        document.getElementById('replyButton').addEventListener('click', function() {
            // Mengecek apakah nomor WhatsApp sudah memiliki kode negara
            var waNumber = '{{ $messages->no_wa }}';
            if (!/^\+/.test(waNumber)) {
                // Jika tidak, tambahkan kode negara Indonesia
                waNumber = '+62' + waNumber.replace(/^0/, '');
            }

            // Membuat pesan awal untuk ditampilkan dalam obrolan WhatsApp
            var initialMessage = encodeURIComponent('Hi {{ $messages->name }},  Saya dari admin SMK Wiyata Mandala ingin memberikan jawaban atas pertanyaan yang Anda ajukan sebelumnya "{{ $messages->content }}"');

            // Membuka aplikasi WhatsApp dengan nomor yang diambil dan pesan awal
            window.open('https://wa.me/' + waNumber + '?text=' + initialMessage, '_blank');

            // Kirim permintaan AJAX ke backend untuk mengubah status pesan menjadi "dibaca"
            var xhr = new XMLHttpRequest();
            xhr.open('POST', '{{ route("updateStatus", $messages->id) }}', true);
            xhr.setRequestHeader('X-CSRF-TOKEN', '{{ csrf_token() }}');
            xhr.setRequestHeader('Content-Type', 'application/json');
            xhr.onload = function() {
                if (xhr.status === 200) {
                    // Jika permintaan berhasil, lakukan tindakan yang diinginkan
                    console.log('Status pesan berhasil diperbarui');
                    // Misalnya, tampilkan pesan berhasil atau lakukan tindakan lain yang diinginkan
                } else {
                    // Jika terjadi kesalahan, tampilkan pesan atau lakukan tindakan penanganan kesalahan
                    console.error('Terjadi kesalahan saat memperbarui status pesan');
                }
            };
            xhr.onerror = function() {
                console.error('Gagal mengirim permintaan AJAX');
            };
            xhr.send(JSON.stringify({status: 'dibalas'}));
        });


    </script>
   

    

    @endsection

   
    
    
    
