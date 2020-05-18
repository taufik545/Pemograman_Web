<?php 

require 'function.php';
		$keyword = $_GET['keyword'];
		$alat_musik = query("SELECT * FROM alatmusik WHERE
			gambar like '%$keyword%'OR
			merk like '%$keyword%'OR
			tipe like '%$keyword%'OR
			warna like '%$keyword%'OR
			harga like '%$keyword%'"); 

 ?>

 <?php foreach ($smartphone as $s): ?>
      <div class="row" align="center">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="image/<?= $s['gambar'];?>" style ='width: 150px; height: 150px;'>
      <div class="caption">
        <h3><?= $s['tipe']; ?></h3>
        
        <p><a href="php/user.php?id=<?= $s['id'];  ?>" class="btn btn-default btn-primary" role="button">Read More</a></p>
      </div>
    </div>
  </div>
</div>     
    <?php endforeach ?>
   