<?php
include("../koneksi.php");
if (isset ($_GET ["nota"])){
$nama_barang = $_GET ["nama_barang"];
$harga_barang = $_GET["harga_barang"];
$quantity_barang = $_GET["quantity_barang"];
$pajak_barang = $_GET["harga_barang"];

$result = mysqli_query(
$conn, "INSERT INTO pelanggan (nama_perusahaan, alamat, npwp)
VALUE ('$nama_perusahaan', '$alamat', '$npwp')"
);
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Input Data Pelanggan</title>
    <link rel="stylesheet" href="./style2.css">
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
          <form action="" class="form-content">
            <label for="">No Nota</label>
                <input type="text" id="no_nota" name="no_nota" placeholder="">
            <label for="">Customer</label>
            <select>
                <option value="option1">Option 1</option>
                <option value="option2">Option 2</option>
                <option value="option3">Option 3</option>
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