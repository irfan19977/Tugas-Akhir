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
                    <h4><i class="fa fa-user-circle"></i> Pendaftaran Siswa</h4>
                </div>

                <div class="card-body">

                    <form action="#" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" value="{{  $existingData->nama  }}" placeholder="Masukkan nama Lengkap"
                                class="form-control @error('nama') is-invalid @enderror" readonly>

                            @error('nama')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <select name="jkel" class="form-control" disabled>
                                <option value="Laki-laki" {{ $existingData->jkel === 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                <option value="Perempuan" {{ $existingData->jkel === 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
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
                                    <input type="text" name="tmp_lh" value="{{  $existingData->tmp_lh  }}"
                                        placeholder="Masukkan nama Lengkaptempat lahir"
                                        class="form-control @error('tmp_lh') is-invalid @enderror" readonly>

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
                                    <input type="date" name="tgl_lh" value="{{  $existingData->tgl_lh  }}"
                                        class="form-control @error('tgl_lh') is-invalid @enderror" readonly>

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
                            <select name="agama" class="form-control" disabled>
                                <option value="Islam" {{ $existingData->agama === 'Islam' ? 'selected' : '' }}>Islam</option>
                                <option value="Hindu" {{ $existingData->agama === 'Hindu' ? 'selected' : '' }}>Hindu</option>
                                <option value="Kristen" {{ $existingData->agama === 'Kristen' ? 'selected' : '' }}>Kristen</option>
                                <option value="Katolik" {{ $existingData->agama === 'Katolik' ? 'selected' : '' }}>Katolik</option>
                            </select>
                            </select>

                            @error('agama')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" name="alamat" value="{{  $existingData->alamat  }}" placeholder="Masukkan alamat Lengkap"
                                class="form-control @error('alamat') is-invalid @enderror" readonly>

                            @error('alamat')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Asal Sekolah</label>
                            <input type="text" name="sekolah" value="{{  $existingData->sekolah  }}" placeholder="Masukkan asal sekolah"
                                class="form-control @error('sekolah') is-invalid @enderror" readonly>

                            @error('sekolah')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Nomor WA</label>
                            <input type="number" name="no_wa" value="{{  $existingData->no_wa  }}" placeholder="Masukkan nomor whatsapp"
                                class="form-control @error('no_wa') is-invalid @enderror" readonly>

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
                                    <input type="text" name="ayah" value="{{  $existingData->ayah  }}"
                                        placeholder="Masukkan nama lengkap ayah"
                                        class="form-control @error('ayah') is-invalid @enderror" readonly>

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
                                    <input type="text" name="ibu" value="{{  $existingData->ibu  }}"
                                        placeholder="Masukkan nama lengkap ibu"
                                        class="form-control @error('ibu') is-invalid @enderror" readonly>

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
                            <input type="number" name="jlh_sdr" value="{{  $existingData->jlh_sdr  }}" placeholder="Masukkan jumlah saudara"
                                class="form-control @error('jlh_sdr') is-invalid @enderror" readonly>

                            @error('jlh_sdr')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Apakah Anda Punya Riwayat Penyakit?</label>
                            <input type="text" name="sakit" value="{{  $existingData->sakit  }}" placeholder="Jika iya sebutkan penyakit apa"
                                class="form-control @error('sakit') is-invalid @enderror" readonly>

                            @error('sakit')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Hobi</label>
                            <input type="text" name="hobi" value="{{  $existingData->hobi  }}" placeholder="Masukkan hobi anda"
                                class="form-control @error('hobi') is-invalid @enderror" readonly>

                            @error('hobi')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Organisasi Apa Yang Pernah Anda Ikuti?</label>
                            <input type="text" name="organisasi" value="{{  $existingData->organisasi  }}" placeholder="Masukkan nama Lengkap"
                                class="form-control @error('organisasi') is-invalid @enderror" readonly>

                            @error('organisasi')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Jurusan Apa Yang Anda Minati?</label>
                            <select name="jrs_1" class="form-control" disabled>
                                <option value="AK" {{ $existingData->jrs_1 === 'AK' ? 'selected' : '' }}>Akuntansi</option>
                                <option value="TKJ" {{ $existingData->jrs_1 === 'TKJ' ? 'selected' : '' }}>Teknik Komputer dan Jaringan</option>
                                <option value="DKV" {{ $existingData->jrs_1 === 'DKV' ? 'selected' : '' }}>Desain Komunikasi Visual</option>
                                <option value="ASPER" {{ $existingData->jrs_1 === 'ASPER' ? 'selected' : '' }}>Asisten Keperawatan</option>
                            </select>

                            @error('jrs_1')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Apa Alasan Anda Memilih Jurusan Tersebut?</label>
                            <input type="text" name="alasan_1" value="{{  $existingData->alasan_1  }}" placeholder="Masukkan nama Lengkap"
                                class="form-control @error('alasan_1') is-invalid @enderror" readonly>

                            @error('alasan_1')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Pilih Jurusan Cadangan Yang Anda Minati?</label>
                            <select name="jrs_cd" class="form-control" disabled>
                                <option value="AK" {{ $existingData->jrs_cd === 'AK' ? 'selected' : '' }}>Akuntansi</option>
                                <option value="TKJ" {{ $existingData->jrs_cd === 'TKJ' ? 'selected' : '' }}>Teknik Komputer dan Jaringan</option>
                                <option value="DKV" {{ $existingData->jrs_cd === 'DKV' ? 'selected' : '' }}>Desain Komunikasi Visual</option>
                                <option value="ASPER" {{ $existingData->jrs_cd === 'ASPER' ? 'selected' : '' }}>Asisten Keperawatan</option>
                            </select>

                            @error('jrs_cd')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Apa Alasan Anda Memilih Jurusan Cadangan Tersebut?</label>
                            <input type="text" name="alasan_cd" value="{{  $existingData->alasan_cd  }}" placeholder="Masukkan nama Lengkap"
                                class="form-control @error('alasan_cd') is-invalid @enderror" readonly>

                            @error('alasan_cd')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        @can('ppdb.edit')
                        <a href="{{ route('ppdb.edit', $existingData->id) }}" class="btn btn-sm btn-primary">
                        <i class="fa fa-pencil-alt"> Edit</i>
                        </a>
                        @endcan

                    </form>

                </div>
            </div>
            @endcan
</div>

</section>
</div>

@stop
