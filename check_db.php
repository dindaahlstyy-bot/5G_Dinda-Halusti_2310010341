<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'db_2310010341';
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}
$result = $conn->query('SELECT * FROM prodi');
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo 'ID: ' . $row['id_prodi'] . ' Kode: ' . $row['kode_prodi'] . ' Nama: ' . $row['nama_prodi'] . PHP_EOL;
    }
} else {
    echo 'No records';
}
$conn->close();
?>
