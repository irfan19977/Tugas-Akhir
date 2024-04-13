@extends('layouts.app')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Kategori Berita</h1>
        </div>

        <div class="section-body">

            @can('kategori.create')
                <div class="card">
                    <div class="card-header">
                        <h4><i class="fas fa-atlas"></i> Edit Kategori Berita</h4>
                    </div>

                    <div class="card-body">

                        <form action="{{ route('kategori.update', ['kategori' => $categories->slug]) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label>NAMA KATEGORI</label>
                                <input type="text" name="name" value="{{ $categories->name }}" placeholder="Masukkan Judul categories" class="form-control @error('name') is-invalid @enderror">

                                @error('name')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <button class="btn btn-primary mr-1 btn-submit" type="submit"><i class="fa fa-paper-plane"></i> SIMPAN</button>
                            <button class="btn btn-warning btn-back" type="button"><i class="fa fa-redo"></i> KEMBALI</button>
                        </form>

                    </div>
                </div>
            @endcan
        </div>

    </section>
</div>

<script>
    document.querySelector('.btn-back').addEventListener('click', function() {
        window.history.back();
    });
</script>

@stop