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
                    <h4><i class="fas fa-exam"></i> Hasil Ujian: {{ $exam->name }}</h4>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col" style="text-align: center;width: 6%">NO.</th>
                                    <th scope="col">NAMA SISWA</th>
                                    <th scope="col">NILAI UJIAN</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($results as $result)
                                <tr>
                                    <th scope="row" style="text-align: center">{{ $loop->iteration }}</th>
                                    <td>{{ $result->name }}</td> <!-- Nama Pengguna -->
                                    <td>
                                        @if($result->pivot->score !== null)
                                            {{ $result->pivot->score }}
                                        @else
                                            Belum Dikerjakan
                                        @endif
                                    </td> <!-- Nilai -->
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@stop
