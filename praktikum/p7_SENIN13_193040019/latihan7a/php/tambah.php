<?php
require 'function.php';

if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
          alert('Data Berhasil Ditambahkan!');
          document.location.href = admin.php;
          </script>";
  } else {
    echo "<script>
          alert('Data Gagal Ditambahkan!');
          document.location.href = admin.php;
          </script>";
  }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Tambah Data Alat Musik</title>
</head>

<body>
  <h3>
    <center>Form Tambah Data Alat Musik</center>
  </h3>
  <form action="" method="POST">
    <ul>
      <li>
        <label for="id">NO:</label>
        <input type="text" name="id" id="id" required autofocus><br><br>
      </li>
      <li>
        <label for="gambar">Gambar :</label>
        <input type="text" name="gambar" id="gambar" required><br><br>
      </li>
      <li>
        <label for="nama_alat">Nama Alat Musik :</label>
        <input type="text" name="nama_alat" id="nama_alat" required><br><br>
      </li>
      <li>
        <label for="merk">Merk :</label>
        <select name="merk" id="merk" required>
          <option value="">----------Pilih Cara Bermain----------</option>
          <option value="petik">dipetik</option>
          <option value="pukul">diPukul</option>
          <option value="tiup">ditiup</option>
          <option value="tekan">diteekan</option>
        </select>
      </li><br>
      <li>
        <label for="harga">Harga Alat Musik : Rp.</label>
        <input type="text" name="harga" id="harga" required><br><br>
      </li><br> <br>
      <button type="submit" name="tambah">Tambah Data!</button>
      <button type="submit" class="submit">
        <a href="../index.php">Kembali</a>
      </button>
    </ul>
  </form>
</body>

</html>