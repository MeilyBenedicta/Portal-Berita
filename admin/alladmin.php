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
			<h2 class="jdlatas" align="center">DAFTAR ADMIN</h2><br><br>


			<a class="btn btn-lg btn-success" href="tambahadmin.php">Tambah Admin</a>
			<br><br>

			<?php

			$i_alladmin = "SELECT * FROM user WHERE tipe='admin'";
			$p_alladmin = mysqli_query($koneksi,$i_alladmin);

			while($d_alladmin = mysqli_fetch_array($p_alladmin)){

				echo"

				<center>
				<div class='well' align='left'>
				
				<div class='form-group'>
				<label>Username:</label>
				<div class='wellx'>
				$d_alladmin[username]
				</div>
				</div>
				
				<div class='form-group'>
				<label>Nama:</label>
				<div class='wellx'>
				$d_alladmin[nama]
				</div>
				</div>
				
				<div class='form-group'>
				<label>Email:</label>
				<div class='wellx'>
				$d_alladmin[email]
				</div>
				</div>
				
				<div class='form-group'>
				<button type='button' class='btn btn-danger' data-toggle='modal' data-target='#ModalHapus$d_alladmin[id_user]'>
				HAPUS ADMIN
				</button>
				</div>
				
				</div>
				</center>
				
				";

				?>

				<!-- Modal HAPUS ADMIN START-->
				<div id="ModalHapus<?php echo $d_alladmin['id_user'];?>" class="modal fade" role="dialog">
					<div class="modal-dialog modal-sm">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">Hapus admin?</h4>
							</div>
							<div class="modal-body">

								<?php echo"
								<a class='btn btn-danger' href='hapus_admin.php?u=$d_alladmin[username]' style='width:100%'>
								HAPUS
								</a>
								";?>
								<br><br>
								<button type="button" class="btn btn-default" data-dismiss="modal" style="width:100%">BATAL</button>
								
							</div>
						</div>
					</div>
				</div>
				<!-- Modal HAPUS ADMIN END-->

			<?php }?>


		</div>
		
		

	</div>
</center>
</body>
</html>