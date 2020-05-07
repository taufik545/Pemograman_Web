<?php 
require 'function.php';

$id = $_GET['id'];

$mahasiswa = query("SELECT * FROM mahasiswa WHERE id = $id")[0];







?>





<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>detail mahasiswa</title>
</head>
<body>
  <h3>detail mahasiswa</h3>
  <ul>
  <li><img src="img/taufik.jpg">
  <li> NRP : 193040019</li>
  <LI>NAMA : taufik hidayat</LI>
  <li>EMAIL : taufikzx10r@gmail.com</li>
  <li>JURUSAN : teknik informatika</li>
  <li><a href="ubah"></a> | <a href="hapus"></a></li>
  <li><a href="latihan3.php">kembali kedaftar mahasiswa</a></li>
  
  </li>
  </ul>
</body>
</html>