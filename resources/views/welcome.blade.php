<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KARTU TANDA PENDUDUK</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh; 
        }

        .ktp {
            width: 600px;
            height: 450px;
            border: 1px solid black;
            padding: 20px;
            box-sizing: border-box;
            background-color: #3ABEF9; /* Biru */
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .title {
            font-size: 20px;
            font-weight: bold;
            text-align: center;
            color: black;
        }

        .biodata {
            display: grid;
            grid-template-columns: 1fr 2fr;
            grid-gap: 10px;
            color: black; 
        }

        .biodata label {
            font-weight: bold;
        }

     
    </style>
</head>
<body>
    <div class="ktp">
        <div class="header">
            <h2 class="title">KARTU TANDA PENDUDUK</h2>
        </div>

        <div class="biodata">
            <label for="nik">NIK</label>
            <span>: 112233445566778899</span>
            <label for="nama">Nama</label>
            <span>: KHARISMA ETANA FEBRIANTO</span>
            <label for="tempat_lahir">Tempat/Tgl Lahir</label>
            <span>: TULUNGAGUNG, 28-02-2003</span>
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <span>: LAKI-LAKI</span>
            <label for="alamat">Alamat</label>
            <span>: GILANG, NGUNUT, TULUNGAGUNG</span>
            <label for="agama">Agama</label>
            <span>: KRISTEN</span>
            <label for="status_pekrwaninan">Satatus Perkwainan</label>
            <span>: BELUM KAWIN</span>
            <label for="pekerjaan">Pekerjaan</label>
            <span>: PELAJAR/MAHASISWA</span>
            <label for="kewarganegaraan">Kewarganegaraan</label>
            <span>: WNI</span>
            <label for="goldar">Golongan Darah</label>
            <span>: B+</span>
            <label for="berlaku_hingga">Berlaku Hingga</label>
            <span>: SEUMUR HIDUP</span>
        </div>

    </div>
</body>
</html>