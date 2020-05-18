<?php

	require 'functions.php';
	if (isset($_POST['registrasi'])) {
		if (registrasi($_POST) > 0) {
			echo "<script>
				alert('Registrasi Berhasil');
				document.location.href = 'login.php';
			 </script>";
		}
	}

	?>







 <!DOCTYPE html>
 <html>

 <head>
 	<title>Form registrasi</title>
 </head>

 <body>

 	<h3>Form registrasi</h3>
 	<form action="" method="post">
 		<ul>
 			<li>
 				<label>Username :</label><br>
 				<input type="text" name="username">

 			</li>
 			<li>
 				<label>Password :</label><br>
 				<input type="password" name="password1" required>
 			</li>
 		</ul>
 		<ul>
 			<li>
 				<label>Konfirmasi Password :</label><br>
 				<input type="password" name="password2" required>
 			</li>
 		</ul>
 		<ul>
 			<li>
 				<button type="submit" name="registrasi">Registrasi</button>
 			</li>
 		</ul>

 	</form>

 </body>

 </html>