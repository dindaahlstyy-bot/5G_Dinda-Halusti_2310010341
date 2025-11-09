<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'http://localhost/2310010341/index.php/prodi/perbaharui/1');
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'kode_prodi=TI&nama_prodi=Teknik Informatika Updated');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
curl_close($ch);
echo $result;
?>
