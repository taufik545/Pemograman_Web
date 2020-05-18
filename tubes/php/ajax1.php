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

 <table class="table table-bordered" style="color: white;">
  
    <tr>
      <th>No</th>
      <th>Gambar</th>
      <th>Merk</th>
      <th>Tipe</th>
      <th>Warna</th>
      <th>Harga</th>
      <th>Aksi</th>
    </tr>

    <?php  if(empty($alat_musik)) :?>
      <tr>
        <td colspan="6">data tidak ditemukan</td>
      </tr>
    <?php endif; ?>

      <?php $i =1; ?>
      <?php foreach ($alat_musik as $s) :?>
      <tr align="center">
        <td><?= $i++;  ?></td>
        <td><img src="../image/<?= $s['gambar'];?>" style ="width: 50px; height: 50px;"></td>
        <td><?= $s['gambat']; ?></td>
        <td><?= $s['nama_alat'] ; ?></td>
        <td><?= $s['cara_memainkan'] ; ?></td>
        <td><?= $s['harga']; ?></td>
        <td>
          <a href="ubah.php?id=<?= $s['id'] ; ?>">Ubah</a> | 
          <a href="Hapus.php?id=<?= $s['id'] ; ?>" onclick="return confirm('yakin!');">Hapus</a>
        </td>


      </tr>
    <?php endforeach; ?>
  </table>
   