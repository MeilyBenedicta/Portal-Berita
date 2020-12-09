<?php require"includes/koneksi.php";

if(isset($_GET['a']))
{
	$a = $_GET['a'];
	
	$edit = "SELECT * FROM artikel WHERE id_artikel='$a'";
	$hasil = mysqli_query($koneksi,$edit);
	$data = mysqli_fetch_array($hasil);
	
	if(empty($data['id_artikel']))
	{
		header("location: index.php");
	}
	
}
else
{
	header("location: index.php");
}

$i_penulis = "SELECT * FROM user WHERE username='$data[penulis]'";
$p_penulis = mysqli_query($koneksi,$i_penulis);
$d_penulis = mysqli_fetch_array($p_penulis);

$bulany=$data['bulan'];

if($bulany == "1")$bulanx="Januari";
else if($bulany == "2")$bulanx="Februari";
else if($bulany == "3")$bulanx="Maret";
else if($bulany == "4")$bulanx="April";
else if($bulany == "5")$bulanx="Mei";
else if($bulany == "6")$bulanx="Juni";
else if($bulany == "7")$bulanx="Juli";
else if($bulany == "8")$bulanx="Agustus";
else if($bulany == "9")$bulanx="September";
else if($bulany == "10")$bulanx="Oktober";
else if($bulany == "11")$bulanx="November";
else if($bulany == "12")$bulanx="Desember";
else $bulanx="Error";

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>TechnoNews.com</title>
</head>
<?php include "header.php";?>
<body>





	<center>
		<div class="container" align="left">


			<h2 class='title' style="color:white"> <?php echo"$data[judul]";?></h2>
			<br/>
			<p class='text-muted'><?php echo "$data[tanggal] $bulanx $data[tahun] | $d_penulis[nama]";?></p>
			<br/>
			<?php echo
			"		
			<center>
			<img src='$data[thumbnail]' class='img-responsive' width='40%'/>
			<br/>
			</center>
			";
			?>		
			<span class='lead'>
				<h4 class="isi" style="color:white" align="justify"><?php echo "$data[isi]" ?></h2>
				</span>


				
			</div>
		</center>
		
		
		
		<?php
		include "komentar.php";
		include "footer.php";
		?>
	</body>
	</html>