<!DOCTYPE html>
<html>
<head>
	<title>TechnoNews.com</title>

	<script type="text/javascript">
		function validasi() {
			var username = document.getElementById("username").value;
			var password = document.getElementById("password").value;
			var nama = document.getElementById("nama").value;
			var email = document.getElementById("email").value;
			if (username != "" && password!="" && nama!="" && email!="") {
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

			<h2 class="jdlatas">SIGN UP</h2>
			<br><br>

			<?php

			if($_SERVER["REQUEST_METHOD"] == "POST")
			{
				$err_username="0";
				$err_password="0";
				$err_nama="0";
				$err_email="0";

				
				$username = $_POST['username'];
				$password = $_POST['password'];
				$nama = $_POST['nama'];
				$email = $_POST['email'];
				

				if($username=="")$err_username="1";
				if($password=="")$err_password="1";
				if($nama=="")$err_nama="1";
				if($email=="")$err_email="1";
				
				if($err_username=="0" & $err_password=="0" & $err_nama=="0" & $err_email=="0")
				{

					$i_cekusername = "SELECT * FROM user WHERE username='$username'";
					$p_cekusername = mysqli_query($koneksi,$i_cekusername);
					$d_cekusername = mysqli_fetch_array($p_cekusername);
					
					$i_cekemail = "SELECT * FROM user WHERE email='$email'";
					$p_cekemail = mysqli_query($koneksi,$i_cekemail);
					$d_cekemail = mysqli_fetch_array($p_cekemail);

					if(empty($d_cekusername['username']) & empty($d_cekemail['email']))
					{
						$daftar="INSERT INTO user(username,password,tipe,nama,email) values 
						('$username','$password','user','$nama','$email')";
						$hasildaftar = mysqli_query($koneksi,$daftar);

						$pilih = "SELECT * FROM user WHERE username='$username' AND password='$password'";
						$hasilpilih = mysqli_query($koneksi,$pilih);
						$datapilih = mysqli_fetch_array($hasilpilih);
						
						if(empty($datapilih['username']))
						{
							echo
							"
							<h1 align='center'>ERROR!</h1>
							";
						}
						
						else
						{
							$_SESSION['technonews_username'] = $datapilih['username'];
							$_SESSION['technonews_password'] = $datapilih['password'];
							echo"
							<meta http-equiv='refresh' content='0,URL=index.php'>
							";
						}

					}

					else
					{
						if(isset($d_cekusername['username']))
						{
							echo"
							<div class='alert alert-danger'>
							<strong>Username sudah tersedia, coba username lain!</strong>
							</div>
							";
						}
						if(isset($d_cekemail['email']))
						{
							echo"
							<div class='alert alert-danger'>
							<strong>Email sudah terdaftar, coba email lain!</strong>
							</div>
							";
						}
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
				
				if($err_nama=="1")
				{
					echo"
					<div class='alert alert-danger'>
					<strong>Nama tidak boleh kosong!</strong>
					</div>
					";
				}
				
				if($err_email=="1")
				{
					echo"
					<div class='alert alert-danger'>
					<strong>Email tidak boleh kosong!</strong>
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
							<input type="text" name="username" id="username" class="form-control">
						</div>
						
						<div class="form-group">
							<label>Password:</label>
							<input type="password" name="password" id="password" class="form-control">
						</div>
						
						<div class="form-group">
							<label>Nama:</label>
							<input type="text" name="nama" id="nama" class="form-control">
						</div>
						
						<div class="form-group">
							<label>Email:</label>
							<input type="text" name="email" id="email" class="form-control">
						</div>
						<div class="form-group" align="center">
							<input type="submit" class="btn btn-success btn-lg" value="Sign Up" style="width:100%"/>
						</div>
						
					</form>
				</div>

			</div>
			
		</div>

		<?php include "footer.php"; ?>
	</center>
</body>
</html>