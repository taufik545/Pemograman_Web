<?php
// menghubungkan dengan file php lainnya
require 'php/function.php';
// melakukan query

if (isset($_GET['cari'])) {
  $keyword = $_GET['keyword'];
  $query = "SELECT * FROM alat_musik WHERE
          nama LIKE '%$keyword%' OR
          merk LIKE '%$keyword%' OR
          jenis LIKE '%$keyword%' 
          ";
  if ($alat_musik = query($query)) {
    echo '<div class="alert alert-success" role="alert">
          Data berhasil ditemukan!
        </div>';
  } else {
    echo '<div class="alert alert-warning" role="alert">
            Data tidak ditemukan!
          </div>';
  }
} else {
  $query = "SELECT * FROM alatmusik";
  $alatmusik = query($query);
}

$result = query("SELECT * FROM alatmusik")
?>
<html>

<head>
  <title>Latihan 6 A</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <h3>Alat Musik</h3>

  <table border="1">
    <tr>
      <th>No</th>
      <th>Gambar</th>
      <th>Nama Alat</th>
      <th>Merk</th>
      <th>Cara Permainan</th>
      <th>Harga</th>
    </tr>
    <?php foreach ($result as $i) { ?>
      <tr>
        <td><?= $i["id"]; ?></td>
        <td><img width="100px" src="assets/img/<?= $i['gambar']; ?>"></td>
        <td><?= $i["nama_alat"]; ?></td>
        <td><?= $i["merek"]; ?></td>
        <td><?= $i["cara_memainkan"]; ?></td>
        <td><?= $i["harga"]; ?></td>
      </tr>
    <?php } ?>
    <center>
      <button class="admin">
        <a href="php/login.php">Admin Disini!!!</a>
      </button>
    </center>
  </table>
  <h5 align="center"></h5>
</body>

</html>