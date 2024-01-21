<?php
include ("../../koneksi.php");


if(isset($_GET["id_nota"])){
	$id_nota = $_GET["id_nota"];
	$hasil = mysqli_query(
		$conn, 
		"SELECT * 
		FROM nota
		WHERE id_nota = '$id_nota'"
	);	
	
	$data = mysqli_fetch_assoc($hasil);
}

if(isset($_GET["ubah"])){	
	$id_nota = $_GET["id_nota"];
	$nama_barang = $_GET["nama_barang"];
	$harga_barang = $_GET["harga_barang"];
	$quantity_barang = $_GET["quantity_barang"];
	
	$hasil = mysqli_query(
		$conn,
		"UPDATE nota
		
		SET 
		no_nota = '$no_nota', 
		nama_barangt = '$nama_barang', 
		harga_barang = '$harga_barang'
		quantity	 = '$quantity'
		WHERE id_nota = '$id_nota'"
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
				<input type="hidden" name="id_nota" value="<?php echo $data["id_nota"]?>">
			
				No Nota
				<br>
				<input value="<?php echo $data["no_nota"]?>" type="text" name="no_nota" required>
				<br><br>
				
				Nama Barang
				<br>
				<input value="<?php echo $data["nama_barang"]?>" type="text" name="nama_barang" required>
				<br><br>
				
				Harga Barang
				<br>
				<input value="<?php echo $data["harga_barang"]?>" type="text" name="harga_barang" required>
				<br><br>

				Quantity
				<br>
				<input value="<?php echo $data["quantity_barang"]?>" type="text" name="quantity_barang" required>
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