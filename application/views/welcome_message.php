<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Sistem Informasi Akademik</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
			margin: 0;
			padding: 0;
			min-height: 100vh;
			display: flex;
			justify-content: center;
			align-items: center;
		}
		.container {
			background-color: white;
			border-radius: 15px;
			box-shadow: 0 15px 35px rgba(0,0,0,0.1);
			padding: 40px;
			text-align: center;
			max-width: 600px;
			width: 90%;
		}
		h1 {
			color: #333;
			font-size: 2.5em;
			margin-bottom: 20px;
			text-shadow: 2px 2px 4px rgba(0,0,0,0.1);
		}
		.story {
			font-size: 1.2em;
			line-height: 1.6;
			color: #555;
			margin-bottom: 30px;
			text-align: left;
		}
		.nav-buttons {
			display: flex;
			justify-content: center;
			gap: 20px;
			flex-wrap: wrap;
		}
		.btn {
			display: inline-block;
			padding: 15px 30px;
			background: linear-gradient(45deg, #007bff, #0056b3);
			color: white;
			text-decoration: none;
			border-radius: 25px;
			font-size: 1.1em;
			font-weight: bold;
			transition: all 0.3s ease;
			box-shadow: 0 4px 15px rgba(0,123,255,0.3);
		}
		.btn:hover {
			transform: translateY(-3px);
			box-shadow: 0 6px 20px rgba(0,123,255,0.4);
		}
		.btn-secondary {
			background: linear-gradient(45deg, #28a745, #218838);
		}
		.btn-secondary:hover {
			box-shadow: 0 6px 20px rgba(40,167,69,0.4);
		}
		.footer {
			margin-top: 30px;
			font-size: 0.9em;
			color: #777;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>Sistem Informasi Akademik</h1>
		<div class="story">
			<p>Dalam dunia pendidikan yang terus berkembang, teknologi informasi memainkan peran penting dalam mengelola data akademik. Sistem ini dirancang untuk memudahkan pengelolaan data mahasiswa dan program studi di sebuah universitas.</p>
			<p>Bayangkan sebuah perpustakaan digital yang menyimpan ribuan buku pengetahuan. Sistem ini seperti perpustakaan itu, tetapi untuk data mahasiswa dan program studi. Setiap mahasiswa adalah buku unik dengan cerita hidupnya, dan setiap program studi adalah rak yang mengorganisir pengetahuan.</p>
			<p>Dengan sistem ini, kita dapat menambah, mengedit, dan menghapus data dengan mudah, seperti seorang pustakawan yang merawat koleksi bukunya. Mari jelajahi dunia akademik ini bersama-sama!</p>
		</div>
		<div class="nav-buttons">
			<a href="<?php echo site_url('mahasiswa') ?>" class="btn">Kelola Mahasiswa</a>
			<a href="<?php echo site_url('prodi') ?>" class="btn btn-secondary">Kelola Program Studi</a>
		</div>
		<div class="footer">
			<p>Dibuat dengan ❤️ menggunakan CodeIgniter</p>
		</div>
	</div>
</body>
</html>
