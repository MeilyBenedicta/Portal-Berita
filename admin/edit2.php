<?php require"admin_c.php";
if($_SERVER["REQUEST_METHOD"] == "POST")
{

	$a = $_POST['a'];

	$tanggal = $_POST['tanggal'];
	$bulan = $_POST['bulan'];
	$tahun = $_POST['tahun'];

	$judul = $_POST['judul'];
	$isi = $_POST['isi'];

	$update= "UPDATE artikel set tanggal='$tanggal', bulan='$bulan', tahun='$tahun', judul='$judul', isi='$isi' WHERE id_artikel='$a'";
	$hasil = mysqli_query($koneksi,$update);

	if($hasil){ 
		header("location: edit_artikel.php?a=$a#toisi");
	}
	else{
		echo "ERROR";
	}

}
?>