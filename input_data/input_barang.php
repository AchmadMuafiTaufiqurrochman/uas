<?php
include("../koneksi.php");
if (isset ($_GET ["nota"])){
$no_nota = $_GET ["no_nota"];
$nama_barang = $_GET ["nama_barang"];
$harga_barang = $_GET["harga_barang"];
$quantity_barang = $_GET["quantity_barang"];
$pajak_barang = $harga_barang * (11/100);
$nama_perusahaan = $_GET["nama_perusahaan"];
$total_harga = $harga_barang * $quantity_barang;
$result = mysqli_query(
$conn, "INSERT INTO nota (no_nota, nama_barang, harga_barang, quantity_barang, pajak_barang, id_pelanggan, total_harga)
VALUE ('$no_nota', '$nama_barang', '$harga_barang', '$quantity_barang', '$pajak_barang','$nama_perusahaan', '$total_harga')"
);
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Input Data Pelanggan</title>
    <link rel="stylesheet" href="./stylebarang.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>

<body>
<!-- ini navbar -->
<?php include "../navbar.php" ?>

  <section class="home-section">
 

    <div class="home-content">
      <i class='bx bx-menu' ></i>
      <span class="text">Input Data Barang</span>
      <div class="content-main">
      <h1 class="judul">Masukkan Data Barang </h1>
          <form action="" class="form-content" method="GET">
            <label for="">No Nota</label>
                <input type="text" id="no_nota" name="no_nota" placeholder="">
            <label for="">Customer</label>
            <select name="nama_perusahaan">
                <?php 
                include("../koneksi.php");
                $query = "SELECT nama_perusahaan AS perusahaan,
                id_pelanggan AS idpel FROM pelanggan";
                $result = mysqli_query($conn, $query);
                /* $list = mysqli_query($conn, "SELECT nama_perusahaan FROM `pelanggan`"); */
                while($pelang = mysqli_fetch_assoc($result))
                {
                ?>
                <option value ="<?php echo $pelang['idpel'];?>"> 
                <?php echo $pelang['perusahaan'];?> </option>
                <?php 
              } 
              ?>

                
            </select>
            <label for="">Nama Barang</label>
                <input type="text" id="nama_barang" name="nama_barang" placeholder="">
            <label for="">Harga Barang</label>
                <input type="text" id="harga_barang" name="harga_barang" placeholder="">
            <label for="">Quantity Barang</label>
                <input type="text" id="quantity_barang" name="quantity_barang" placeholder="">
            <input type="submit" name="nota" value="Kirim">
          </form>
        </div>
    </div>
  <script src="../script.js"> </script>
  </section>
</body>
</html>