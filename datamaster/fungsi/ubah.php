<?php
include ("../../koneksi.php");


if(isset($_GET["id_pelanggan"])){
	$id_pelanggan = $_GET["id_pelanggan"];
	$hasil = mysqli_query(
		$conn, 
		"SELECT * 
		FROM pelanggan
		WHERE id_pelanggan = '$id_pelanggan'"
	);	
	
	$data = mysqli_fetch_assoc($hasil);
}

if(isset($_GET["ubah"])){	
	$id_pelanggan = $_GET["id_pelanggan"];
	$nama_perusahaan = $_GET["nama_perusahaan"];
	$alamat = $_GET["alamat"];
	$npwp = $_GET["npwp"];
	
	$hasil = mysqli_query(
		$conn,
		"UPDATE pelanggan
		
		SET nama_perusahaan = '$nama_perusahaan', 
			alamat = '$alamat', 
			npwp = '$npwp'
		
		WHERE id_pelanggan = '$id_pelanggan'"
	);
	
	if($hasil){
	?>
		<script>
		window.location.href = "../data_master.php?berhasil=ubah";
		</script>
	<?php
	
	}
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Input Data Pelanggan</title>
    <link rel="stylesheet" href="stylefungsi.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>

<?php include "navbar.php" ?>

  <section class="home-section">
 

    <div class="home-content">
      <i class='bx bx-menu' ></i>
      <span class="text">NOTA</span>
        <div class="content-main">

        <h1>Data Master - Tambah Pemasok Barang</h1>
			<form method="get" action="">
				<input type="hidden" name="id_pelanggan" value="<?php echo $data["id_pelanggan"]?>">
			
				Nama
				<br>
				<input value="<?php echo $data["nama_perusahaan"]?>" type="text" name="nama_perusahaan" required>
				<br><br>
				
				Alamat
				<br>
				<input value="<?php echo $data["alamat"]?>" type="text" name="alamat" required>
				<br><br>
				
				No Kontak
				<br>
				<input value="<?php echo $data["npwp"]?>" type="text" name="npwp" required>
				<br><br>
				
				<input type="submit" value="Ubah" name="ubah">
			</form>

        </div>
    </div>
  
  </section>

  <script src="../../script.js">
  </script>
</body>
</html>