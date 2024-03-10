@extends('layouts.app')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Judul</h1>
        </div>

        <div class="section-body">

            @can('subjects.create')
                <div class="card">
                    <div class="card-header">
                        <h4><i class="fas fa-atlas"></i> Edit Judul</h4>
                    </div>

                    <div class="card-body">

                        <form action="{{ route('subjects.update', ['subject' => $subject->slug]) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label>NAMA</label>
                                <input type="text" name="name" value="{{ $subject->name }}" placeholder="Masukkan Judul Subject" class="form-control @error('name') is-invalid @enderror">

                                @error('name')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <button class="btn btn-primary mr-1 btn-submit" type="submit"><i class="fa fa-check-circle"></i> KIRIM</button>
                            <button class="btn btn-warning btn-back" type="back"><i class="fa fa-redo"></i> KEMBALI</button>


                        </form>

                    </div>
                </div>
            @endcan
        </div>

    </section>
</div>

@stop