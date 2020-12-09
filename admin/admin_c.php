<?php require"../includes/koneksi.php";

session_start();

$_SESSION['prorakyat_back_admin'] = $_SERVER['REQUEST_URI'];

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

if($cek==0)
{
	header("location: admin_logout.php");
}

else
{
	$i_saya_admin = "SELECT * FROM user WHERE username='$_SESSION[prorakyat_admin_username]' AND password='$_SESSION[prorakyat_admin_password]' AND tipe='admin'";
	$p_saya_admin = mysqli_query($koneksi,$i_saya_admin);
	$d_saya_admin = mysqli_fetch_array($p_saya_admin);
}
?>