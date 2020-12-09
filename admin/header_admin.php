<?php require"admin_c.php";

date_default_timezone_set("Asia/Jakarta");
$tanggal1= mktime(date("m"),date("d"),date("Y"));
$tanggal2= date("d-M-Y", $tanggal1);
$jam=date("H:i");

$tanggal = date("d", $tanggal1);
$bulan = date("m", $tanggal1);
$tahun = date("Y", $tanggal1);
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
	
	<script type="text/javascript">
		function validasi2() {
			var password = document.getElementById("password").value;
			var nama = document.getElementById("nama").value;
			if (password!="" && nama!="") {
				return true;
			}else{
				alert('Semua form harus diisi!');
				return false;
			}
		}
	</script>
	
</head>

<body>
	
	<nav class="navbar" style="background-color:black;color:white">
		<div class="container-fluid">
			<h1>Welcome Back!!</h1><br>
			<button type="button" class="btn btn-default" data-toggle="modal" data-target="#ModalUser">
				<span class='glyphicon glyphicon-user'></span> <?php echo $d_saya_admin['nama'];?>
			</button>
			<a class="btn btn-danger" href="admin_logout.php" style="color:black">
				<span class='glyphicon glyphicon-log-out'></span> LogOut
			</a>
			<br><br>
		</div>
	</nav>
	
	
	<br>
	<div class="well" align="center">
		<a class="btn btn-lg btn-primary" href="index2.php">Daftar Artikel</a>
		<a class="btn btn-lg btn-primary" href="buat.php">Tulis Artikel</a>
		<a class="btn btn-lg btn-primary" href="alladmin.php">Daftar Admin</a>
		<a class="btn btn-lg btn-primary" href="alluser.php">Daftar User</a>
	</div>
	<br>
	
	
	
	<!-- Modal USER START-->
	<div id="ModalUser" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Profil</h4>
				</div>
				<div class="modal-body">
					
					<div class="form-group">
						<label>Username:</label>
						<div class="well"><?php echo $d_saya_admin['username'];?></div>
					</div>
					
					<div class="form-group">
						<label>Nama:</label>
						<div class="well"><?php echo $d_saya_admin['nama'];?></div>
					</div>
					
					<div class="form-group">
						<label>Email:</label>
						<div class="well"><?php echo $d_saya_admin['email'];?></div>
					</div>
					
					<div class="form-group" align="center">
						<button style="width:100%" type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalEdit" data-dismiss="modal">
						Edit data</button>
					</div>
					
					
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	<!-- Modal USER END-->
	<!-- Modal EDIT START-->
	<div id="ModalEdit" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Edit Data Admin</h4>
				</div>
				<div class="modal-body">

					
					<form method="POST" action="admin_edit.php" onSubmit="return validasi2()">
						
						<div class="form-group">
							<label>Username:</label>
							<input type="text" class="form-control" value="<?php echo $d_saya_admin['username'];?>" disabled>
						</div>
						
						<div class="form-group">
							<label>Password:</label>
							<input type="password" name="password" id="password" class="form-control">
						</div>
						
						<div class="form-group">
							<label>Nama:</label>
							<input type="text" name="nama" id="nama" class="form-control" value="<?php echo $d_saya_admin['nama'];?>">
						</div>
						
						<div class="form-group">
							<label>Email:</label>
							<input type="text" class="form-control" value="<?php echo $d_saya_admin['email'];?>" disabled>
						</div>
						
						<input type="submit" style="width:100%" type="button" class="btn btn-primary" value="Perbaharui Data">
						
					</form>
					
					
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	<!-- Modal EDIT END-->
	

</body>
</html>