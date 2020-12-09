<?php require"admin_c.php";

$a = $_GET['a'];

$i_hapus = "DELETE from artikel WHERE id_artikel='$a'";
$p_hapus = mysqli_query($koneksi,$i_hapus);

if($p_hapus)
{
	header("location: index2.php");
}
else
{
	echo"ERROR!!";
}