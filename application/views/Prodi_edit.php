<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Program Studi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 30px;
        }
        .nav {
            text-align: center;
            margin-bottom: 20px;
        }
        .nav a {
            display: inline-block;
            margin: 0 10px;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .nav a:hover {
            background-color: #0056b3;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }
        input[type="text"] {
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }
        input[type="submit"] {
            padding: 12px;
            background-color: #ffc107;
            color: black;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        input[type="submit"]:hover {
            background-color: #e0a800;
        }
        .btn-back {
            display: inline-block;
            padding: 10px 20px;
            background-color: #6c757d;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
            text-align: center;
            transition: background-color 0.3s;
        }
        .btn-back:hover {
            background-color: #545b62;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Form Edit Program Studi</h1>
        <div class="nav">
            <a href="<?php echo site_url('mahasiswa') ?>">Mahasiswa</a>
            <a href="<?php echo site_url('prodi') ?>">Program Studi</a>
            <a href="<?php echo site_url('welcome') ?>" class="btn-back">Kembali ke Home</a>
        </div>
        <form action="<?= site_url('prodi/perbaharui/' . $prodi->id_prodi) ?>" method="post">
            <input type="hidden" name="id_prodi" value="<?= $prodi->id_prodi ?>">

            <label for="kode_prodi">Kode Prodi</label>
            <input type="text" name="kode_prodi" value="<?= $prodi->kode_prodi ?>" required>

            <label for="nama_prodi">Nama Prodi</label>
            <input type="text" name="nama_prodi" value="<?= $prodi->nama_prodi ?>" required>

            <input type="submit" value="Perbaharui">
        </form>
        <a href="<?php echo site_url('prodi') ?>" class="btn-back">Kembali ke Daftar</a>
    </div>
</body>
</html>
