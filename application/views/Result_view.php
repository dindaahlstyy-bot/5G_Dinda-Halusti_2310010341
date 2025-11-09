<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Mahasiswa oleh Nama dan NIM</title>
</head>
<body>
    <h1>Selamat Datang di Web Nama Metode Result</h1>

    <table border="2" cellpadding="5" cellspacing="0">
        <thead>
            <tr>
                <th>NO</th>
                <th>NIM</th>
                <th>Nama</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $no = 1;
            foreach ($result as $row) { ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $row->nim; ?></td>
                    <td><?= $row->nama_mhs; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>