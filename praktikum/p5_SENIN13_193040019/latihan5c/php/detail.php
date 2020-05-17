<?php
if (!isset($_GET['id'])) {
  header("location: ../index.php");
  exit;
}

require 'function.php';

$id = $_GET['id'];

$i = query("SELECT * FROM alatmusik WHERE id = $id")[0];
?>

<html>

<head>

  <title>Alat Musik</title>



  <link rel="stylesheet" href="../css/style.css">

</head>

<body>
  <div class="container">
    <div class="gambar">
      <img src="../assets/img/<?= $i["gambar"]; ?>" alt="">
    </div>
    <div class="keterangan">
      <p><?= $i["nama_alat"]; ?></p>
      <p><?= $i["merk"]; ?></p>
      <p><?= $i["cara_permainan"]; ?></p>
      <p><?= $i["harga"]; ?></p>
    </div>


    <button class="tombol_kembali"> <a href="../index.php">Kembali</a> </button>
  </div>
</body>

</html>