<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Kegiatan</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        .header {
            background-color: #00b4b6;
            color: white;
            padding: 10px 20px;
            display: flex;
            align-items: center;
            margin-bottom: 20px; /* Menambahkan jarak antara header dan konten utama */
        }

        .header .logo {
            width: 40px;
            height: 40px;
            background-color: white;
            border-radius: 50%;
            margin-right: 10px;
        }

        .header .title {
            font-size: 18px;
        }

        .nav {
            margin-left: auto;
        }

        .nav a {
            color: white;
            text-decoration: none;
            margin: 0 10px;
            font-size: 16px;
        }

        .container {
            max-width: 1000px; /* Lebar kontainer lebih lebar */
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #00bcd4;
            margin-bottom: 30px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        thead {
            background-color: #00b4b6;
            color: white;
        }

        th, td {
            padding: 12px 15px;
            text-align: left;
            border: 1px solid #ddd;
        }

        tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        /* Tambahkan sedikit ruang antara tabel dan elemen di sekitarnya */
        table {
            margin-top: 20px;
        }

        tbody tr:hover {
            background-color: #e0f7fa; /* Menambahkan efek hover untuk baris tabel */
        }
    </style>
</head>
<body>
  <div class="header">
    <div class="logo"></div>
    <div class="title">
    <a href="/home"> Ust. Ali Muhadi Masykur</a>
    </div>
    <div class="nav">
      <a href="/videodakwah">Video Dakwah</a>
      <a href="#">Kalender Hari Besar Islam</a>
      <a href="#">Jadwal Kajian</a>
    </div>
  </div>

  <div class="container">
    <h1>Jadwal Kegiatan</h1>
    <table>
      <thead>
        <tr>
          <th>Hari</th>
          <th>Kegiatan</th>
          <th>Waktu</th>
          <th>Lokasi</th>
        </tr>
      </thead>
    </table>
  </div>
</body>
</html>
