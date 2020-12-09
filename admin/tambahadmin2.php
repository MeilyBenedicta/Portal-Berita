<?php require"admin_c.php";

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
			('$username','$password','admin','$nama','$email')";
			$hasildaftar = mysqli_query($koneksi,$daftar);
			
			header("location: alladmin.php");
		}

		else
		{
			if(isset($d_cekusername['username']))$err_username="2";
			if(isset($d_cekemail['email']))$err_email="2";
			
			header("location: tambahadmin.php?err_username=$err_username&err_email=$err_email&err_password=$err_password&err_nama=$err_nama#toform");
		}
	}

	else
	{
		header("location: tambahadmin.php?err_username=$err_username&err_password=$err_password&err_nama=$err_nama&err_email=$err_email#toform");
	}
	
}
?>