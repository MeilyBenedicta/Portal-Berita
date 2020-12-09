<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" href="../css/bootstrap.css">
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/bootstrap.js"></script>
	
</head>

<body><center>
	<div style="width:500px; margin:25px" align="left">
		<?php require"admin_c.php";

		if($_SERVER["REQUEST_METHOD"] == "POST")
		{
			$err_password="0";
			$err_nama="0";

			$username = $d_saya_admin['username'];
			$password = $_POST['password'];
			$nama = $_POST['nama'];

			if($password=="")$err_password="1";
			if($nama=="")$err_nama="1";

			if($err_password=="0" & $err_nama=="0")
			{
				$update= "UPDATE user set password='$password', nama='$nama' WHERE username='$username'";
				$hasil = mysqli_query($koneksi,$update);

				if($hasil)
				{ 
					$_SESSION['prorakyat_admin_username'] = $username;
					$_SESSION['prorakyat_admin_password'] = $password;
					header("location: index2.php");
				}
				else
				{
					echo "
					<div class='alert alert-danger'>
					<strong>ERROR!</strong>
					</div>
					";
				}
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
		}
		?>

		<div class="well">

			<h3 align="center">EDIT PROFIL</h3>
			<br>

			<div align="left">
				<form role="form" method="POST">
					
					<div class="form-group">
						<label>Username:</label>
						<input type="text" class="form-control" value="<?php echo $d_saya_admin['username'];?>" disabled>
					</div>
					
					<div class="form-group">
						<label>Password:</label>
						<input type="password" name="password" class="form-control">
					</div>
					
					<div class="form-group">
						<label>Nama:</label>
						<input type="text" name="nama" class="form-control" value="<?php echo $d_saya_admin['nama'];?>">
					</div>
					
					<div class="form-group">
						<label>Email:</label>
						<input type="text" class="form-control" value="<?php echo $d_saya_admin['email'];?>" disabled>
					</div>
					
					<div class="form-group">
						<input type="submit" style="width:100%" type="button" class="btn btn-danger" value="Perbaharui Data">
					</div>
					
				</form>
			</div>

		</div>
		
	</div>
</center>
</body>
</html>