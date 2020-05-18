<?php
require 'function.php';

$result = query("SELECT * FROM alatmusik ");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Admin</title>
  <style>
    table {
      margin: auto;
      background-color: yellow ;
      font-family: Lato ;
    }

    img {
      border-radius: 30px;
    }

    .ubah {
      background-color: indigo ;
      color: white;
      border-radius: 10px;
    }

    .hapus {
      background-color: blue;
      color: white;
      border-radius: 10px;
    }

    .kembali {
      background-color: red;
      color: white;
      border-radius: 10px;
    }
  </style>
</head>

<body>
  <h1>
    <center><b>ADMIN</b></center>
  </h1>
  <table border="1" cellpadding="12" cellspacing="0">
    <tr>
      <th>id</th>
      <th>opsi</th>
      <th>nama_alat</th>
      <th>merek</th>
      <th>cara_memainkan</th>
      <th>harga</th>
      <th>gambar</th>
    </tr>
    <?php $i = 1 ?>
    <?php foreach ($result as $i) : ?>
      <tr>
        <td><?= $i['id']; ?></td>
        <td>
          <a href=""><button class="ubah">Ubah</button></a>
          <a href=""><button class="hapus">Hapus</button></a>
        </td>
        
        <td><?= $i['nama_alat']; ?></td>
        <td><?= $i['merek']; ?></td>
        <td><?= $i['cara_memainkan']; ?></td>
        <td><?= $i['harga']; ?></td>
        <td><img width="100px" src="../assets/img/<?= $i['gambar']; ?>"></td>
      </tr>
      <?php $i++; ?>
    <?php endforeach; ?>
    <tr>
      <td>
        <button class="kembali">
          <center><a href="../index.php">Kembali</a></center>
        </button>
      </td>
    </tr>
  </table>

</body>

</html>