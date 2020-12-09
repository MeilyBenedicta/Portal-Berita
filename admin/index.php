<?php require"../includes/koneksi.php";

session_start();

$err_username="0";
$err_password="0";

if($_SERVER["REQUEST_METHOD"] == "POST")
{
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	if($username=="")$err_username="1";
	if($password=="")$err_password="1";
	
	if($err_username=="0" & $err_password=="0")
	{
		$i_login = "SELECT * FROM user WHERE username='$username' AND password='$password' AND tipe='admin'";
		$p_login = mysqli_query($koneksi,$i_login);
		$d_login = mysqli_fetch_array($p_login);

		if(empty($d_login['username']))
		{
			$cek=0;
			$ceklogin=9;
		}
		else
		{
			$cek=1;
			$_SESSION['prorakyat_admin_username'] = $username;
			$_SESSION['prorakyat_admin_password'] = $password;
		}
	}
}

if(isset($_SESSION['prorakyat_admin_username']) & isset($_SESSION['prorakyat_admin_password']))
{
	$i_cek = "SELECT * FROM user WHERE username='$_SESSION[prorakyat_admin_username]' AND password='$_SESSION[prorakyat_admin_password]' AND tipe='admin'";
	$p_cek = mysqli_query($koneksi,$i_cek);
	$d_cek = mysqli_fetch_array($p_cek);
	
	if(empty($d_cek['username']))
	{
		$cek=0;
	}
	else
	{
		$cek=1;
	}
}
else
{
	$cek=0;
}

if($cek==1)
{
	header("location: index2.php");
}
else
{

	?>

	<!DOCTYPE html>
	<html>
	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" href="../css/style_admin.css">
		<link rel="stylesheet" href="../css/bootstrap.css">
		<script type="text/javascript" src="../js/jquery.js"></script>
		<script type="text/javascript" src="../js/bootstrap.js"></script>
		
		<title>Login Admin</title>
	</head>

	<body>
		<center>
			<div style="width:300px; margin:25px" align="left">

				<?php

				if(isset($ceklogin))
				{
					if($ceklogin==9){
						echo
						"

						<div class='alert alert-danger'>
						<strong>Username atau password tidak sesuai!</strong>
						</div>

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

				?>

				<div class="well">

					<h3 align="center">Silahkan Login</h3>
					<br>

					<div align="left">
						<form role="form" method="POST">
							<div class="form-group">
								<label>Username:</label>
								<input type="text" class="form-control" name="username" placeholder="username">
							</div>
							<div class="form-group">
								<label>Password:</label>
								<input type="password" class="form-control" name="password" placeholder="password">
							</div>
							<div class="form-group" align="center">
								<input type="submit" class="btn btn-success btn-lg" value="Login" style="width:100%"/>
							</div>
							
						</form>
					</div>

				</div>

			</div>
		</body>
		</html>
		<?php } ?>