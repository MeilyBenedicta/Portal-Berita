<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>TechnoNews.com</title>
</head>

<?php include "header_admin.php" ?>

<body>
	<center>
		<div style="width:75%" align="left">
			<h2 class="jdlatas" align="center">Daftar Artikel</h2><br><br>

			<br>

			<?php

			$tampilindex="SELECT * FROM artikel ORDER BY id_artikel DESC";
			$hasilindex=mysqli_query($koneksi,$tampilindex);

			$mehitung=mysqli_num_rows($hasilindex);

			while($dataindex=mysqli_fetch_array($hasilindex)){
				
				$i_penulis = "SELECT * FROM user WHERE username='$dataindex[penulis]'";
				$p_penulis = mysqli_query($koneksi,$i_penulis);
				$d_penulis = mysqli_fetch_array($p_penulis);
				
				$bulany=$dataindex['bulan'];

				$pendek=substr($dataindex['isi'],0,200);
				
				if($bulany == "1")$bulanx="Januari";
				else	if($bulany == "2")$bulanx="Februari";
				else	if($bulany == "3")$bulanx="Maret";
				else	if($bulany == "4")$bulanx="April";
				else	if($bulany == "5")$bulanx="Mei";
				else	if($bulany == "6")$bulanx="Juni";
				else	if($bulany == "7")$bulanx="Juli";
				else	if($bulany == "8")$bulanx="Agustus";
				else	if($bulany == "9")$bulanx="September";
				else	if($bulany == "10")$bulanx="Oktober";
				else	if($bulany == "11")$bulanx="November";
				else	if($bulany == "12")$bulanx="Desember";
				else					   $bulanx="Error";

				echo"

				<center>
				<div class='well'>
				<table width='100%'><tr>
				<td align='left'>
				<a class='btn btn-info'>$mehitung</a>
				</td><td align='right'>
				<a class='btn btn-primary' href='edit_artikel.php?a=$dataindex[id_artikel]'>
				EDIT
				</a>
				<button type='button' class='btn btn-danger' data-toggle='modal' data-target='#ModalHapus$dataindex[id_artikel]'>
				HAPUS
				</button>
				</td></tr></table>
				<br>
				<table><tr>

				<td width='20%'>
				<img src='../$dataindex[thumbnail]' width='75%'/>
				</td>
				
				<td valign='top'>
				<h2>$dataindex[judul]</h2>
				<p id='index-singkat'>$pendek...</p>
				<p id='index-penulis'>$dataindex[tanggal] $bulanx $dataindex[tahun] | $d_penulis[nama]</p>
				</td>

				</tr></table>
				</div>
				</center>
				
				";

				$mehitung--;

				?>

				<!-- Modal HAPUS ARTIKEL START-->
				<div id="ModalHapus<?php echo $dataindex['id_artikel'];?>" class="modal fade" role="dialog">
					<div class="modal-dialog modal-sm">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">Hapus artikel?</h4>
							</div>
							<div class="modal-body">

								<?php echo"
								<a class='btn btn-danger' href='hapus.php?a=$dataindex[id_artikel]' style='width:100%'>
								HAPUS
								</a>
								";?>
								<br><br>
								<button type="button" class="btn btn-default" data-dismiss="modal" style="width:100%">BATAL</button>
								
							</div>
						</div>
					</div>
				</div>
				<!-- Modal HAPUS ARTIKEL END-->

			<?php }?>


		</div>
		
		

	</div>
</center>
</body>
</html>