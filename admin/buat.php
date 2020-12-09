<?php require"header_admin.php"; ?>


<html>
<head>
</head>
<body>
	<center>
		<div style="width:75%" align="left">

			<h2 class="jdlatas" align="center">TULIS ARTIKEL</h2>
			<br>

			<form method="POST" action="buat2.php" enctype="multipart/form-data">

				<div class="form-group">
					<label>Penulis:</label>
					<input type="text" class="form-control" value="<?php echo $d_saya_admin['nama'];?>" disabled>
					<input type="hidden" name="penulis" value="<?php echo $d_saya_admin['username'];?>">
				</div>
				
				<div class="form-group">
					<label>Tanggal / Bulan / Tahun:</label>
					<div class="well">
						<input type="text" name="tanggal" size="3" value="<?php echo $tanggal;?>">
						<input type="text" name="bulan" size="3" value="<?php echo $bulan;?>">
						<input type="text" name="tahun" size="5" value="<?php echo $tahun;?>">
					</div>
				</div>

				<div class="form-group">
					<label>Judul artikel:</label>
					<input type="text" class="form-control" name="judul">
				</div>

				<div class="form-group">
					<label>Thumbnail:</label>
					<div class="well">
						<input type="file" name="fileToUpload" id="fileToUpload">
					</div>
				</div>
				
				<div class="form-group">
					<label>Isi:</label>
					<textarea name="isi" class="form-control" rows="20"></textarea>
				</div>

				<div class="form-group">
					<input type="submit" class="btn btn-lg btn-success" value="Kirim artikel" name="submit">
					<input type="reset" class="btn btn-lg btn-danger" value="Reset">
				</div>

			</form>
			
			
			
			
		</div>
	</center>
</body>
</html>