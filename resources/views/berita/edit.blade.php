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

                    <form action="{{ route('beritaadmin.update', ['beritaadmin' =>$berita->id]) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label>Judul Berita</label>
                            <input type="text" name="judul" value="{{ $berita->judul }} }}" placeholder="Masukkan Judul Berita" class="form-control @error('judul') is-invalid @enderror">
                            @error('judul')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea name="desc" class="form-control @error('desc') is-invalid @enderror">{{$berita->desc }}</textarea>
                            @error('desc')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    
                        <div class="form-group">
                            <label>Isi Berita</label>
                            <textarea name="isi" class="form-control @error('isi') is-invalid @enderror">{{ $berita->isi }}</textarea>
                            @error('isi')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    
                        <div class="form-group">
                            <label for="sampul">Gambar Sampul</label>
                            @if($berita->sampul)
                                <div id="preview">
                                    <img src="{{ asset($berita->sampul) }}" alt="Sampul Berita" style="max-width: 200px; margin-bottom: 10px;">
                                </div>
                            @else
                                <div id="preview" style="display: none;"></div>
                            @endif
                            <input type="file" name="sampul" id="sampul" class="form-control-file @error('sampul') is-invalid @enderror" onchange="previewImage(event)">
                            @error('sampul')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <button class="btn btn-primary mr-1 btn-submit" type="submit"><i class="fa fa-upload"></i> UPLOAD</button>
                        <a href="javascript:history.back()" class="btn btn-warning btn-back">
                            <i class="fa fa-redo"></i> BACK
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
        
        reader.onload = function() {
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