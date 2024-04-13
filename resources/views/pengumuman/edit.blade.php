@extends('layouts.app')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Pengumuman</h1>
        </div>

        <div class="section-body">

            @can('pengumuman.edit')
                <div class="card">
                    <div class="card-header">
                        <h4><i class="fas fa-file-video"></i> Edit Pengumuman</h4>
                    </div>

                    <div class="card-body">

                        <form action="{{ route('pengumuman.update', ['pengumuman' => $pengumumans->slug]) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label>TITLE</label>
                                <input type="text" name="title" value="{{ $pengumumans->title }}" placeholder="Masukkan Judul Video" class="form-control @error('title') is-invalid @enderror">

                                @error('title')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>CAPTION</label>
                                <textarea name="caption" cols="30" rows="30" class="form-control">{{ $pengumumans->caption }}</textarea>
                                @error('caption')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="file_id">Unggah File PDF</label>
                                <input type="file" class="form-control-file @error('file_id') is-invalid @enderror" name="file_id" id="file_id">
                                @error('file_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            
                            @if($pengumumans->file_id)
                                <div class="form-group">
                                    <label>File PDF yang Telah Diunggah</label>
                                    <a href="{{ asset('storage/documents/' . $pengumumans->file_id) }}" target="_blank">Unduh File PDF</a>
                                </div>
                            @endif
                            
                            

                            <button class="btn btn-primary mr-1 btn-submit" type="submit"><i class="fa fa-paper-plane"></i> SIMPAN</button>
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
    function goBack() {
        window.history.back();
    }
</script>
@stop