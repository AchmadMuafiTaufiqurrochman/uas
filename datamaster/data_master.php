<?php
include("../koneksi.php");
$hasil = mysqli_query(
  $conn, 
  "SELECT * 
  FROM pelanggan
  ORDER BY nama_perusahaan"
);
?>

<?php
include("../koneksi.php");
$hasil2 = mysqli_query(
  $conn, 
  "SELECT * 
  FROM nota"
);
if(isset($_GET["berhasil"])){

	if($_GET["berhasil"] == "ubah"){
	?>
		<script>
		alert("Berhasil ubah data.");
		</script>
	<?php
	}else if($_GET["berhasil"] == "hapus"){
	?>
		<script>
		alert("Berhasil hapus data.");
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
    <link rel="stylesheet" href="./styledatamaster.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
<?php include "../navbar.php" ?>

  <section class="home-section">
 

    <div class="home-content">
      <i class='bx bx-menu' ></i>
      <span class="text">Data Master</span>
      <div class="content-main">
      <h1>Data Pelanggan</h1>
      <br>
      
      <table border="1px" style="width:100%;">
        <tr>
        <th>Nama Perusahaan</th>
        <th>Alamat</th>
        <th>NPWP</th>
        <th>Action</th>
        </tr>
        <?php
				while($data = mysqli_fetch_assoc($hasil)){
				?>
        <tr>
          <td><?php echo $data["nama_perusahaan"] ?></td>
          <td><?php echo $data["alamat"] ?></td>
          <td><?php echo $data["npwp"] ?></td>
          <td style="width: 100px;">
          <a  href="fungsi/ubah.php?id_pelanggan= <?php echo $data["id_pelanggan"] ?>"> <button>Ubah</button></a>
          <a  href="fungsi/hapus.php?id_pelanggan= <?php echo $data["id_pelanggan"] ?>"> <button>Hapus</button></a>
          </td>
        </tr>
        <?php }?>
      </table>
      <br>
      <h1>Data Nota</h1>
      <br> <break>
      
      <table border="1px" style="width:100%;">
        <tr>
        <th>No Nota</th>
        <th>Nama Barang</th>
        <th>Harga Barang</th>
        <th>Quantity</th>
        <th>Total Harga</th>
        <th>Id_Pelanggan</th>
        <th>Action</th>
        </tr>
        <?php
				while($data2 = mysqli_fetch_assoc($hasil2)){
				?>
        <tr>
          <td><?php echo $data2["no_nota"] ?></td>
          <td><?php echo $data2["nama_barang"] ?></td>
          <td><?php echo $data2["harga_barang"] ?></td>
          <td><?php echo $data2["quantity_barang"] ?></td>
          <td><?php echo $data2["total_harga"] ?></td>
          <td><?php echo $data2["id_pelanggan"] ?></td>

          <td style="width: 100px;">
          <a  href="fungsi/ubah_barang.php?id_nota= <?php echo $data2["id_nota"]?>"> <button>Ubah</button></a>
          <a  href="fungsi/hapus_barang.php?id_nota= <?php echo $data2["id_nota"]?> "> <button>Hapus</button></a>
          </td>
        </tr>
        <?php }?>
      </table>
      </div>
    </div>
  
  </section>

  <script src="../script.js">
  </script>
</body>
</html>