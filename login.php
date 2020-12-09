<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>TechnoNews.com</title>
	<script type="text/javascript">
		function validasi() {
			var pengguna = document.getElementById("pengguna").value;
			var sandi = document.getElementById("sandi").value;
			if (pengguna != "" && sandi!="") {
				return true;
			}else{
				alert('Semua form harus diisi!');
			}
		}
	</script>
</head>

<?php include "header.php"; 

if(isset($_SESSION['technonews_username']) & isset($_SESSION['technonews_password']))
{
	header("location: index.php");
}
else
{
	
}

?>

<body>
	<center>
		<div class="container" align="left">


			<h2 class="jdlatas">LOGIN</h2>
			<br><br>

			<?php

			if($_SERVER["REQUEST_METHOD"] == "POST")
			{
				
				$err_username="0";
				$err_password="0";
				
				$username = $_POST['pengguna'];
				$password = $_POST['sandi'];
				
				if($username=="")$err_username="1";
				if($password=="")$err_password="1";
				
				if($err_username=="0" & $err_password=="0")
				{
					
					$edit = "SELECT * FROM user WHERE username='$username' AND password='$password'";
					$hasil = mysqli_query($koneksi,$edit);
					$datal = mysqli_fetch_array($hasil);
					
					if(empty($datal['username']))
					{
						?>

						<div class="alert alert-danger">
							<strong>Email dan password tidak sesuai!</strong>
						</div>


						<?php
					}
					
					else
					{
						$_SESSION['technonews_username'] = $datal['username'];
						$_SESSION['technonews_password'] = $datal['password'];
						echo"
						<meta http-equiv='refresh' content='0,URL=index.php'>
						";
					}
					
				}
				
				if($err_username=="1")
				{
					echo"
					<div class='alert alert-danger'>
					<strong>Username tidak boleh kosong!</strong>
					</div>
					";
				}
				
				if($err_password=="1")
				{
					echo"
					<div class='alert alert-danger'>
					<strong>Password tidak boleh kosong!</strong>
					</div>
					";
				}
				
			}

			?>

			<div class="well">

				<div align="left">
					<form role="form" method="POST" onSubmit="validasi()">
						<div class="form-group">
							<label>Username:</label>
							<input type="text" class="form-control" name="pengguna" id="pengguna">
						</div>
						<div class="form-group">
							<label>Password:</label>
							<input type="password" class="form-control" name="sandi" id="sandi">
						</div>
						<div class="form-group" align="center">
							<input type="submit" class="btn btn-success btn-lg" value="Login" style="width:100%"/>
						</div>
						
					</form>
				</div>

			</div>

		</div>
		<?php include "footer.php"; ?>
	</center>
</body>
</html>