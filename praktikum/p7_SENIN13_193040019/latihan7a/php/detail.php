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
     
    </div>
    <div class="keterangan">
      <p><?= $i["nama_alat"]; ?></p>
      <p><?= $i["merek"]; ?></p>
      <p><?= $i["cara_memainkan"]; ?></p>
      <p><?= $i["harga"]; ?></p>
      <img src="../assets/img/<?= $i["gambar"]; ?>" alt="">
    </div>


    <button class="tombol_kembali"> <a href="../index.php">Kembali</a> </button>
  </div>
</body>

</html>