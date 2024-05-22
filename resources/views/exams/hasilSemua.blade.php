@extends('layouts.app')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>HASIL UJIAN</h1>
        </div>

        <div class="section-body">
            <div class="card">
                <div class="card-header">
                    <h4><i class="fas fa-exam"></i> Hasil Semua Ujian</h4>
                    <h4>|</h4>
                    
                        <a href="{{ route('exams.cetakPDF') }}" style="float: right;"><h4><i class="fa fa-print"> Cetak pdf</i></h4> </a>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th scope="col" style="text-align: center;width: 6%">NO.</th>
                                <th scope="col">NAMA SISWA</th>
                                <th scope="col">Bahasa Inggris</th>
                                <th scope="col">Matematika</th>
                                <th scope="col">Ilmu Pengetahuan Alama</th>
                            </tr>
                            </thead>
                            <tbody>
                                @php
                                    $count = 1;
                                    $users = $results->groupBy('user.name'); // Mengelompokkan hasil berdasarkan nama pengguna
                                @endphp
                                @foreach ($users as $name => $userResults)
                                    <tr>
                                        <td>{{ $count++ }}</td> <!-- Nomor urut -->
                                        <td>{{ $name }}</td> <!-- Nama Pengguna -->
                                        @php
                                            $bahasaInggrisScore = '';
                                            $matematikaScore = '';
                                            $ipaScore = '';
                                            $tikScore = '';
                                        @endphp
                                        @foreach ($userResults as $result)
                                            @if ($result->exam->name === 'Bahasa Inggris')
                                                @php
                                                    $bahasaInggrisScore = $result->score;
                                                @endphp
                                            @elseif ($result->exam->name === 'Matematika')
                                                @php
                                                    $matematikaScore = $result->score;
                                                @endphp
                                            @elseif ($result->exam->name === 'Ilmu Pengetahuan Alam')
                                                @php
                                                    $ipaScore = $result->score;
                                                @endphp
                                            @endif
                                        @endforeach
                                        <td>{{ $bahasaInggrisScore }}</td> <!-- Skor Bahasa Inggris -->
                                        <td>{{ $matematikaScore }}</td> <!-- Skor Matematika -->
                                        <td>{{ $ipaScore }}</td> <!-- Skor IPA -->
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <button class="btn btn-warning btn-back" type="button"><i class="fa fa-redo"></i> KEMBALI</button>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>

<script>
    document.querySelector('.btn-back').addEventListener('click', function() {
        window.history.back();
    });
</script>
@stop



{{-- <div class="container">
    <h1>Hasil Ujian</h1>

    <table class="table">
        <thead>
            <tr>
                <th>Nama Pengguna</th>
                <th>Bahasa Inggris</th>
                <th>Matematika</th>
            </tr>
        </thead>
        <tbody>
            @php
                $users = $results->groupBy('user.name'); // Mengelompokkan hasil berdasarkan nama pengguna
            @endphp
            @foreach ($users as $name => $userResults)
                <tr>
                    <td>{{ $name }}</td> <!-- Nama Pengguna -->
                    @foreach ($userResults as $result)
                        <td>{{ $result->exam->name === 'Bahasa Inggris' ? $result->score : '' }}</td> <!-- Skor Bahasa Inggris -->
                        <td>{{ $result->exam->name === 'Matematika' ? $result->score : '' }}</td> <!-- Skor Matematika -->
                    @endforeach
                </tr>
            @endforeach
        </tbody>
    </table>
</div> --}}
