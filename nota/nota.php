<?php
include("../koneksi.php");

if(isset($_GET['btn_nota'])){
 $nama_pelanggan = mysqli_query
 ($conn, "SELECT pelanggan.nama_perusahaan, nota.no_nota, pelanggan.npwp
 FROM nota
 JOIN pelanggan ON nota.id_pelanggan = pelanggan.id_pelanggan
 WHERE nota.no_nota = '".$_GET['btn_nota']."'");
 $nama_perusahaan = mysqli_fetch_assoc($nama_pelanggan);

 $barang = mysqli_query($conn, "SELECT nama_barang, quantity_barang, harga_barang, total_harga
 FROM nota
 WHERE nota.no_nota = '".$_GET['btn_nota']."'");

$tgl= mysqli_query ($conn, "SELECT DISTINCT tanggal FROM nota WHERE nota.no_nota = '".$_GET['btn_nota']."'");
$tanggal = mysqli_fetch_assoc($tgl);

$isum = mysqli_query($conn, "SELECT SUM(total_harga) AS total_harga
FROM nota
WHERE nota.no_nota = '".$_GET['btn_nota']."'");
$sum = mysqli_fetch_assoc($isum);
$pajak  = $sum['total_harga'] * (11/100);
$uwu = $sum['total_harga']  + $pajak;
}
?>
<?php?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
 <head>
    <meta charset="UTF-8">
    <title> Input Data Pelanggan</title>
    <link rel="stylesheet" href="./stylenota.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
<?php include "../navbar.php" ?>

 <section class="home-section">
 

    <div class="home-content">
      <i class='bx bx-menu' ></i>
      <span class="text">NOTA</span>
        <div class="content-main">
          
        <h1>NOTA PEMBELIAN</h1>
        <form method="get" action="">
        <select name="btn_nota" id="btn_nota" onchange="validateForm()">
                <?php 
                $query = "SELECT DISTINCT no_nota FROM nota";
                $result = mysqli_query($conn, $query);
                /* $list = mysqli_query($conn, "SELECT nama_perusahaan FROM `pelanggan`"); */
                while($pelang = mysqli_fetch_assoc($result))
                {
                ?>
                <option value ="<?php echo $pelang['no_nota'];?>"> 
                <?php echo $pelang['no_nota'];?> </option>
                <?php 
              } 
              ?>
            </select>
            <button type="submit" onclick="validateFormOnClick()">Submit</button>
            <img src="../unicorn.png" alt="kuda" style="height:10%; width:10%;">
            <span>No NOTA : <?php echo $nama_perusahaan['no_nota'];?></span>
            <span>NPWP : <?php echo $nama_perusahaan['npwp'];?></span>
            <span>Sidoarjo, <?php echo $tanggal['tanggal'] ?></span>
        </form>
                 
            <p>Kepada: <?php echo isset($nama_perusahaan['nama_perusahaan']) ? $nama_perusahaan['nama_perusahaan'] : ''?></p>
            <!-- TABLE -->
            <table border="1px" style="width: 100%;">
              <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Qty</th>
                <th>Harga</th>
                <th>Total Harga</th>
              </tr>
              <?php
              $i = 1;
              while (($nota_barang = mysqli_fetch_assoc($barang)) !== null) {
              ?>
              <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $nota_barang["nama_barang"]?></td>
                <td><?php echo $nota_barang["quantity_barang"]?></td>
                <td>Rp. <?php echo $nota_barang["harga_barang"]?></td>
                <td>Rp. <?php echo $nota_barang["total_harga"]?></td>

              </tr>
              <?php
              $i++;
              }?>
              <?php
              $grand_total = mysqli_fetch_assoc($barang)
              ?>
              <tr>
                <td colspan="3"></td>
                <td>Grand Total Harga</td>
                <td>Rp. <?php echo  $sum['total_harga']?></td>
                </tr>
              
                <tr>
                <td colspan="3"></td>
                <td>Pajak</td>
                <td>Rp. <?php echo $pajak?></td>
                </tr>
                
                <tr>
                <td colspan="3"></td>
                <td>Harga Total + Pajak</td>
                <td>Rp. <?php echo  $uwu?></td>
                </tr>
            </table>
            <br>
            <table style="width: 100%; text-align: center;  " > 
                <tr>
                  <td>Tanda Terima</td>
                  <td>Hormat Kami</td>
                </tr>
                <tr style="height: 150px;vertical-align: bottom;">
                  <td >PT. UNICORN</td>
                  <td><?php echo isset($nama_perusahaan['nama_perusahaan']) ? $nama_perusahaan['nama_perusahaan'] : ''?></td>
                </tr>
            </table>
        </div>
    </div>
  
 </section>


 <script src="../script.js">
 </script>
</body>
</html>