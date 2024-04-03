@extends('layouts.app')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Berita</h1>
        </div>

        <div class="section-body">

            @can('beritaadmin.edit')
            <div class="card">
                <div class="card-header">
                    <h4><i class="fas fa-file-video"></i> Edit Berita</h4>
                </div>

                <div class="card-body">

                    <form method="POST" action="{{ route('beritaadmin.update', $berita->slug) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label>Judul Berita</label>
                            <input type="text" name="judul" value="{{ $berita->judul }}"
                                placeholder="Masukkan Judul Berita"
                                class="form-control @error('judul') is-invalid @enderror">
                            @error('judul')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Isi Berita</label>
                            <textarea name="isi"
                                class="form-control @error('isi') is-invalid @enderror">{{ $berita->isi }}</textarea>
                            @error('isi')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Sampul Lama</label>
                            @if($berita->sampul)
                            <img src="{{ asset('storage/sampul/' . basename($berita->sampul)) }}"
                                alt="{{ $berita->judul }} Sampul" style="max-width: 100px;">
                            @else
                            Tidak ada sampul
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Upload Sampul Baru</label>
                            <input type="file" name="sampul" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Keterangan Sampul</label>
                            <input type="text" name="keterangan" value="{{ $berita->keterangan }}"
                                placeholder="Masukkan Keterangan Sampul"
                                class="form-control @error('keterangan') is-invalid @enderror">
                            @error('keterangan')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <button class="btn btn-primary mr-1 btn-submit" type="submit"><i class="fa fa-paper-plane"></i>
                            SIMPAN</button>
                        <a href="javascript:history.back()" class="btn btn-warning btn-back">
                            <i class="fa fa-redo"></i> KEMBALI
                        </a>


                    </form>

                </div>
            </div>
            @endcan
        </div>
    </section>
</div>


<script>
    function previewImage(event) {
        var preview = document.getElementById('preview');
        preview.innerHTML = '';

        var input = event.target;
        var reader = new FileReader();

        reader.onload = function () {
            var img = document.createElement('img');
            img.src = reader.result;
            img.alt = 'Sampul Berita';
            img.style.maxWidth = '200px';
            img.style.marginBottom = '10px';
            preview.appendChild(img);
        };

        reader.readAsDataURL(input.files[0]);
        preview.style.display = 'block';
    }

</script>
<script>
    function goBack() {
        window.history.back();
    }

</script>
<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('isi');

</script>
@stop
