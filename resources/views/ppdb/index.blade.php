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
                    <h4><i class="fas fa-pencil-alt"></i> Pendaftaran Siswa</h4>
                </div>

                <div class="card-body">

                    <form action="{{ route('ppdb.store') }}" method="POST" enctype="multipart/form-data">
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
                    <h4><i class="fas fa-pencil-alt"></i> Pendaftaran Peserta Didik Baru</h4>
                    <h4>|</h4>
                    <h4>
                        <i class="fa fa-print"></i>
                        <a href="{{ url('ppdb/export/excel') }}"> <strong style="float: right;"> Export</strong></a>
                    </h4>
                </div>
                <div class="card-body">
                    <form class="form-row" method="get" action="{{ url('ppdb') }}">
                        <div class="form-group col-md-4">
                            <label for="tanggal_mulai">Tanggal Awal Pendaftaran:</label>
                            <input type="date" class="form-control" id="tanggal_mulai" name="tanggal_mulai" value="{{ $tanggalAwal}}">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="tanggal_selesai">Tanggal Selesai:</label>
                            <input type="date" class="form-control" id="tanggal_selesai" name="tanggal_selesai" value="{{ $tanggalAkhir}}">
                        </div>
                        <div class="form-group col-md-3 mt-1">
                            <label for="tanggal_selesai" class="invisible">Tanggal Akhir Pendaftaran:</label> <br>
                            <button type="submit" class="btn btn-primary">Filter</button>
                            <button type="button" class="btn btn-secondary" onclick="resetFilter()">Reset Filter</button>

                        </div>
                    </form>

                    <div class="table-responsive">
                        @include('ppdb.table', $ppdbs)
                        <div style="text-align: center">
                            {{$ppdbs->links("vendor.pagination.bootstrap-4")}}
                        </div>
                    </div>
                </div>
            </div>
            @endcan
</div>

</section>
</div>

<script>
    function resetFilter() {
        document.getElementById("tanggal_mulai").value = "";
        document.getElementById("tanggal_selesai").value = "";
        document.querySelector("form").submit();
    }
</script>
@stop
