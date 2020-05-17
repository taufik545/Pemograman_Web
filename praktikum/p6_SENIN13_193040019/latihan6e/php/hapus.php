<?php
require 'function.php';

$ID = $_GET['id'];

if (hapus($ID) > 0) {
  echo "<script>
    alert('Data Berhasil Dihapus!');
    document.location.href = 'admin.php';
    </script>";
} else {
  echo "<script>
    alert('Data Gagal Dihapus!');
    document.location.href = 'admin.php';
    </script>";
}