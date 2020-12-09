<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>BeritaBola.com</title>
	<script type="text/javascript">
		function validasi() {
			var isi = document.getElementById("isi").value;
			if (isi != "") {
				return true;
			}else{
				alert('Form tidak boleh kosong!');
				return false;
			}
		}
	</script>
</head>

<?php include "header.php";

if(isset($_SESSION['technonews_username']) & isset($_SESSION['technonews_password']))
{
	
}
else
{
	header("location: index.php");
}

?>

<body>
	<center>
		<div class="container" align="left">

			<h2 class="jdlatas">Edit Profil</h2>
			<br><br>

			<?php

			if($_SERVER["REQUEST_METHOD"] == "POST")
			{
				$err_password="0";
				$err_nama="0";

				$username = $d_saya_user['username'];
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
						$_SESSION['technonews_username'] = $d_saya_user['username'];
						$_SESSION['technonews_password'] = $password;
						echo"
						<meta http-equiv='refresh' content='0,URL=index.php'>
						";
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

				<div align="left">
					<form role="form" method="POST" onSubmit="validasi()">
						
						<div class="form-group">
							<label>Username:</label>
							<input type="text" class="form-control" value="<?php echo $d_saya_user['username'];?>" disabled>
						</div>
						
						<div class="form-group">
							<label>Password:</label>
							<input type="password" name="password" id="password" class="form-control">
						</div>
						
						<div class="form-group">
							<label>Nama:</label>
							<input type="text" name="nama" id="nama" class="form-control" value="<?php echo $d_saya_user['nama'];?>">
						</div>
						
						<div class="form-group">
							<label>Email:</label>
							<input type="text" class="form-control" value="<?php echo $d_saya_user['email'];?>" disabled>
						</div>
						
						<div class="form-group">
							<input type="submit" style="width:100%" type="button" class="btn btn-primary btn-lg" value="Perbaharui Data">
						</div>
						
					</form>
				</div>

			</div>
			
		</div>
		<?php include "footer.php"; ?>
	</center>
</body>
</html>