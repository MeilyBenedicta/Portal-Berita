<?php require"includes/koneksi.php";

date_default_timezone_set("Asia/Jakarta");
$tanggal1= mktime(date("m"),date("d"),date("Y"));
$tanggal2= date("d-M-Y", $tanggal1);
$jam=date("H:i");

$tanggal = date("d", $tanggal1);
$bulan = date("m", $tanggal1);
$tahun = date("Y", $tanggal1);

session_start();

if(isset($_SESSION['technonews_username']) & isset($_SESSION['technonews_password']))
{
	$i_cek = "SELECT * FROM user WHERE username='$_SESSION[technonews_username]' AND password='$_SESSION[technonews_password]'";
	$p_cek = mysqli_query($koneksi,$i_cek);
	$d_cek = mysqli_fetch_array($p_cek);
	
	if(empty($d_cek['username']))
	{
		if(session_destroy());
	}
	else
	{
		$i_saya_user = "SELECT * FROM user WHERE username='$_SESSION[technonews_username]' AND password='$_SESSION[technonews_password]'";
		$p_saya_user = mysqli_query($koneksi,$i_saya_user);
		$d_saya_user = mysqli_fetch_array($p_saya_user);
	}
}


$_SESSION['prorakyat_back_user'] = $_SERVER['REQUEST_URI'];
?>

<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	
</head>

<body>
	
	<!-- START NAVBAR 1 --><div class="navbar">
		<div class="container-fluid">
			
			<div class="navbar-header">
				
				<div class="navbar-default">
					<button class="navbar-toggle" type="button" data-target=".navbar-collapse1" data-toggle="collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				
				<a class="navbar-brand" href="index.php"><b style="color:red">TechnoNews.com</b></a>

				
			</div>
			
			<div class="collapse navbar-collapse navbar-collapse1">
				    
				    
				
				
				<ul class="nav navbar-nav navbar-right">
				
					<?php
					if(isset($d_saya_user['username']))
					{
						if($d_saya_user['tipe']=="admin")
						{	
							echo"
							<li>
							<a href='#' data-toggle='modal' data-target='#ModalUser'>
							
							<strong>[Admin]</strong> 
							$d_saya_user[nama]
							</a>
							</li>
							";
						}
						
						if($d_saya_user['tipe']=="user")
						{
							echo"
							<li>
							<a href='#' data-toggle='modal' data-target='#ModalUser'>
							<span class='glyphicon glyphicon-user'></span>
							$d_saya_user[nama]
							</a>
							</li>
							";
						}
						
					}
					
					if(empty($d_saya_user['username']))
					{
						echo"
						<li><a href='login.php'><span class='glyphicon glyphicon-log-in'></span> Login</a></li>
						<li><a href='daftar.php'><span class='glyphicon glyphicon-user'></span> Sign Up</a></li>
						";
					}
					?>
					
				</ul>
			</div>
			
		</div>
	</div>
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
						<div class="well"><?php echo $d_saya_user['username'];?></div>
					</div>
					<div class="form-group">
						<label>Nama:</label>
						<div class="well"><?php echo $d_saya_user['nama'];?></div>
					</div>
					<div class="form-group">
						<label>Email:</label>
						<div class="well"><?php echo $d_saya_user['email'];?></div>
					</div>
					
					<div class="form-group" align="center">
						<a style="width:100%" class='btn btn-default'  href='edit.php'>Edit data</a>
						<br><br>
						<a style="width:100%" class="btn btn-danger" href="keluar.php">Keluar</a>
					</div>
					
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	<div align="center" id="lataratas">
		<a href="index.php">
			<img src="img/back.jpg" style="width: 30%"/>
		</a>
		
	</div>
</body>
</html>