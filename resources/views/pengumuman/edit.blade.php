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

                        <form action="{{ route('pengumuman.update', ['pengumuman' => $pengumumans->id]) }}" method="POST">
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
                                <input type="text" name="caption" value="{{ $pengumumans->caption }}" placeholder="Masukkan Caption Video" class="form-control @error('caption') is-invalid @enderror">

                                @error('caption')
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
    function goBack() {
        window.history.back();
    }
</script>
@stop