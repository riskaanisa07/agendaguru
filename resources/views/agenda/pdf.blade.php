<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Laporan Kegiatan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .data {
            margin-bottom: 20px;
        }
        .data label {
            font-weight: bold;
        }
        .image {
            text-align: center;
        }
        .image img {
            max-width: 100%;
            max-height: 300px;
            margin-top: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Laporan Kegiatan</h1>
        </div>
        <div class="data">
            <label>ID:</label> 1<br>
            <label>Tanggal:</label> {{ $agenda->tanggal }}<br>
            <label>Jam Pembelajaran:</label> {{ $agenda->jam_pembelajaran }}<br>
            <label>Nama Guru:</label> {{ $agenda->user->name }}<br>
            <label>Kegiatan:</label> {{ $agenda->kegiatan }}<br>
        </div>
        <div class="image">
            <label>Bukti:</label><br>
            <img src="{{ public_path('storage/' . $agenda->bukti) }}" alt="" width="100%">
        </div>
        <div class="image">
            <label>Tanda Tangan:</label><br>
            <img src="{{ public_path('signature/' . $agenda->tanda_tangan) }}" alt="" width="100%">
        </div>
    </div>
</body>
</html>
