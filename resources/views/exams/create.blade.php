@extends('layouts.app')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Tambah Ujian</h1>
        </div>

        <div class="section-body">

            <div class="card">
                <div class="card-header">
                    <h4><i class="fas fa-exam"></i> Tambah Ujian</h4>
                </div>

                <div class="card-body">
                    <form action="{{ route('exams.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label>NAMA</label>
                            <input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="Masukkan Nama Ujian">
                            @error('name')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>WAKTU (MENIT)</label>
                            <input type="number" name="time" value="{{ old('time') }}" class="form-control" placeholder="Masukkan Waktu Ujian">

                            @error('time')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>TOTAL SOAL</label>
                            <input type="number" name="total_question" value="{{ old('total_question') }}" class="form-control" placeholder="Masukkan Total Pertanyaan">

                            @error('total_question')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>WAKTU MULAI</label>
                            <input type="datetime-local" name="start" value="<?= date('Y-m-d', time()); ?>" class="form-control @error('start') is-invalid @enderror">

                            @error('start')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>WAKTU SELESAI</label>
                            <input type="datetime-local" name="end" value="<?= date('Y-m-d', time()); ?>" class="form-control @error('end') is-invalid @enderror">

                            @error('end')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <livewire:question-checklist />


                        <button class="btn btn-primary mr-1 btn-submit" type="submit"><i class="fa fa-paper-plane"></i>
                            KIRIM</button>
                        <button class="btn btn-warning btn-reset" type="reset"><i class="fa fa-redo"></i> RESET</button>

                    </form>
                </div>
            </div>
        </div>
    </section>
</div>

@stop
