<?php
// menghubungkan dengan file php lainnya
require 'php/function.php';

// melakukan query

if (isset($_GET['cari'])) {
  $keyword = $_GET['keyword'];
  $alat_musik = query(
    "SELECT * FROM alat_musik WHERE
         gambar like '%$keyword%'OR
			nama_alat like '%$keyword%'OR
			merk like '%$keyword%'OR
			cara_memainkan like '%$keyword%'OR
			harga like '%$keyword%' "
  );
} else {
  $alat_musik = query("SELECT * FROM alatmusik");
}
?>


<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <title>Taufik hidayat</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light border-bottom">
    <div class="container">
      <a class="navbar-brand" href="#">ALAT MUSIK</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav mx-auto">
          <form class="form-inline mr-2" action="">
            <input class="form-control mr-sm-2" type="search" size="60" placeholder="Search" aria-label="Search" name="keyword">
            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit" name="cari">Cari</button>
          </form>
        </div>
        <div class="navbar-nav ml-auto">
          <a class="nav-item btn btn-primary" href="php/login.php">
            Login
          </a>
        </div>
      </div>
    </div>
  </nav>
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">Alat Musik</h1>
      <p class="lead">10 Alat Musik Paling Populer DiMainkan Oleh Seluruh Orang di Dunia.</p>
    </div>
  </div>
  <div class="container">
    <h1>ALAT MUSIK</h1>
    <?php if (empty($alat_musik)) : ?>
      <h3 class="text-danger">Hasil pencarian tidak ditemukan!</h3>
    <?php endif; ?>
    <div class="row">
      <?php foreach ($alat_musik as $a) : ?>
        <div class="col-md-3 mb-3">
          <div class="card">
          <img src="image/<?= $a['gambar']; ?>" style='width: 120px; height: 80px;' class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class=".card-title"> <?= $a['nama_alat'] ?></h5>
              <a href="php/user.php?id=<?= $a['id'];  ?>" class="btn btn-default btn-primary" role="button">Keterangan</a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>