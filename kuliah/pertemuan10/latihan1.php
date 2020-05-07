<?php
// koneksi ke data base dan pilih data base nya
$conn = mysqli_connect('localhost', 'root','','pw_193040019');


// query isi tabel mahasiswa
$result = mysqli_query($conn,"SELECT*FROM mahasiswa");


//ubah data ke dalam array
$rows = [];
while ($row = mysqli_fetch_assoc($result)){
$rows[] = $row;
}


//tampung ke variable mahasiswa
$mahasiswa = $rows; 





?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
</head>

<body>
  <h3>Daftar Mahasiswa</h3>

  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>#</th>
      <th>Gambar</th>
      <th>NRP</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Jurusan</th>
      <th>Aksi</th>
    </tr>

    <?php $i = 1;
    foreach ($mahasiswa as $mahasiswa) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><img src="img/<?= $mahasiswa['GAMBAR']; ?>" width="60"></td>
        <td><?= $mahasiswa['NRP']; ?></td>
        <td><?= $mahasiswa['NAMA']; ?></td>
        <td><?= $mahasiswa['EMAIL']; ?></td>
        <td><?= $mahasiswa['JURUSAN']; ?></td>
        <td>
          <a href="">ubah</a> | <a href="">hapus</a>
        </td>
      
      </tr>
    <?php endforeach; ?>
  </table>
</body>
7






 
</html>