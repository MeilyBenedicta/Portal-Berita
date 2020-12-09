<?php require"header_admin.php";

$a=$_GET['a'];

$i_pilih = "SELECT * FROM ARTIKEL WHERE id_artikel='$a'";
$p_pilih = mysqli_query($koneksi,$i_pilih);
$d_pilih = mysqli_fetch_array($p_pilih);

$adminnya=$d_pilih['penulis'];

$i_adminnya = "SELECT * FROM user WHERE username='$adminnya'";
$p_adminnya = mysqli_query($koneksi,$i_adminnya);
$d_adminnya = mysqli_fetch_array($p_adminnya);


?>


<html>
<head>
</head>
<body>

	<!-- Modal GANTI THUMBNAIL START-->
	<div id="ModalThumbnail" class="modal fade" role="dialog">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Ubah Thumbnail</h4>
				</div>
				<div class="modal-body">

					
					<form method="POST" action="ganti_thumbnail.php?a=<?php echo $a;?>" enctype="multipart/form-data">
						
						<div class="form-group">
							<label>Ubah Thumbnail:</label>
							<div class="well">
								<input type="file" name="fileToUpload" id="fileToUpload">
							</div>
						</div>
						
						<div class="form-group">
							<input type="submit" class="btn btn-primary" value="Upload" name="submit" type="button">
						</div>
						
					</form>
					
					
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	<!-- Modal GANTI THUMBNAIL END-->

	<center>
		<div style="width:75%" align="left">

			<h2 class="jdlatas" align="center">EDIT ARTIKEL</h2>
			<br>

			<form method="POST" action="edit2.php">

				<div class="form-group">
					<label>Penulis:</label>
					<input type="text" class="form-control" value="<?php echo $d_adminnya['nama'];?>" disabled>
					<input type="hidden" name="penulis" value="<?php echo $d_adminnya['username'];?>">
					<input type="hidden" name="a" value="<?php echo $a;?>">
				</div>
				
				<div class="form-group">
					<label>Tanggal / Bulan / Tahun:</label>
					<div class="well">
						<input type="text" name="tanggal" size="3" value="<?php echo $d_pilih['tanggal'];?>">
						<input type="text" name="bulan" size="3" value="<?php echo $d_pilih['bulan'];?>">
						<input type="text" name="tahun" size="5" value="<?php echo $d_pilih['tahun'];?>">
					</div>
				</div>

				<div class="form-group">
					<label>Judul artikel:</label>
					<input type="text" class="form-control" name="judul" value="<?php echo $d_pilih['judul'];?>">
				</div>

				<div class="form-group" id="tothumbnail">
					<label>Thumbnail:</label>
					<div class="well">
						<img src="../<?php echo $d_pilih['thumbnail'];?>" width="200px"/><br><br>
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalThumbnail">
							Ubah Thumbnail
						</button>
						
					</div>
				</div>
				
				<div class="form-group" id="toisi">
					<label>Isi:</label>
					<textarea name="isi" class="form-control" rows="20"><?php echo $d_pilih['isi'];?></textarea>
				</div>

				<div class="form-group">
					<input type="submit" class="btn btn-lg btn-primary" value="Edit artikel" name="submit">
				</div>

			</form>
			
			
			
			
		</div>
	</center>
</body>
</html>