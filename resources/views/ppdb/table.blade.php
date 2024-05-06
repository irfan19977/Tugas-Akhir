<table class="table table-bordered">
    <thead>
        <tr>
            <th scope="col" style="text-align: center;width: 6%"><strong>NO.</strong></th>
            <th scope="col"><strong>NAMA</strong></th>
            <th scope="col"><strong>JENIS KELAMIN</strong></th>
            <th scope="col"><strong>TEMPAT LAHIR</strong></th>
            <th scope="col"><strong>TANGGAL LAHIR</strong></th>
            <th scope="col"><strong>AGAMA</strong></th>
            <th scope="col"><strong>ALAMAT</strong></th>
            <th scope="col"><strong>ASAL SEKOLAH</strong></th>
            <th scope="col"><strong>NOMOR WA</strong></th>
            <th scope="col"><strong>NAMA AYAH</strong></th>
            <th scope="col"><strong>NAMA IBU</strong></th>
            <th scope="col"><strong>JUMLAH SAUDARA</strong></th>
            <th scope="col"><strong>RIWAYAT PENYAKIT</strong></th>
            <th scope="col"><strong>HOBI</strong></th>
            <th scope="col"><strong>ORGANISASI</strong></th>
            <th scope="col"><strong>JURUSAN 1</strong></th>
            <th scope="col"><strong>ALASAN JURUSAN 1</strong></th>
            <th scope="col"><strong>JURUSAN 2</strong></th>
            <th scope="col"><strong>ALASAN JURUSAN 2</strong></th>
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
        </tr>
        @endforeach
    </tbody>
</table>