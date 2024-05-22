<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kop Surat</title>
    <style>
        @page {
            size: A4;
            margin: 0;
        }
        body {
            font-family:'Times New Roman', Times, serif;
            margin: 0;
            padding: 0;
        }
        .header {
            background-color: white; /* Warna latar belakang */
            color: black; /* Warna teks */
            margin-left: 20px;
            margin-top: 20px;
            margin-right: 20px;
            text-align: center;
            position: relative;
        }
        .header h1 {
            margin: 0;
            font-size: 33px;
        }
        .header h2 {
            margin: 0;
            font-size: 25px;
        }
        .header p {
            margin: 5px;
        }
        .header img {
            width: 100px; /* Ukuran maksimum gambar logo */
            height: auto; /* Mengikuti aspek rasio */
        }
        .content {
            margin-left: 20px;
            margin-right: 20px;
            overflow-x: auto;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th{
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .signature {
            margin-top: 20px;
            text-align: right;
        }
        .signature p {
            margin: 5px;
        }
    </style>
</head>
<body>
    <div class="header">
        <table style="width: 100%;">
            <tr>
                <td style="width: 20%; text-align: center;"><img style="width: 100%" src="{{ asset('hekel/assets/img/logo-smk.png') }}" alt="Logo Sekolah"></td> <!-- Memindahkan gambar ke dalam sel -->
                <td>
                    <h2 style="text-align: center;">YAYASAN PENDIDIKAN YUDHA DHARMA</h2>
                    <h1 style="text-align: center;">SMK "WIYATA MANDALA"</h1>
                    <p style="text-align: center;"><b>STATUS : TERAKREDITASI "B"</b></p>
                    <p style="text-align: center;"><b>NSS. 3440551310008-NDS. E-17124201</b></p>
                    <p style="text-align: center;">Alamat : Jl. Pare, No. 10, Ds. Damarwulan, Kepung – Kediri, Telp. (0354) 328631</p>
                    <p style="text-align: center;">E-Mail : wiyatamandalakepung@gmail.com</p>
                </td>
            </tr>
        </table>
        <hr>
    </div>
    <div class="content">
        <h3 style="text-align: center">Hasil Ujian Penjurusan</h3>
        <table>
            <thead>
                <tr>
                    <th style="text-align: center;width: 6%">No.</th>
                    <th style="text-align: center;">Nama Siswa</th>
                    <th style="text-align: center;">Bahasa Inggris</th>
                    <th style="text-align: center;">Matematika</th>
                    <th style="text-align: center;">Ilmu Pengetahuan Alam</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $count = 1;
                    $users = $results->groupBy('user.name'); // Mengelompokkan hasil berdasarkan nama pengguna
                @endphp
                @foreach ($users as $name => $userResults)
                    <tr>
                        <td style=" border: 1px solid #ddd; padding: 8px; text-align: center;">{{ $count++ }}</td> <!-- Nomor urut -->
                        <td style=" border: 1px solid #ddd; padding: 8px; text-align: left;">{{ $name }}</td> <!-- Nama Pengguna -->
                        @php
                            $bahasaInggrisScore = '';
                            $matematikaScore = '';
                            $ipaScore = '';
                            $tikScore = '';
                        @endphp
                        @foreach ($userResults as $result)
                            @if ($result->exam->name === 'Bahasa Inggris')
                                @php
                                    $bahasaInggrisScore = $result->score;
                                @endphp
                            @elseif ($result->exam->name === 'Matematika')
                                @php
                                    $matematikaScore = $result->score;
                                @endphp
                            @elseif ($result->exam->name === 'Ilmu Pengetahuan Alam')
                                @php
                                    $ipaScore = $result->score;
                                @endphp
                            @endif
                        @endforeach
                        <td style=" border: 1px solid #ddd; padding: 8px; text-align: left;">{{ $bahasaInggrisScore }}</td> <!-- Skor Bahasa Inggris -->
                        <td style=" border: 1px solid #ddd; padding: 8px; text-align: left;">{{ $matematikaScore }}</td> <!-- Skor Matematika -->
                        <td style=" border: 1px solid #ddd; padding: 8px; text-align: left;">{{ $ipaScore }}</td> <!-- Skor IPA -->
                    </tr>
                @endforeach
            </tbody>
        </table>
        <!-- Tanda tangan kepala sekolah -->
        <div class="signature" style="text-align: center">
            <p>Kepung, {{ now()->format('d F Y') }}</p>
            <p>Kepala Sekolah,</p>
            <br>
            <br>
            <br>
            <p><b><u>Moh.Anas, S.Kom</u></b></p>
        </div>
    </div>
</body>
</html>
