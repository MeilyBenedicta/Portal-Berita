<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>TechnoNews.com</title>
	

	
</head>

<?php include "header_admin.php" ?>

<body>
	<center>
		<div style="width:50%" align="left">

			<br><h2 class="jdlatas" align="center" id="toform">TAMBAH USER</h2><br><br>

			<?php

			if(isset($_GET['err_username']))
			{
				if($_GET['err_username']=="1")
				{
					echo"
					<div class='alert alert-danger'>
					<strong>Username tidak boleh kosong!</strong>
					</div>
					";
				}
				
				if($_GET['err_username']=="2")
				{
					echo"
					<div class='alert alert-danger'>
					<strong>Username sudah ada, coba username lain!</strong>
					</div>
					";
				}
			}

			if(isset($_GET['err_password']))
			{
				if($_GET['err_password']=="1")
				{
					echo"
					<div class='alert alert-danger'>
					<strong>Password tidak boleh kosong!</strong>
					</div>
					";
				}
			}

			if(isset($_GET['err_nama']))
			{
				if($_GET['err_nama']=="1")
				{
					echo"
					<div class='alert alert-danger'>
					<strong>Nama tidak boleh kosong!</strong>
					</div>
					";
				}
			}

			if(isset($_GET['err_email']))
			{
				if($_GET['err_email']=="1")
				{
					echo"
					<div class='alert alert-danger'>
					<strong>Email tidak boleh kosong!</strong>
					</div>
					";
				}
				
				if($_GET['err_email']=="2")
				{
					echo"
					<div class='alert alert-danger'>
					<strong>Email sudah terdaftar, coba email lain!</strong>
					</div>
					";
				}
			}

			?>

			<form method="POST" action="tambahuser2.php" onSubmit="return validasi()">
				
				<div class="form-group">
					<label>Username:</label>
					<input type="text" name="username" id="username" class="form-control" placeholder="username">
				</div>
				
				<div class="form-group">
					<label>Password:</label>
					<input type="password" name="password" id="password" class="form-control" placeholder="password">
				</div>
				
				<div class="form-group">
					<label>Nama:</label>
					<input type="text" name="nama" id="nama" class="form-control" placeholder="nama">
				</div>
				
				<div class="form-group">
					<label>Email:</label>
					<input type="text" name="email" id="email" class="form-control" placeholder="email">
				</div>
				
				<input type="submit" style="width:100%" type="button" class="btn btn-primary" value="Buat">
				
			</form>



			<br><br>
		</div>
		
		

	</div>
</center>
</body>
</html>