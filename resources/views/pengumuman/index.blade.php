@extends('layouts.app')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Pengumuman</h1>
        </div>

        <div class="section-body">

            @can('pengumuman.create')
                <div class="card">
                    <div class="card-header">
                        <h4><i class="fa fa-bullhorn"></i> Tambah Pengumuman</h4>
                    </div>

                    <div class="card-body">

                        <form action="{{ route('pengumuman.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label>JUDUL</label>
                                <input type="text" name="title" value="{{ old('title') }}" placeholder="Masukkan Judul Pengumuman" class="form-control @error('title') is-invalid @enderror">
                                @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>DESKRIPSI</label>
                                <textarea name="caption" cols="30" rows="30" class="form-control @error('caption') is-invalid @enderror" placeholder="Masukkan Deskripsi Pengumuman">{{ old('caption') }}</textarea>
                                @error('caption')
                                <span class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Unggah File</label>
                                <input type="file" class="form-control-file @error('file_id') is-invalid @enderror" name="file_id">
                                @error('file_id')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="preview-audio" style="display: none;">
                                <audio controls id="audio-preview"></audio>
                            </div>

                            <button class="btn btn-primary mr-1 btn-submit" type="submit"><i class="fa fa-paper-plane"></i> SIMPAN</button>
                            <button class="btn btn-warning btn-reset" type="reset"><i class="fa fa-redo"></i> RESET</button>


                        </form>

                    </div>
                </div>
            @endcan

            @can('pengumuman.showadmin')
            <div class="card">
                <div class="card-header">
                    <h4><i class="fa fa-bullhorn"></i> Daftar Pengumuman</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('pengumuman.index') }}" method="GET">
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="q"
                                       placeholder="cari berdasarkan judul">
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
                                <th scope="col">DESKRIPSI</th>
                                <th scope="col">Lampiran</th>
                                <th scope="col" style="width: 15%;text-align: center">AKSI</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($pengumumans as $no => $pengumuman)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $pengumuman->title }}</td>
                                    <td>{!! Str::limit(strip_tags($pengumuman->caption), 150) !!}</td>
                                    <td> @if ($pengumuman->file_id)
                                        <a href="{{ Storage::url('public/documents/'.$pengumuman->file_id) }}" target="_blank" rel="noopener noreferrer">Buka File</a>
                                        @else
                                            TIDAK ADA LAMPIRAN
                                        @endif
                                        
                                    </td>
                                    <td class="text-center">
                                        @can('pengumuman.edit')
                                            <a href="{{ route('pengumuman.edit', $pengumuman->slug) }}" class="btn btn-sm btn-primary">
                                                <i class="fa fa-pencil-alt"></i>
                                            </a>
                                        @endcan
                                        @can('pengumuman.delete')
                                            <button onClick="Delete(this.id)" class="btn btn-sm btn-danger" id="{{ $pengumuman->id }}">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        @endcan
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div style="text-align: center">
                            {{$pengumumans->links("vendor.pagination.bootstrap-4")}}
                        </div>
                    </div>
                </div>
            </div>
            @endcan

            @can('pengumuman.showuser')
                @foreach ($pengumumans as $pengumuman)
                    <div class="card">
                        <div class="card-header">
                            <h4>{{ $pengumuman->title }}</h4>
                            <div class="card-header-action">
                                <a data-collapse="#mycard-collapse-{{ $pengumuman->id }}" class="btn btn-icon btn-info" href="#"><i class="fas fa-minus"></i></a>
                            </div>
                        </div>
                        <div class="collapse show" id="mycard-collapse-{{ $pengumuman->id }}">
                            <div class="card-body">
                                {{ $pengumuman->caption }}
                            </div>
                            <div class="card-footer">
                                @if ($pengumuman->created_at != $pengumuman->updated_at)
                                    {{ $pengumuman->updated_at->format('d-m-Y H:i:s') }}
                                @else
                                    {{ $pengumuman->created_at->format('d-m-Y H:i:s') }}
                                @endif

                            </div>
                        </div>
                    </div>
                @endforeach

            @endcan
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
                        url: "{{ route("pengumuman.index") }}/"+id,
                        data:     {
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