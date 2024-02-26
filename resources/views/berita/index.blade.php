@extends('layouts.app')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Berita</h1>
        </div>

        <div class="section-body">

            @can('beritaadmin.create')
    <div class="card">
        <div class="card-header">
            <h4><i class="fas fa-newspaper"></i> Tambah berita</h4>
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('beritaadmin.store') }}" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label>Judul Berita</label>
                    <input type="text" name="judul" value="{{ old('judul') }}" placeholder="Masukkan Judul Berita" class="form-control @error('judul') is-invalid @enderror">
                    @error('judul')
                    <div class="invalid-feedback" style="display: block">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Isi Berita</label>
                    <textarea name="isi" class="form-control @error('isi') is-invalid @enderror">{{ old('isi') }}</textarea>
                    @error('isi')
                    <div class="invalid-feedback" style="display: block">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Upload Sampul Baru</label>
                    <input type="file" name="sampul" class="form-control">
                </div>
                <div class="form-group">
                    <label>Keterangan Sampul</label>
                    <input type="text" name="keterangan" value="{{ old('keterangan') }}" placeholder="Masukkan Keterangan Sampul" class="form-control @error('keterangan') is-invalid @enderror">
                    @error('keterangan')
                    <div class="invalid-feedback" style="display: block">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
@endcan


            <div class="card">
                <div class="card-header">
                    <h4><i class="fas fa-newspaper"></i> Daftar Berita</h4>
                </div>

                <div class="card-body">
                    <form action="{{ route('beritaadmin.index') }}" method="GET">
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
                                <th scope="col">Judul</th>
                                <th scope="col">Foto Sampul</th>
                                <th scope="col">Keterangan Sampul</th>
                                <th scope="col">Isi Berita</th>
                                <th scope="col" style="width: 15%;text-align: center">AKSI</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($beritas as $no => $berita)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $berita->judul }}</td>
                                    <td>
                                        @if($berita->sampul)
                                            <img src="{{ asset('storage/sampul/' . basename($berita->sampul)) }}" alt="{{ $berita->judul }} Sampul" style="max-width: 100px;">
                                        @else
                                            Tidak ada sampul
                                        @endif
                                    </td>                                    
                                    <td>{{ $berita->keterangan }}</td>
                                    <td>{!! Str::limit(strip_tags($berita->isi), 150) !!}</td>
                                    <td class="text-center">
                                        @can('beritaadmin.edit')
                                            <a href="{{ route('beritaadmin.edit', $berita->slug) }}" class="btn btn-sm btn-primary">
                                                <i class="fa fa-pencil-alt"></i>
                                            </a>
                                        @endcan
                                        @can('beritaadmin.delete')
                                            <button onClick="Delete(this.id)" class="btn btn-sm btn-danger" id="{{ $berita->id }}">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        @endcan
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div style="text-align: center">
                            {{$beritas->links("vendor.pagination.bootstrap-4")}}
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
                        url: "{{ route("beritaadmin.index") }}/"+id,
                        data:     {
                            "id": id,
                            "_token": token
                        },
                        type: 'DELETE',
                        success: function (response) {
                            if (response.status == "success") {
                                swal({
                                    beritaadmin: 'BERHASIL!',
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
                                    beritaadmin: 'GAGAL!',
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
<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('isi');
</script>
@stop