<?php
include("../koneksi.php");
if (isset ($_GET ["pelanggan"])){
$nama_perusahaan = $_GET ["nama_perusahaan"];
$alamat = $_GET["alamat"];
$npwp = $_GET["npwp"];

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
    <link rel="stylesheet" href="./stylepelanggan.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>

<body>

<!-- ini navbar -->
  <?php include "../navbar.php" ?>
  <section class="home-section">
 

    <div class="home-content">
      <i class='bx bx-menu' ></i>
      <span class="text">Input Data Pelanggan</span>
      <div class="content-main">
      <h1 class="judul">Masukkan Data Pelanggan</h1>
          <form action="" name="" class="form-content">
            <label for="">Nama Perusahaan</label>
            <input type="text" id="nama_perusahaan" name="nama_perusahaan" placeholder="">
            <label for="">Alamat</label>
            <input type="text" id="alamat" name="alamat" placeholder="">
            <label for="">NPWP</label>
            <input type="text" id="npwp" name="npwp" placeholder="">
            <input type="submit" name="pelanggan" value="Kirim" action="GET">
          </form>
        </div>
    </div>
  
  </section>

  <script src="../script.js"> </script>
</body>
</html>