<!DOCTYPE html>
<html>
<head>
    <title>Pengumuman Diperbarui</title>
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            line-height: 1.6;
        }
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }
        .header, .footer {
            background: #f4f4f4;
            padding: 10px;
            text-align: center;
        }
        .content {
            margin: 20px 0;
        }
        .content p {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Pengumuman Diperbarui</h1>
        </div>
        <div class="content">
            <h2>{{ $pengumuman->title }}</h2>
            <p>{{ $pengumuman->caption }}</p>
            @if($pengumuman->file_id)
                <p>Dokumen terlampir di email ini.</p>
            @endif
        </div>
        
    </div>
</body>
</html>
