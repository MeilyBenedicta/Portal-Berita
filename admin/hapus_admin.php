<?php require"admin_c.php";

$u = $_GET['u'];

$i_hapus = "DELETE from user WHERE username='$u'";
$p_hapus = mysqli_query($koneksi,$i_hapus);

if($p_hapus)
{
	header("location: alladmin.php");
}
else
{
	echo"ERROR!!";
}