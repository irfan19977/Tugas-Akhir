@extends('layouts.app')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Edit Soal</h1>
        </div>

        <div class="section-body">

            <div class="card">
                <div class="card-header">
                    <h4><i class="fas fa-question"></i> Edit Soal</h4>
                </div>

                <div class="card-body">
                    <form action="{{ route('questions.update', $question->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label>JUDUL</label>
                            <select class="form-control select-subject @error('subject_id') is-invalid @enderror"
                                name="subject_id">
                                <option value="">- SELECT SUBJECT -</option>
                                @foreach ($subjects as $subject)
                                @if ($question->subject_id == $subject->id )
                                <option value="{{ $subject->id }}" selected>{{ $subject->name }}</option>
                                @else
                                <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                                @endif
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
                                    <input type="file" class="form-control-file @error('video_id') is-invalid @enderror"
                                        name="video_id" id="video_id" onchange="previewVideo(event)" accept="video/*">
                                    @error('video_id')
                                    <div class="invalid-feedback" style="display:  block">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="preview-video" style="display: none;">
                                    <video id="video-preview" width="100%" height="250px" controls></video>
                                </div>
                                @if($question->video_id)
                                <div class="existing-video" id="existing-video">
                                    <video id="existing-video-src" width="100%" height="250px" controls>
                                        <source src="{{ asset('storage/videos/' . $question->video_id) }}"
                                            type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                </div>
                                @else
                                <div class="existing-video" id="existing-video">
                                    {{-- Tidak ada video tersedia. --}}
                                </div>
                                @endif
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label>Unggah Audio</label>
                                    <input type="file" class="form-control-file @error('audio_id') is-invalid @enderror"
                                        name="audio_id" id="audio_id" onchange="previewAudio(event)" accept="audio/*">
                                    @error('audio_id')
                                    <div class="invalid-feedback" style="display: block">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="preview-audio" style="display: none;">
                                    <audio id="audio-preview" controls></audio>
                                </div>
                                @if($question->audio_id)
                                <div class="existing-audio" id="existing-audio">
                                    <audio id="existing-audio-src" controls>
                                        <source src="{{ asset('storage/audios/' . $question->audio_id) }}"
                                            type="audio/mpeg">
                                        Your browser does not support the audio tag.
                                    </audio>
                                </div>
                                @else
                                <div class="existing-audio" id="existing-audio">
                                    {{-- Tidak ada audio tersedia. --}}
                                </div>
                                @endif
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label>Unggah Image</label>
                                    <input type="file" class="form-control-file @error('image_id') is-invalid @enderror"
                                        name="image_id" id="image_id"  accept="image/*" onchange="previewImage(event)">
                                    @error('image_id')
                                    <div class="invalid-feedback" style="display: block">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="preview-image" style="display: none;">
                                    <img id="image-preview" style="width: 200px; height: 200px;">
                                </div>
                                @if($question->image_id)
                                <div class="existing-image" id="existing-image">
                                    <img id="existing-image-src"
                                        src="{{ asset('storage/images/' . $question->image_id) }}" alt="Existing Image"
                                        style="max-width: 200px; max-height: 200px;">
                                </div>
                                @else
                                <div class="existing-image" id="existing-image">
                                    {{-- Tidak ada gambar tersedia. --}}
                                </div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label>DETAIL</label>
                            <textarea name="detail" cols="30" rows="30"
                                class="form-control">{{ old('detail', $question->detail) }}</textarea>
                            @error('detail')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>PILIHAN A</label>
                            <input type="text" name="option_A" value="{{ old('option_A', $question->option_A) }}"
                                class="form-control">

                            @error('option_A')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>PILIHAN B</label>
                            <input type="text" name="option_B" value="{{ old('option_B', $question->option_B) }}"
                                class="form-control">

                            @error('option_B')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>PILIHAN C</label>
                            <input type="text" name="option_C" value="{{ old('option_C', $question->option_C) }}"
                                class="form-control">

                            @error('option_C')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>PILIHAN D</label>
                            <input type="text" name="option_D" value="{{ old('option_D', $question->option_D) }}"
                                class="form-control">

                            @error('option_D')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>PILIHAN E</label>
                            <input type="text" name="option_E" value="{{ old('option_E', $question->option_E) }}"
                                class="form-control">

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
                                <option value="A" {{ old('answer', $question->answer) == 'A' ? 'selected' : '' }}>A</option>
                                <option value="B" {{ old('answer', $question->answer) == 'B' ? 'selected' : '' }}>B</option>
                                <option value="C" {{ old('answer', $question->answer) == 'C' ? 'selected' : '' }}>C</option>
                                <option value="D" {{ old('answer', $question->answer) == 'D' ? 'selected' : '' }}>D</option>
                                <option value="E" {{ old('answer', $question->answer) == 'E' ? 'selected' : '' }}>E</option>
                            </select>
                            @error('answer')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>PEMBAHASAN</label>
                            <textarea name="explanation" cols="30" rows="30"
                                class="form-control">{{ old('explanation', $question->explanation) }}</textarea>
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
    window.onload = function () {
        const imagePreview = document.getElementById('image-preview');
        const existingImage = document.getElementById('existing-image-src');
        const existingImageSrc = "{{ $question->image_id ? asset('storage/images/' . $question->image_id) : '' }}";

        if (existingImageSrc) {
            imagePreview.src = existingImageSrc;
            document.querySelector('.preview-image').style.display = 'block';
            existingImage.style.display = 'none';
        }
    };

    function clearImagePreview() {
        const imagePreview = document.getElementById('image-preview');
        imagePreview.style.display = 'none'; // Sembunyikan preview gambar
        imagePreview.src = ''; // Reset sumber gambar
        document.querySelector('.preview-image').style.display = 'none'; // Sembunyikan div preview-image

        // Kembalikan tampilan gambar yang ada dari database jika ada
        const existingImage = document.getElementById('existing-image-src');
        existingImage.style.display = 'block';

        // Hapus juga pratinjau gambar yang baru dipilih setelah tombol reset diklik
        const input = document.getElementById('image_id');
        const inputClone = input.cloneNode(true); // Salin elemen input file
        input.parentNode.replaceChild(inputClone, input); // Ganti elemen asli dengan salinan
    }

    // Fungsi validasi dan preview gambar
    function previewImage(event) {
        const input = event.target;
        const file = input.files[0];

        // Hapus preview gambar dari database
        const existingImage = document.getElementById('existing-image-src');
        existingImage.style.display = 'none';

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

    // Tambahkan event listener untuk tombol reset
    document.querySelector('.btn-reset').addEventListener('click', function () {
        clearImagePreview();
    });

    // Tambahkan event listener untuk input file
    document.getElementById('image_id').addEventListener('change', function (event) {
        previewImage(event);
    });

</script>

<script>
    window.onload = function () {
        const videoPreview = document.getElementById('video-preview');
        const existingVideo = document.getElementById('existing-video-src');
        const existingVideoSrc = "{{ $question->video_id ? asset('storage/videos/' . $question->video_id) : '' }}";

        if (existingVideoSrc) {
            videoPreview.src = existingVideoSrc;
            document.querySelector('.preview-video').style.display = 'block';
            existingVideo.style.display = 'none';
        }
    };

    function clearVideoPreview() {
        const videoPreview = document.getElementById('video-preview');
        videoPreview.style.display = 'none'; // Hide video preview
        videoPreview.src = ''; // Reset video source
        document.querySelector('.preview-video').style.display = 'none'; // Hide preview video container

        // Restore existing video display if available
        const existingVideo = document.getElementById('existing-video-src');
        existingVideo.style.display = 'block';

        // Also clear newly selected video preview on reset button click
        const input = document.getElementById('video_id');
        const inputClone = input.cloneNode(true); // Clone file input element
        input.parentNode.replaceChild(inputClone, input); // Replace original element with the clone
    }

    // Function for video preview and validation
    function previewVideo(event) {
        const input = event.target;
        const file = input.files[0];

        // Hide existing video preview
        const existingVideo = document.getElementById('existing-video-src');
        existingVideo.style.display = 'none';

        // Clear video preview when reset button is clicked
        if (!file) {
            clearVideoPreview();
            return;
        }

        const fileType = file.type;

        // List of allowed video mime types
        const allowedTypes = ['video/mp4', 'video/webm', 'video/ogg'];

        if (!allowedTypes.includes(fileType)) {
            input.value = ''; // Clear the input field
            alert("Hanya file video yang diperbolehkan.");
            clearVideoPreview(); // Clear video preview
            return;
        }

        // Display video preview
        const videoPreview = document.getElementById('video-preview');
        videoPreview.style.display = 'block'; // Show video preview
        const videoURL = URL.createObjectURL(file);
        videoPreview.src = videoURL;
        document.querySelector('.preview-video').style.display = 'block'; // Show preview video container
    }

    // Add event listener for reset button
    document.querySelector('.btn-reset').addEventListener('click', function () {
        clearVideoPreview();
    });

    // Add event listener for file input
    document.getElementById('video_id').addEventListener('change', function (event) {
        previewVideo(event);
    });

</script>

<script>
    function clearAudioPreview() {
        const audioPreview = document.getElementById('audio-preview');
        audioPreview.style.display = 'none'; // Sembunyikan preview audio
        audioPreview.src = ''; // Reset sumber audio
        document.querySelector('.preview-audio').style.display = 'none'; // Sembunyikan div preview-audio

        // Kembalikan tampilan audio yang ada dari database jika ada
        const existingAudio = document.getElementById('existing-audio');
        existingAudio.style.display = 'block';

        // Hapus juga pratinjau audio yang baru dipilih setelah tombol reset diklik
        const input = document.getElementById('audio_id');
        const inputClone = input.cloneNode(true); // Salin elemen input file
        input.parentNode.replaceChild(inputClone, input); // Ganti elemen asli dengan salinan
    }

    // Fungsi validasi dan preview audio
    function previewAudio(event) {
        const input = event.target;
        const file = input.files[0];

        // Hapus preview audio dari database
        const existingAudio = document.getElementById('existing-audio');
        existingAudio.style.display = 'none';

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
            alert("Hanya file audio yang diperbolehkan.");
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

    // Tambahkan event listener untuk tombol reset
    document.querySelector('.btn-reset').addEventListener('click', function () {
        clearAudioPreview();
    });

    // Tambahkan event listener untuk input file
    document.getElementById('audio_id').addEventListener('change', function (event) {
        previewAudio(event);
    });

</script>
@stop
