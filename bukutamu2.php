<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body>
	<center>
		<div style="width:300px"><br><br>

			<?php

			require"includes/konek.php";

			if($_SERVER["REQUEST_METHOD"] == "POST")
			{
				session_start();
				
				$err_isi="0";

				$user=$_POST['user'];
				$masukan=$_POST['masukan'];
				
				if($masukan=="")$err_isi="1";

				if($err_isi=="0")
				{
					$kom1="INSERT INTO guestbook(user,masukan) values 
					('$user','$masukan')";
					$kom2 = mysqli_query($koneksi,$kom1);

					if($kom2)
					{
						header("location: bukutamu.php#toisian");
					}

					else
					{
						echo "ERROR GAN";
					}
				}
				
				if($err_isi=="1")
				{
					echo"
					<div class='alert alert-danger'>
					<strong>Masukan tidak boleh kosong!</strong>
					</div>
					";
				}
				
			}
			?>

			<div class="alert alert-danger">
				<strong><a href="bukutamu.php">Klik disini untuk kembali</a></strong>
			</div>

		</div>
	</center>
</body>
</html>