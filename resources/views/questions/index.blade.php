@extends('layouts.app')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Soal</h1>
        </div>

        <div class="section-body">

            <div class="card">
                <div class="card-header">
                    <h4><i class="fas fa-question"></i> DAFTAR SOAL</h4>
                </div>

                <div class="card-body">
                    <form action="{{ route('questions.index') }}" method="GET">
                        <div class="form-group">
                            <div class="input-group mb-3">
                                @can('questions.create')
                                    <div class="input-group-prepend">
                                        <a href="{{ route('questions.create') }}" class="btn btn-primary" style="padding-top: 10px;"><i class="fa fa-plus-circle"></i> TAMBAH</a>
                                    </div>
                                @endcan
                                <input type="text" class="form-control" name="q"
                                       placeholder="cari berdasarkan detail pertanyaan">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> CARI
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th scope="col" style="text-align: center;width: 6%">NO.</th>
                                <th scope="col">JUDUL</th>
                                <th scope="col">DETAIL</th>
                                <th scope="col">LAMPIRAN</th>
                                <th scope="col">PILIHAN A</th>
                                <th scope="col">PILIHAN B</th>
                                <th scope="col">PILIHAN C</th>
                                <th scope="col">PILIHAN D</th>
                                <th scope="col">PILIHAN E</th>
                                <th scope="col">JAWABAN</th>
                                <th scope="col">PEMBAHASAN</th>
                                <th scope="col">DIBUAT OLEH</th>
                                <th scope="col" style="width: 15%;text-align: center">AKSI</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($questions as $no => $question)
                                <tr>
                                    <th scope="row" style="text-align: center">{{ ++$no + ($questions->currentPage()-1) * $questions->perPage() }}</th>
                                    <td>{{ $subject->getName($question->subject_id) }}</td>
                                    <td>{!! Str::limit(strip_tags($question->detail), 30) !!}</td>
                                    <td>
                                        @if ($question->video_id)
                                            <a href="{{ Storage::url('public/videos/'.$question->video_id) }}" target="_blank">VIDEO</a>
                                        @elseif($question->audio_id)
                                            <a href="{{ Storage::url('public/audios/'.$question->audio_id) }}" target="_blank" >AUDIO</a>
                                        @elseif($question->image_id)
                                            <a href="{{ Storage::url('public/images/'.$question->image_id) }}" target="_blank">IMAGE</a>
                                        @else
                                            TIDAK ADA LAMPIRAN
                                        @endif
                                    </td>
                                    
                                    <td>{{ $question->option_A }}</td>
                                    <td>{{ $question->option_B }}</td>
                                    <td>{{ $question->option_C }}</td>
                                    <td>{{ $question->option_D }}</td>
                                    <td>{{ $question->option_E }}</td>
                                    <td>{{ $question->answer }}</td>
                                    <td>{!! Str::limit(strip_tags($question->explanation), 30) !!}</td>
                                    <td>{{ $user->getName($question->created_by) }}</td>
                                    <td class="text-center">
                                        @can('questions.edit')
                                            <a href="{{ route('questions.edit', $question->id) }}" class="btn btn-sm btn-primary">
                                                <i class="fa fa-pencil-alt"></i>
                                            </a>
                                        @endcan
                                        
                                        @can('questions.delete')
                                            <button onClick="Delete(this.id)" class="btn btn-sm btn-danger" id="{{ $question->id }}">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        @endcan
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div style="text-align: center">
                            {{$questions->links("vendor.pagination.bootstrap-4")}}
                        </div>
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
                        url: "{{ route("questions.index") }}/"+id,
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