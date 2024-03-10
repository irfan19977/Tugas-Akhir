@extends('layouts.app')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Tambah Soal Ujian</h1>
        </div>

        <div class="section-body">

            <div class="card">
                <div class="card-header">
                    <h4><i class="fas fa-question"></i> Tambah Soal Ujian</h4>
                </div>

                <div class="card-body">
                    <form action="{{ route('questions.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label>JUDUL</label>
                            <select class="form-control select-subject @error('subject_id') is-invalid @enderror" name="subject_id">
                                <option value="">- PILIH JUDUL -</option>
                                @foreach ($subjects as $subject)
                                    <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                                @endforeach
                            </select>
                            @error('subject_id')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-group">
                                    <label>Unggah Video</label>
                                    <input type="file" class="form-control-file @error('video_id') is-invalid @enderror" name="video_id" accept="video/*" onchange="validateAndPreviewVideo(event)">
                                    @error('video_id')
                                    <div class="invalid-feedback" style="display: block">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="preview-video" style="display: none;">
                                    <video controls id="video-preview" style="max-width: 100%; height: 250px;"></video>
                                </div>
                            </div>
                            
                            <div class="col-4">
                                <div class="form-group">
                                    <label>Unggah Audio</label>
                                    <input type="file" class="form-control-file @error('audio_id') is-invalid @enderror" name="audio_id" accept="audio/*" onchange="validateAndPreviewAudio(event)">
                                    @error('audio_id')
                                    <div class="invalid-feedback" style="display: block">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="preview-audio" style="display: none;">
                                    <audio controls id="audio-preview"></audio>
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="form-group">
                                    <label>Unggah Image</label>
                                    <input type="file" class="form-control-file @error('image_id') is-invalid @enderror" name="image_id" accept="image/*" onchange="previewImage(event)">
                                    @error('image_id')
                                    <div class="invalid-feedback" style="display: block">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="preview-image" style="display: none;">
                                    <img id="image-preview" style="width: 200px; height: 200px;">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>DETAIL</label>
                            <textarea name="detail" cols="30" rows="30" class="form-control" placeholder="Masukkan Pertanyaan">{{ old('detail') }}</textarea>
                            @error('detail')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>PILIHAN A</label>
                            <input type="text" name="option_A" value="{{ old('option_A') }}" class="form-control" placeholder="Masukkan Jawaban">

                            @error('option_A')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>PILIHAN B</label>
                            <input type="text" name="option_B" value="{{ old('option_B') }}" class="form-control" placeholder="Masukkan Jawaban">

                            @error('option_B')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>PILIHAN C</label>
                            <input type="text" name="option_C" value="{{ old('option_C') }}" class="form-control" placeholder="Masukkan Jawaban">

                            @error('option_C')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>PILIHAN D</label>
                            <input type="text" name="option_D" value="{{ old('option_D') }}" class="form-control" placeholder="Masukkan Jawaban">

                            @error('option_D')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>PILIHAN E</label>
                            <input type="text" name="option_E" value="{{ old('option_E') }}" class="form-control" placeholder="Masukkan Jawaban">

                            @error('option_E')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>JAWABAN</label>
                            <select name="answer" class="form-control">
                                <option value="">- PILIH JAWABAN -</option>
                                <option value="A" {{ old('answer') == 'option_A' ? 'selected' : 'E' }}>A</option>
                                <option value="B" {{ old('answer') == 'option_B' ? 'selected' : 'D' }}>B</option>
                                <option value="C" {{ old('answer') == 'option_C' ? 'selected' : 'C' }}>C</option>
                                <option value="D" {{ old('answer') == 'option_D' ? 'selected' : 'B' }}>D</option>
                                <option value="E" {{ old('answer') == 'option_E' ? 'selected' : 'A' }}>E</option>
                            </select>
                            @error('answer')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>PEMBAHASAN</label>
                            <textarea name="explanation" cols="30" rows="30" class="form-control" placeholder="Masukkan Pembahasan Soal">{{ old('explanation') }}</textarea>
                            @error('explanation')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <button class="btn btn-primary mr-1 btn-submit" type="submit"><i class="fa fa-paper-plane"></i>
                            SIMPAN</button>
                        <button class="btn btn-warning btn-reset" type="reset"><i class="fa fa-redo"></i> RESET</button>

                    </form>
                </div>
            </div>
        </div>
    </section>
</div>

