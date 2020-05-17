<?php
require 'function.php';

$id = $_GET['id'];
$i = query("SELECT * FROM alat_musik WHERE id = $id");


if (isset($_POST['ubah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
          alert('Data Berhasil Diubah!');
          document.location.href = admin.php;
          </script>";
  } else {
    echo "<script>
          alert('Data Gagal Diubah!');
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
  <title>Form Ubah Data Alat Musik</title>
</head>

<body>
  <h3>
    <center>Form Ubah Data Alat Musik</center>
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
          <option value="petik">DiPetik</option>
          <option value="pukul">DiPukul</option>
          <option value="tiup">DiTiup</option>
          <option value="tekan">DiTekan</option>
        </select>
      </li><br>
      <li>
        <label for="harga">Harga Alat Musik : Rp.</label>
        <input type="text" name="harga" id="harga" required><br><br>
      </li><br> <br>
      <button type="submit" name="ubah">Ubah Data!</button>
      <button type="submit" class="submit">
        <a href="../index.php">Kembali</a>
      </button>
    </ul>
  </form>
</body>

</html>