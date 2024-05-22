<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-12">
                <h4><i class="fas fa-exam"></i> {{ $exam['name'] }} </h4>
            </div>
            <div class="col-12">
                <!-- Display the countdown timer in an element -->
                <span class="badge badge-danger" id="timer"></span>
            </div>
        </div>
    </div>
    @foreach ($questions as $question)
    <div class="card-body">
        <b>Soal No. {{ $questions->currentPage() }}</b>
        <p>{{ $question['detail'] }}</p>
            @if ($question['video_id'])
                <video id="video-{{ $question['id'] }}" width="320" height="240" controls>
                    <source src="{{ Storage::url('public/videos/'.$question->video_id) }}" type="video/mp4">
                    <source src="{{ Storage::url('public/videos/'.$question->video_id) }}" type="video/mpeg">
                </video>
            @elseif($question['audio_id'])
                <audio id="audio-{{ $question['id'] }}" width="160" height="120" controls>
                    <source src="{{ Storage::url('public/audios/'.$question->audio_id) }}" type="audio/mp3">
                    <source src="{{ Storage::url('public/audios/'.$question->audio_id) }}" type="audio/wav">
                </audio>

            @elseif($question['image_id'])
            <img src="{{ Storage::url('public/images/'.$question->image_id) }}" style=" height:250px;" class="question-image">
            @else
                NO
            @endif
        <br>
        <i>Pilih salah satu jawaban dibawah ini:</i> 
        <br>
        @php
            $selectedAnswerKey = 'selectedAnswers.' . $question['id'];
            $selectedAnswer = session()->get($selectedAnswerKey);
        @endphp
        <div class="btn-group-vertical options-container" role="group" aria-label="Basic example">
           <button type="button" class="{{ $selectedAnswer && Str::contains($selectedAnswer, 'A') ? 'btn btn-success border border-secondary rounded option-button' : 'btn btn-light border border-secondary rounded option-button' }}"
                wire:click="answers({{ $question['id'] }}, 'A')">
                <p class="text-left"><b> A. {{ $question['option_A'] }} </b></p>
            </button>
            <button type="button" class="{{ $selectedAnswer && Str::contains($selectedAnswer, 'B') ? 'btn btn-success border border-secondary rounded option-button' : 'btn btn-light border border-secondary rounded option-button' }}"
                    wire:click="answers({{ $question['id'] }}, 'B')">
                <p class="text-left"><b> B. {{ $question['option_B'] }} </b></p>
            </button>

            <button type="button" class="{{ $selectedAnswer && Str::contains($selectedAnswer, 'C') ? 'btn btn-success border border-secondary rounded option-button' : 'btn btn-light border border-secondary rounded option-button' }}"
                    wire:click="answers({{ $question['id'] }}, 'C')">
                <p class="text-left"><b> C. {{ $question['option_C'] }} </b></p>
            </button>

            <button type="button" class="{{ $selectedAnswer && Str::contains($selectedAnswer, 'D') ? 'btn btn-success border border-secondary rounded option-button' : 'btn btn-light border border-secondary rounded option-button' }}"
                    wire:click="answers({{ $question['id'] }}, 'D')">
                <p class="text-left"><b> D. {{ $question['option_D'] }} </b></p>
            </button>

            <button type="button" class="{{ $selectedAnswer && Str::contains($selectedAnswer, 'E') ? 'btn btn-success border border-secondary rounded option-button' : 'btn btn-light border border-secondary rounded option-button' }}"
                    wire:click="answers({{ $question['id'] }}, 'E')">
                <p class="text-left"><b> E. {{ $question['option_E'] }} </b></p>
            </button>

        </div>
        
    </div>
    @endforeach

    {{-- @foreach ($selectedAnswers as $item)
        {{ $item }}
    @endforeach --}}
    
    <div class="d-flex justify-content-center pagination-container">
        {{$questions->links()}}
    </div>
    <div class="card-footer">
        @if ($questions->currentPage() == $questions->lastPage())
            <button wire:click="submitAnswers" class="btn btn-primary btn-lg btn-block">Submit</button>
        @endif
    </div>
</div>

<script>
    var add_minutes = function(dt, minutes) {
        return new Date(dt.getTime() + minutes * 60000);
    }

    // Get the stored countdown time for this user and exam
    var storedCountdown = localStorage.getItem('countdownTime_user_{{ Auth::id() }}_exam_{{ $exam->id }}');
    var countDownDate;

    // Check if stored time exists and if it's still valid
    if (storedCountdown) {
        var storedTime = new Date(storedCountdown);
        var currentTime = new Date();
        
        // If stored time is in the future, continue countdown from there
        if (storedTime > currentTime) {
            countDownDate = storedTime;
        } else { // Otherwise, set countdown from now
            countDownDate = add_minutes(currentTime, {{ $exam->time }});
            localStorage.setItem('countdownTime_user_{{ Auth::id() }}_exam_{{ $exam->id }}', countDownDate);
        }
    } else {
        // Set countdown time to now + exam duration
        countDownDate = add_minutes(new Date(), {{ $exam->time }});
        localStorage.setItem('countdownTime_user_{{ Auth::id() }}_exam_{{ $exam->id }}', countDownDate);
    }

    // Update countdown every second
    var x = setInterval(function() {
        var now = new Date().getTime();
        var distance = countDownDate - now;
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
        document.getElementById("timer").innerHTML = "Sisa Waktu : " + hours + " jam " + minutes + " menit " + seconds + " detik ";
        if (distance < 0) {
            clearInterval(x);
            Livewire.emit('endTimer');
            localStorage.removeItem('countdownTime_user_{{ Auth::id() }}_exam_{{ $exam->id }}'); // Clear stored time when countdown ends
        }
    }, 1000);
    
</script>
