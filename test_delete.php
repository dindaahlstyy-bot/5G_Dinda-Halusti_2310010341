<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'http://localhost/2310010341/index.php/prodi/hapus/1');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
curl_close($ch);
echo $result;
?>
