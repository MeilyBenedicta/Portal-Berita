<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>TechoNews.com</title>
</head>

<?php include "header.php" ?>

<body background="img/back2.png">
	<center>
		<div class="container" align="left">
			
			<?php

			if(isset($_GET['i']))
			{
				$i = $_GET['i'];
			}
			if(empty($_GET['i']))
			{
				$i = "1";
			}

			$tampilkan = 2;

			$tampilall="SELECT * FROM artikel";
			$dapatall = mysqli_query($koneksi,$tampilall);
			$totalall = mysqli_num_rows($dapatall);
			$pagesall = ceil($totalall / $tampilkan);

			$mulai=($i*$tampilkan)-$tampilkan;

			$tampilindex="SELECT * FROM artikel ORDER BY id_artikel DESC limit $mulai,$tampilkan ";
			$hasilindex=mysqli_query($koneksi,$tampilindex);

			while($dataindex=mysqli_fetch_array($hasilindex)){
				
				$i_penulis = "SELECT * FROM user WHERE username='$dataindex[penulis]'";
				$p_penulis = mysqli_query($koneksi,$i_penulis);
				$d_penulis = mysqli_fetch_array($p_penulis);
				
				$bulany=$dataindex['bulan'];

				$pendek=substr($dataindex['isi'],0,200);
				
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
				else					$bulanx="Error";

				echo"
				<div class='row'>
				
				<div class='col-sm-4' align='center'>
				<img src='$dataindex[thumbnail]' class='img-responsive' style='width:70%'/>
				</td>
				</div>
				
				<div class='col-sm-8'>
				<h2 class='title'><a id='index-judul' href='baca.php?a=$dataindex[id_artikel]'>$dataindex[judul]</a></h2><br>
				<p class='text-muted'>$dataindex[tanggal] $bulanx $dataindex[tahun] | $d_penulis[nama]</p>
				<br><span id='index-singkat' class='lead'>$pendek...</span><br><br>
				</div>

				</div>
				<br>
				<hr>
				<br>
				";}
				?>

				<?php
				echo "</br>";
				echo "<center>";
				for($a=1;$a<=$pagesall;$a++){
					echo "<a href=?i=".$a.">";?>
					<button type="submit" class="btn btn-info"><?php echo "$a"; ?></button>
					<?php
					echo"</a>";
				}
				echo "</center>";
				?>
			</div>




			<?php include "footer.php"; ?>
		</center>
	</body>
	</html>