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

			if($_SERVER["REQUEST_METHOD"] == "POST")
			{
				require"includes/koneksi.php";
				session_start();

				$err_isi="0";
				
				date_default_timezone_set("Asia/Jakarta");
				$tanggal1= mktime(date("m"),date("d"),date("Y"));
				$tanggal2= date("d-M-Y", $tanggal1);
				
				$id_artikel = $_POST['a'];
				$jam=date("H:i");
				$tanggal = date("d", $tanggal1);
				$bulan = date("m", $tanggal1);
				$tahun = date("Y", $tanggal1);
				$komentar = $_POST['isi'];
				$user = $_SESSION['technonews_username'];

				if($komentar=="")$err_isi="1";
				
				if($err_isi=="0")
				{
					$kom1="INSERT INTO komentar(id_artikel,jam,tanggal,bulan,tahun,komentar,user) values 
					('$id_artikel','$jam','$tanggal','$bulan','$tahun','$komentar','$user')";
					$kom2 = mysqli_query($koneksi,$kom1);

					if($kom2)
					{
						header("location: baca.php?a=$id_artikel#tokomentar");
					}
					else
					{
						echo "ERROR LAH BOS";
					}
				}
				
				if($err_isi=="1")
				{
					echo"
					<div class='alert alert-danger'>
					<strong>Komentar tidak boleh kosong!</strong>
					</div>
					";
				}
			}

			else
			{
				header("location: index.php");
			}
			?>

			<div class="alert alert-danger">
				<strong><a href="bukutamu.php">Klik disini untuk kembali</a></strong>
			</div>

		</div>
	</center>
</body>
</html>