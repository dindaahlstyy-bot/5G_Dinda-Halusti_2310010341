<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
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
        .btn-add {
            display: inline-block;
            padding: 10px 20px;
            background-color: #28a745;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-bottom: 20px;
            transition: background-color 0.3s;
        }
        .btn-add:hover {
            background-color: #218838;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #007bff;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #e9ecef;
        }
        .btn-edit {
            display: inline-block;
            padding: 5px 10px;
            background-color: #ffc107;
            color: black;
            text-decoration: none;
            border-radius: 3px;
            margin-right: 5px;
            transition: background-color 0.3s;
        }
        .btn-edit:hover {
            background-color: #e0a800;
        }
        .btn-delete {
            display: inline-block;
            padding: 5px 10px;
            background-color: #dc3545;
            color: white;
            text-decoration: none;
            border-radius: 3px;
            transition: background-color 0.3s;
        }
        .btn-delete:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Selamat Datang di Web Dinda Halusti</h1>
        <div class="nav">
            <a href="<?php echo site_url('mahasiswa') ?>">Mahasiswa</a>
            <a href="<?php echo site_url('prodi') ?>">Program Studi</a>
            <a href="<?php echo site_url('welcome') ?>" class="btn-back">Kembali ke Home</a>
        </div>
        <a href="<?php echo site_url('mahasiswa/tambah') ?>" class="btn-add">Tambah Mahasiswa</a>
        <a href="<?php echo site_url('mahasiswa/cetak') ?>" class="btn-add" target="_blank">Cetak</a>
        <table>
            <thead>
                <tr>
                    <th>NO</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Program Studi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($mahasiswa as $row) { ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $row->nim ?></td>
                        <td><?php echo $row->nama_mhs ?></td>
                        <td><?php echo $row->nama_prodi ?></td>
                        <td>
                            <a href="<?php echo site_url('mahasiswa/edit/' . $row->id_mahasiswa) ?>" class="btn-edit">Edit</a>
                            <a href="<?php echo site_url('mahasiswa/hapus/' . $row->id_mahasiswa) ?>" class="btn-delete" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
