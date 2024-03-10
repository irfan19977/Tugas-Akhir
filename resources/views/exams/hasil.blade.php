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
                    <h4><i class="fas fa-exam"></i> {{ $exams->first()->name }}</h4>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th scope="col" style="text-align: center;width: 6%">NO.</th>
                                <th scope="col">NAMA SISWA</th>
                                <th scope="col">UJIAN</th>
                                <th scope="col">NILAI UJIAN</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($exams as $no => $exam)
                                @foreach ($exam->users as $student)
                                    <tr>
                                        <th scope="row" style="text-align: center">{{$loop->iteration }}</th>
                                        <td>{{ $student->name }}</td>
                                        <td>{{ $exam->name }}</td>
                                        <td>@if($student->pivot->score !== null)
                                            {{ round($student->pivot->score, 2) }}
                                        @else
                                            Belum dikerjakan
                                        @endif</td>
                                    </tr>
                                @endforeach
                            @endforeach
                            </tbody>
                        </table>
                        {{-- <div style="text-align: center">
                            {{$exams->links("vendor.pagination.bootstrap-4")}}
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>

<script>
    //ajax delete
    function Delete(id)
        {
            var id = id;
            var token = $("meta[name='csrf-token']").attr("content");

            swal({
                title: "APAKAH KAMU YAKIN ?",
                text: "INGIN MENGHAPUS DATA INI!",
                icon: "warning",
                buttons: [
                    'TIDAK',
                    'YA'
                ],
                dangerMode: true,
            }).then(function(isConfirm) {
                if (isConfirm) {

                    //ajax delete
                    jQuery.ajax({
                        url: "{{ route("exams.index") }}/"+id,
                        data:   {
                            "id": id,
                            "_token": token
                        },
                        type: 'DELETE',
                        success: function (response) {
                            if (response.status == "success") {
                                swal({
                                    title: 'BERHASIL!',
                                    text: 'DATA BERHASIL DIHAPUS!',
                                    icon: 'success',
                                    timer: 1000,
                                    showConfirmButton: false,
                                    showCancelButton: false,
                                    buttons: false,
                                }).then(function() {
                                    location.reload();
                                });
                            }else{
                                swal({
                                    title: 'GAGAL!',
                                    text: 'DATA GAGAL DIHAPUS!',
                                    icon: 'error',
                                    timer: 1000,
                                    showConfirmButton: false,
                                    showCancelButton: false,
                                    buttons: false,
                                }).then(function() {
                                    location.reload();
                                });
                            }
                        }
                    });

                } else {
                    return true;
                }
            })
        }
</script>
@stop