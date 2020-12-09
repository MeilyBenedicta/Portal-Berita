<script type="text/javascript">
	function validasi() {
		var isi = document.getElementById("isi").value;
		if (isi != "") {
			return true;
		}else{
			alert('Form tidak boleh kosong!');
			return false;
		}
	}
</script>

<center>
<div class="container" align="left">

<?php

	if(isset($d_saya_user['username']))
	{
echo"

<form method='POST' action='komentar2.php' onSubmit='return validasi()'>

<div class='form-group'>
	<button type='button' class='btn btn-default'>
		<span class='glyphicon glyphicon-user'></span>
		$d_saya_user[nama]
	</button>
</div>

<div class='form-group'>
<textarea name='isi' id='isi' placeholder='Silahkan masukkan kritik dan saran anda!'class='form-control' rows='5'></textarea>
<input type='hidden' name='a' value='$a'/>
</div>

<div class='form-group'>
<input type='submit' class='btn btn-primary' value='Kirim'/>
</div>
<form>

";
	}
	
	if(empty($d_saya_user['username']))
	{
		echo"
		<div class='alert alert-danger'>

		<p class='lead'>Silahkan Login untuk memberi penilaian.</p>
		<br>
		<a href='login.php' class='btn btn-success btn-lg'>Login</a>
		<a href='daftar.php' class='btn btn-primary btn-lg'>Sign Up</a>
		</div>
		";
	}
?>

</div>
<div class="container" align="left" id="tokomentar">

<?php

$cari = "SELECT * FROM komentar WHERE id_artikel='$a' ORDER BY id_komentar DESC";
$dapat = mysqli_query($koneksi,$cari);

$hitung = mysqli_num_rows($dapat);

echo"
<h2 style='color:#DB3030'>
$hitung Penilaian
</h2><br>
";

while($komentar = mysqli_fetch_array($dapat))
{
	
		$cariuser = "SELECT * FROM user WHERE username='$komentar[user]'";
		$hasiluser = mysqli_query($koneksi,$cariuser);
		$user = mysqli_fetch_array($hasiluser);
	
	
	$bb=$komentar['bulan'];
	
	 if($bb == "1")$bbb="Januari";
else if($bb == "2")$bbb="Februari";
else if($bb == "3")$bbb="Maret";
else if($bb == "4")$bbb="April";
else if($bb == "5")$bbb="Mei";
else if($bb == "6")$bbb="Juni";
else if($bb == "7")$bbb="Juli";
else if($bb == "8")$bbb="Agustus";
else if($bb == "9")$bbb="September";
else if($bb == "10")$bbb="Oktober";
else if($bb == "11")$bbb="November";
else if($bb == "12")$bbb="Desember";
else					$bbb="Error";

if($user['tipe']=="admin")
{
echo"
<p id='tgl-komentar'><i>$komentar[tanggal] $bbb $komentar[tahun] $komentar[jam]</i></p>

<div class='btn-group'>
	<button type='button' class='btn btn-danger'>
	<span class='glyphicon glyphicon-user'></span>
	    Admin
	</button>
	<button type='button' class='btn btn-default'>
	$user[nama]
	</button>
</div>

<br><br>

<span class='lead'>$komentar[komentar]</span>
<hr class='garis'>
";
}

if($user['tipe']=="user")
{
echo"
<p id='tgl-komentar'><i>$komentar[tanggal] $bbb $komentar[tahun] $komentar[jam]</i></p>

<button type='button' class='btn btn-default'>
<span class='glyphicon glyphicon-user'></span>
 $user[nama]
</button>
<br><br>

<span class='lead'>$komentar[komentar]</span>
<hr class='garis'>
";
}

}

echo"
</div>
</center>
";
?>