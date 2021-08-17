<?php
session_start();
require 'functions.php';

wajib_login("login.php");
$username_peserta = $_SESSION["login_peserta"];
$students = query("SELECT * FROM fasil");

// tombol cari ditekan
if(isset($_POST["cari"])){
  $students = cari_fasil("fasil", $_POST["kata_kunci"]);
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css" />

    <!-- font -->
    <script src="https://kit.fontawesome.com/b249d00227.js" crossorigin="anonymous"></script>

    <!-- icon -->
    <link rel="shortcut icon" href="img/logo-favicon.ico" />

    <title>Orasi Fisip Unpad</title>
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand d-flex align-items-center" href="index.php" style="font-weight: 490;"> <img src="img/Logo w text.svg" alt="logo" width="auto" height="40" class="d-inline-block align-text-top" style="box-sizing: border-box" /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ms-auto">
            <a class="nav-link" href="panitia.php">Panitia</a>
            <a class="nav-link hide-link" href="penugasan.php">Penugasan</a>
            <a class="nav-link hide-link" href="absensi.php">Absensi</a>
            <a class="nav-link hide-link" href="kelompok.php">Info Kelompok</a>
            <?php if(!isset($_SESSION["login_peserta"])) : ?>
            <a class="nav-link" href="login.php">Login</a>
            <?php endif; ?> 
            <a class="nav-link hide-link" href="logout.php">Logout</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- akhir navbar -->
    
    <!-- tabel -->
    <div class="container-fluid absensi-bg">
      <div class="container">
        <div class="row">
          <div class="col-6 col-sm-4 col-lg-3 ms-auto">
          <form action="" method="post">  
            <div class="input-group search-form mt-4 mb-2">
              <span class="input-group-text" id="basic-addon1"><button class="fas fa-search" name="cari" type="submit"></button></span>
              <input type="text" class="form-control" placeholder="Kata Kunci" aria-label="Username" aria-describedby="basic-addon1" name="kata_kunci"/>
            </div>
          </form>  
          </div>
        </div>

        <div class="row table-responsive">
          <table class="table align-middle">
            <thead>
              <tr>
                <th scope="col">Kelompok</th>
                <th scope="col">Nama Fasilitator</th>
                <th scope="col">ID Line</th>
              </tr>
            </thead>
            <tbody>
            <?php  foreach($students as $student): ?> 
              <tr>
                <td><?= $student["kelompok"]; ?></td>
                <th scope="row"><?= $student["nama_fasil"]; ?></th>
                <td><?= $student["id_line"]; ?></td>
              </tr>
              <?php  endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <!-- akhir tabel -->

    <!-- footer -->
    <footer class="text-center">
      <div class="container d-flex flex-column justify-content-center" style="height: 100%">
        <h5>FOLLOW US</h5>
        <div class="icons mx-auto d-flex flex-inline justify-content-evenly">
          <a href="https://www.instagram.com/orasifisipunpad/" target="_blank"><i class="fab fa-instagram-square"></i></a>
          <a href="https://www.youtube.com/channel/UCLWHFRaXNr6vfhH4Vcv1-Ag" target="_blank"><i class="fab fa-youtube"></i></a>
          <a
            href="https://www.tiktok.com/@orasifisipunpad?_d=secCgYIASAHKAESMgowtyQGGQP9yZ78h3F3eXTgfDe8sblt1Y03gtrbl%2B41vM6BOgkeHkgqz9OIC8iqxuv5GgA%3D&_r=1&language=en&sec_uid=MS4wLjABAAAAA_uGvM5g4f-SuuU2ofa1p1VZyXHruGof2UAU2ZUdLAZ-NDtw7HEoMMHZSF_lQGhN&sec_user_id=MS4wLjABAAAA5YClM9o1RGdfIMV15LwZOxpFdgC2kzo577i-fwu4iasuwPi-95WcGCs1-J6UY_I4&share_app_id=1180&share_author_id=6959479209220539394&share_link_id=5EEFDBAE-D1C0-4180-9E06-DBE87FE8B51B&source=h5_t&tt_from=copy&u_code=ddf6lg6jc9g08l&user_id=6851942628729570305&utm_campaign=client_share&utm_medium=ios&utm_source=copy"
            target="_blank"
            ><i class="fab fa-tiktok"></i
          ></a>
          <a href="https://open.spotify.com/user/yixdyb7cijndootfs7k72ncfm?si=ebaa1feb71fa4a7f&nd=1" target="_blank"><i class="fab fa-spotify"></i></a>
        </div>
        <p class="mt-3">©2021. Orasi FISIP Unpad. All Rights Reserved.</p>
      </div>
    </footer>

    <script src="js/script.js"></script>
    <script>
      btntoggle();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
    <script>navbarcollapse();</script>
  </body>
</html>
