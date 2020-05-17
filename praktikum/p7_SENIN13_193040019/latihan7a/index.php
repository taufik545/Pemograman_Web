<?php
// melakukan koneksi ke database
$conn = mysqli_connect("localhost", "root", "") or die("Koneksi ke DB gagal");
// memilih database
mysqli_select_db($conn, "prak_193040019") or die("Database salah!");
// query mengambil objek dari tabel didalam database
$result = mysqli_query($conn, "SELECT * FROM alatmusik");
?>

<html>

<head>
  <title></title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <h3>Alat Musik</h3>
  <table border="1px">
    <tr>
      <th>id</th>
      <th>nama_alat</th>
      <th>merek</th>
      <th>cara memainkan</th>
      <th>harga</th>
      <th>gambar</th>
    </tr>
    <?php while ($i = mysqli_fetch_assoc($result)) : ?>
      <tr>
        <td><?= $i["id"]; ?></td>
        <td><?= $i["nama_alat"]; ?></td>
        <td><?= $i["merek"]; ?></td>
        <td><?= $i["cara_memainkan"]; ?></td>
        <td><?= $i["harga"]; ?></td>
        <td><img width="100px" src="assets/img/<?= $i['gambar']; ?>"></td>
      </tr>
    <?php endwhile; ?>
  </table>
  <h5 align="center"></h5>
</body>

</html>