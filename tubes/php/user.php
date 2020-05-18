<?php  
  require 'function.php';
$id = $_GET['id'];
$alat_musik = query("SELECT * FROM alatmusik WHERE id = '$id'")[0];

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body style="background-image: url(../image/tt.jpg); color: white">

     <div class="con" style="margin-left: 500px;">
      <div class="row">
  <div class="col-xs-6 col-md-3">
    <a href="#" class="thumbnail">
      <img width="250px" align="center" src="../image/<?= $alat_musik['gambar'] ?>">
    </a>
  </div>
  <?php $alat_musik['id']; ?>
             
           
            <p><?= $alat_musik ['gambar']; ?></p> 
            <p><?= $alat_musik ['nama_alat']; ?></p>
            <p><?= $alat_musik ['cara_memainkan']; ?></p>
            <p><?= $alat_musik ['harga']; ?></p>
</div>
    

          </div>
        
      

     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>