<?php
// menghubungkan dengan file php lainnya
require 'php/function.php';
// melakukan query
$result = query("SELECT * FROM alatmusik")
?>
<html>

<head>
  <title></title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <h3>Alat Musik</h3>
  <table border="1">
    <tr>
      <th>id</th>
      <th>nama Alat</th>
      <th>merek</th>
      <th>cara memainkan</th>
      <th>harga</th>
      <th>gambar</th>
    </tr>
    <?php foreach ($result as $i) { ?>
      <tr>
        <td><?= $i["id"]; ?></td>
        <td><?= $i["nama_alat"]; ?></td>
        <td><?= $i["merek"]; ?></td>
        <td><?= $i["cara_memainkan"]; ?></td>
        <td><?= $i["harga"]; ?></td>
        <td><img width="100px" src="assets/img/<?= $i['gambar']; ?>"></td>
      </tr>
    <?php } ?>
  </table>
  <h5 align="center"></h5>
</body>

</html>