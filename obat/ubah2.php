<?php 
session_start();
if (!isset($_SESSION["login"])) {
	header("Location:login.php");
	exit;
}
require 'function.php';

//ambil data diurl
$id=$_GET["id"];
$mhs = query("SELECT * FROM obat WHERE id=$id")[0];

if (isset($_POST["submit"])) {


//ambil query


 		
 	if(ubah2($_POST)>0){

	echo "
	<script>
	alert('data berhasil diubah');
	document.location.href='obat.php';
	</script>
		 ";
}else{
	echo "
	<script>
	alert('data gagal diubah');
	document.location.href='obat.php';
	</script>
		 ";
}

}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>tambah data pasien </title>
	<link rel="stylesheet" type="text/css" href="style.css">
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body style="background-color: #FFFFFF;">
	<!-- navbar -->
	<div class="navbar fixed ">
    <nav class="#c2185b pink darken-2">
      <div class="nav-wrapper">
        <a href="#!" class="brand-logo"></a>
        <ul class="right hide-on-med-and-down">
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </div>
    </nav>
  	</div>
 	<!-- end navbar -->
	<div class="container" style="width: 550px; ">

	<form action="" method="post">
		<input type="hidden" name="id" value="<?=$mhs["id"] ?>" >
		<p style="text-align: center;">UBAH DATA PASIEN</p>
		<ul>
			<li>
				<label for="kd_obat">kd_obat :</label>
				<input type="text" name="kd_obat" id="kd_obat" value="<?= $mhs["kd_obat"] ?>">
			</li>
			<li>
				<label for="nm_obat">nm_obat :</label>
				<input type="text" name="nm_obat" id="nm_obat" value="<?= $mhs["nm_obat"] ?>">
			</li>
			<li>
				<label for="jml_obat"> jml_obat :</label>
				<input type="text" name="jml_obat" id="jml_obat" value="<?= $mhs["jml_obat"] ?>">
			</li>
			<li>
				<label for="ukuran">ukuran :</label>
				<input type="text" name="ukuran" id="ukuran" value="<?= $mhs["ukuran"] ?>">
			</li>
			<li>
				<label for="harga">harga :</label>
				<input type="text" name="harga" id="harga" value="<?= $mhs["harga"] ?>">
			</li>
			<li>
				<button type="submit" name="submit" class="#c2185b pink darken-2"> Ubah data !</button>
			</li>
		</ul>

		<a href="obat.php">kembali!!</a>
	</form>
	
</div>
</body>
</html>