<script>
    // Fungsi untuk menghapus preview video
    function clearVideoPreview() {
        const videoPreview = document.getElementById('video-preview');
        videoPreview.style.display = 'none'; // Sembunyikan preview video
        videoPreview.src = ''; // Reset source video
        document.querySelector('.preview-video').style.display = 'none'; // Sembunyikan div preview-video
    }

    // Tambahkan event listener untuk tombol reset
    document.querySelector('.btn-reset').addEventListener('click', function() {
        clearVideoPreview();
    });

    // Fungsi validasi dan preview video
    function validateAndPreviewVideo(event) {
        const input = event.target;
        const file = input.files[0];

        // Hapus preview video saat tombol reset diklik
        if (!file) {
            clearVideoPreview();
            return;
        }

        const fileType = file.type;

        // List of allowed video mime types
        const allowedTypes = ['video/mp4', 'video/webm', 'video/ogg'];

        if (!allowedTypes.includes(fileType)) {
            input.value = ''; // Clear the input field
            swal({
                title: "Error",
                text: "Hanya file video yang diperbolehkan.",
                icon: "error",
            });
            clearVideoPreview(); // Hapus preview video
            return;
        }

        // Menampilkan preview video
        const videoPreview = document.getElementById('video-preview');
        videoPreview.style.display = 'block'; // Menampilkan preview video
        const videoURL = URL.createObjectURL(file);
        videoPreview.src = videoURL;
        document.querySelector('.preview-video').style.display = 'block'; // Menampilkan div preview-video
    }

    // Fungsi untuk menghapus preview audio
    function clearAudioPreview() {
        const audioPreview = document.getElementById('audio-preview');
        audioPreview.style.display = 'none'; // Sembunyikan preview audio
        audioPreview.src = ''; // Reset source audio
        document.querySelector('.preview-audio').style.display = 'none'; // Sembunyikan div preview-audio
    }

    // Tambahkan event listener untuk tombol reset
    document.querySelector('.btn-reset').addEventListener('click', function() {
        clearAudioPreview();
    });

    // Fungsi validasi dan preview audio
    function validateAndPreviewAudio(event) {
        const input = event.target;
        const file = input.files[0];

        // Hapus preview audio saat tombol reset diklik
        if (!file) {
            clearAudioPreview();
            return;
        }

        const fileType = file.type;

        // List of allowed audio mime types
        const allowedTypes = ['audio/mpeg', 'audio/wav', 'audio/ogg'];

        if (!allowedTypes.includes(fileType)) {
            input.value = ''; // Clear the input field
            swal({
                title: "Error",
                text: "Hanya file audio yang diperbolehkan.",
                icon: "error",
            });
            clearAudioPreview(); // Hapus preview audio
            return;
        }

        // Menampilkan preview audio
        const audioPreview = document.getElementById('audio-preview');
        audioPreview.style.display = 'block'; // Menampilkan preview audio
        const audioURL = URL.createObjectURL(file);
        audioPreview.src = audioURL;
        document.querySelector('.preview-audio').style.display = 'block'; // Menampilkan div preview-audio
    }

    function clearImagePreview() {
    const imagePreview = document.getElementById('image-preview');
    imagePreview.style.display = 'none'; // Sembunyikan preview gambar
    imagePreview.src = ''; // Reset sumber gambar
    document.querySelector('.preview-image').style.display = 'none'; // Sembunyikan div preview-image
    }

    // Tambahkan event listener untuk tombol reset
    document.querySelector('.btn-reset').addEventListener('click', function() {
        clearImagePreview();
    });

    // Fungsi validasi dan preview gambar
    function previewImage(event) {
        const input = event.target;
        const file = input.files[0];

        // Hapus preview gambar saat tombol reset diklik
        if (!file) {
            clearImagePreview();
            return;
        }

        const fileType = file.type;

        // List of allowed image mime types
        const allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];

        if (!allowedTypes.includes(fileType)) {
            input.value = ''; // Clear the input field
            swal({
                title: "Error",
                text: "Hanya file gambar yang diperbolehkan.",
                icon: "error",
            });
            clearImagePreview(); // Hapus preview gambar
            return;
        }

        // Menampilkan preview gambar
        const imagePreview = document.getElementById('image-preview');
        imagePreview.style.display = 'block'; // Menampilkan preview gambar
        const imageURL = URL.createObjectURL(file);
        imagePreview.src = imageURL;
        document.querySelector('.preview-image').style.display = 'block'; // Menampilkan div preview-image
    }
</script>

@stop