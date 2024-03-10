<table class="table table-bordered">
    <thead>
        <tr>
            <th scope="col" style="text-align: center;width: 6%">NO.</th>
            <th scope="col">NAMA</th>
            <th scope="col">JENIS KELAMIN</th>
            <th scope="col">TEMPAT LAHIR</th>
            <th scope="col">TANGGAL LAHIR</th>
            <th scope="col">AGAMA</th>
            <th scope="col">ALAMAT</th>
            <th scope="col">ASAL SEKOLAH</th>
            <th scope="col">NOMOR WA</th>
            <th scope="col">NAMA AYAH</th>
            <th scope="col">NAMA IBU</th>
            <th scope="col">JUMLAH SAUDARA</th>
            <th scope="col">RIWAYAT PENYAKIT</th>
            <th scope="col">HOBI</th>
            <th scope="col">ORGANISASI</th>
            <th scope="col">JURUSAN 1</th>
            <th scope="col">ALASAN JURUSAN 1</th>
            <th scope="col">JURUSAN 2</th>
            <th scope="col">ALASAN JURUSAN 2</th>
            <th scope="col" style="width: 15%;text-align: center">AKSI</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($ppdbs as $no => $ppdb)
        <tr>
            <td>{{ $loop->iteration }}</td>
        <td>{{ $ppdb->nama }}</td>
        <td>{{ $ppdb->jkel }}</td>
        <td>{{ $ppdb->tmp_lh }}</td>
        <td>{{ $ppdb->tgl_lh }}</td>
        <td>{{ $ppdb->agama }}</td>
        <td>{{ $ppdb->alamat }}</td>
        <td>{{ $ppdb->sekolah }}</td>
        <td>{{ $ppdb->no_wa }}</td>
        <td>{{ $ppdb->ayah }}</td>
        <td>{{ $ppdb->ibu }}</td>
        <td>{{ $ppdb->jlh_sdr }}</td>
        <td>{{ $ppdb->sakit }}</td>
        <td>{{ $ppdb->hobi }}</td>
        <td>{{ $ppdb->organisasi }}</td>
        <td>{{ $ppdb->jrs_1 }}</td>
        <td>{{ $ppdb->alasan_1 }}</td>
        <td>{{ $ppdb->jrs_cd }}</td>
        <td>{{ $ppdb->alasan_cd }}</td>
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
        @endforeach
    </tbody>
</table>