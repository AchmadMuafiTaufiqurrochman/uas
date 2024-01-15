<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Input Data Pelanggan</title>
    <link rel="stylesheet" href="./style1.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar close">
    <div class="logo-details">
      <img src="unicorn.png" alt="" class="image">
      <span class="logo_name">UNICORN</span>
    </div>
    <ul class="nav-links">
      <li>
        <a href="../datamaster/data_master.php">
          <i class='bx bx-grid-alt' ></i>
          <span class="link_name">Data Master</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="../datamaster/data_master.php">Data Master</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-collection' ></i>
            <span class="link_name">Input Data</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Input Data</a></li>
          <li><a href="./input.php">Input Data Pelanggan</a></li>
          <li><a href="./input_barang.php">Input Data Barang</a></li>
        </ul>
      </li>

      <li>
        <a href="../nota/nota.php">
          <i class='bx bx-pie-chart-alt-2' ></i>
          <span class="link_name">Nota</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="../nota/nota.php">Nota</a></li>
        </ul>
      </li>


      <li>
    <div class="profile-details">
      <div class="profile-content">
      </div>
      <div class="name-job">
        <div class="profile_name">Admin</div>
        <div class="job"></div>
      </div>
      <i class= ></i>
    </div>
  </li>
</ul>
  </div>
 
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
            <input type="submit" name="pelanggan" value="Kirim">
          </form>
        </div>
    </div>
  
  </section>

  <script src="./script.js">
  </script>
</body>
</html>