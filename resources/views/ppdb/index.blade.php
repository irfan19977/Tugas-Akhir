@extends('layouts.app')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>PPDB</h1>
        </div>

        <div class="section-body">

            @can('ppdb.create')
            <div class="card">
                <div class="card-header">
                    <h4><i class="fas fa-file-video"></i> Pendaftaran Siswa</h4>
                </div>

                <div class="card-body">

                    <form action="#" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" value="{{ old('nama') }}" placeholder="Masukkan nama Lengkap"
                                class="form-control @error('nama') is-invalid @enderror">

                            @error('nama')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <select name="jkel" class="form-control">
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>

                            @error('jkel')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tempat Lahir</label>
                                    <input type="text" name="tmp_lh" value="{{ old('tmp_lh') }}"
                                        placeholder="Masukkan nama Lengkaptempat lahir"
                                        class="form-control @error('tmp_lh') is-invalid @enderror">

                                    @error('tmp_lh')
                                    <div class="invalid-feedback" style="display: block">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tanggal Lahir</label>
                                    <input type="date" name="tgl_lh" value="{{ old('tgl_lh') }}"
                                        class="form-control @error('tgl_lh') is-invalid @enderror">

                                    @error('tgl_lh')
                                    <div class="invalid-feedback" style="display: block">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Agama</label>
                            <select name="agama" class="form-control">
                                <option value="Islam">Islam</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Katolik">Katolik</option>
                            </select>

                            @error('agama')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" name="alamat" value="{{ old('alamat') }}" placeholder="Masukkan alamat Lengkap"
                                class="form-control @error('alamat') is-invalid @enderror">

                            @error('alamat')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Asal Sekolah</label>
                            <input type="text" name="sekolah" value="{{ old('sekolah') }}" placeholder="Masukkan asal sekolah"
                                class="form-control @error('sekolah') is-invalid @enderror">

                            @error('sekolah')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Nomor WA</label>
                            <input type="text" name="no_wa" value="{{ old('no_wa') }}" placeholder="Masukkan nomor whatsapp"
                                class="form-control @error('no_wa') is-invalid @enderror">

                            @error('no_wa')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nama Ayah</label>
                                    <input type="text" name="ayah" value="{{ old('ayah') }}"
                                        placeholder="Masukkan nama lengkap ayah"
                                        class="form-control @error('ayah') is-invalid @enderror">

                                    @error('ayah')
                                    <div class="invalid-feedback" style="display: block">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nama Ibu</label>
                                    <input type="text" name="ibu" value="{{ old('ibu') }}"
                                        placeholder="Masukkan nama lengkap ibu"
                                        class="form-control @error('ibu') is-invalid @enderror">

                                    @error('ibu')
                                    <div class="invalid-feedback" style="display: block">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Jumlah Saudara</label>
                            <input type="text" name="jlh_sdr" value="{{ old('jlh_sdr') }}" placeholder="Masukkan jumlah saudara"
                                class="form-control @error('jlh_sdr') is-invalid @enderror">

                            @error('jlh_sdr')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Apakah Anda Punya Riwayat Penyakit?</label>
                            <input type="text" name="sakit" value="{{ old('sakit') }}" placeholder="Jika iya sebutkan penyakit apa"
                                class="form-control @error('sakit') is-invalid @enderror">

                            @error('sakit')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Hobi</label>
                            <input type="text" name="hobi" value="{{ old('hobi') }}" placeholder="Masukkan hobi anda"
                                class="form-control @error('hobi') is-invalid @enderror">

                            @error('hobi')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Organisasi Apa Yang Pernah Anda Ikuti?</label>
                            <input type="text" name="organisasi" value="{{ old('organisasi') }}" placeholder="Masukkan nama Lengkap"
                                class="form-control @error('organisasi') is-invalid @enderror">

                            @error('organisasi')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Jurusan Apa Yang Anda Minati?</label>
                            <select name="jrs_1" class="form-control">
                                <option value="AK">Akuntansi</option>
                                <option value="TKJ">TEknik Komputer dan Jaringan</option>
                                <option value="DKV">Design Komunikasi Visual</option>
                                <option value="ASPER">Asisten Keperawatan</option>
                            </select>

                            @error('jrs_1')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Apa Alasan Anda Memilih Jurusan Tersebut?</label>
                            <input type="text" name="alasan_1" value="{{ old('alasan_1') }}" placeholder="Masukkan nama Lengkap"
                                class="form-control @error('alasan_1') is-invalid @enderror">

                            @error('alasan_1')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Pilih Jurusan Cadangan Yang Anda Minati?</label>
                            <select name="jrs_cd" class="form-control">
                                <option value="AK">Akuntansi</option>
                                <option value="TKJ">TEknik Komputer dan Jaringan</option>
                                <option value="DKV">Design Komunikasi Visual</option>
                                <option value="ASPER">Asisten Keperawatan</option>
                            </select>

                            @error('jrs_cd')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Apa Alasan Anda Memilih Jurusan Cadangan Tersebut?</label>
                            <input type="text" name="alasan_cd" value="{{ old('alasan_cd') }}" placeholder="Masukkan nama Lengkap"
                                class="form-control @error('alasan_cd') is-invalid @enderror">

                            @error('alasan_cd')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <button class="btn btn-primary mr-1 btn-submit" type="submit"><i class="fa fa-upload"></i>
                            KIRIM</button>
                        <button class="btn btn-warning btn-reset" type="reset"><i class="fa fa-redo"></i> RESET</button>


                    </form>

                </div>
            </div>
            @endcan

            @can('ppdb.showadmin')
            <div class="card">
                <div class="card-header">
                    <h4><i class="fas fa-video"></i> ppdb</h4>
                </div>

                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col" style="text-align: center;width: 6%">NO.</th>
                                    <th scope="col">nama</th>
                                    <th scope="col">CAPTION</th>
                                    <th scope="col" style="width: 15%;text-align: center">AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @foreach ($ppdbs as $no => $ppdb)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                <td>{{ $ppdb->nama }}</td>
                                <td>{{ $ppdb->caption }}</td>
                                <td class="text-center">
                                    @can('ppdb.edit')
                                    <a href="{{ route('ppdb.edit', $ppdb->id) }}" class="btn btn-sm btn-primary">
                                        <i class="fa fa-pencil-alt"></i>
                                    </a>
                                    @endcan
                                    @can('ppdb.delete')
                                    <button onClick="Delete(this.id)" class="btn btn-sm btn-danger"
                                        id="{{ $ppdb->id }}">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                    @endcan
                                </td>
                                </tr>
                                @endforeach --}}
                            </tbody>
                        </table>
                        <div style="text-align: center">
                            {{-- {{$ppdbs->links("vendor.pagination.bootstrap-4")}} --}}
                        </div>
                    </div>
                </div>
            </div>
            @endcan

            {{-- @can('ppdb.showuser')
                <div class="row">
                    @foreach ($ppdbs as $no => $ppdb)
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                  <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                      <i class="fa fa-book-open text-white fa-2x"></i>
                    </div>
                    <div class="card-wrap">
                      <div class="card-header">
                        <h4>{{ $ppdb->nama }}</h4>
        </div>
        <div class="card-body">
            {{ $ppdb->caption }}
        </div>
</div>
</div>
</div>
@endforeach
</div>
@endcan --}}

</div>

</section>
</div>

{{-- <script>
    //ajax delete
    function Delete(id)
        {
            var id = id;
            var token = $("meta[name='csrf-token']").attr("content");

            swal({
                nama: "APAKAH KAMU YAKIN ?",
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
                        url: "{{ route("ppdb.index") }}/"+id,
data: {
"id": id,
"_token": token
},
type: 'DELETE',
success: function (response) {
if (response.status == "success") {
swal({
nama: 'BERHASIL!',
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
nama: 'GAGAL!',
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
</script> --}}
@stop
