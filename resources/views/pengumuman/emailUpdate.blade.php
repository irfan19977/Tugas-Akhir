<?php
// File: resources/views/emails/pengumuman.blade.php

// Array bulan
$bulan = [
    '01' => 'Januari',
    '02' => 'Februari',
    '03' => 'Maret',
    '04' => 'April',
    '05' => 'Mei',
    '06' => 'Juni',
    '07' => 'Juli',
    '08' => 'Agustus',
    '09' => 'September',
    '10' => 'Oktober',
    '11' => 'November',
    '12' => 'Desember',
];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Update Pengumuman SMK Wiyata Mandala</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
        }
        h1 {
            color: #333;
        }
        p {
            color: #555;
        }
        .signature {
            margin-top: 20px;
            border-top: 1px solid #ccc;
            padding-top: 20px;
            text-align: center; /* Menengahkan tanda tangan */
        }
        .signature p {
            margin: 0;
        }
        .signature .name {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>{{ $pengumuman['title'] }}</h1>
    <p>"Pengumuman telah diperbarui. Silakan cek pengumuman terbaru di website SMK Wiyata Mandala di <a href="http://127.0.0.1:8000/pengumuman">Link Pengumuman</a></p>

    <!-- Tanda tangan -->
    <div class="signature">
        <p>Kepung, {{ $pengumuman['updated_at']->format('d') }} {{ $bulan[date('m', strtotime($pengumuman['updated_at']))] }} {{ $pengumuman['updated_at']->format('Y') }},</p>
        <p>SMK Wiyata Mandala</p>
        <br>
        <br>
        <br>
        <br>
        <p class="name">[Moh. Anas, S.Pd]</p>
    </div>
</body>
</html>
