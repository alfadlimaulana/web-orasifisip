<?php
session_start();
require 'functions.php';

if(!isset($_SESSION["login_panitia"])){

  echo "<script>
            alert('Login Terlebih Dahulu!');
            document.location.href = 'login-catatan-hati.php';
        </script>";
  exit;
} else{
  $username_panitia = $_SESSION["login_panitia"];
  $student = query("SELECT nama_panitia FROM panitia WHERE username_panitia = '$username_panitia'")[0];
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
    <?php style_orasi(); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- font -->
    <script src="https://kit.fontawesome.com/b249d00227.js" crossorigin="anonymous"></script>

    <!-- icon -->
    <link rel="shortcut icon" href="img/logo-favicon-panitia.ico" />

    <title>Admin - Orasi Fisip Unpad</title>
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand position-absolute top-50 start-50 translate-middle" href="dashboard.php"> <img src="img/Logo w text.svg" alt="logo" width="auto" height="40" class="d-inline-block align-text-top" style="box-sizing: border-box" /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ms-auto">
            <a class="nav-link" href="dashboard-settings.php">Settings</a>
            <a class="nav-link" href="logout.php">Logout</a>
          </div>
      </div>
    </nav>
    <!-- akhir navbar -->
    
    <!-- table -->
    <div class="container-fluid bg-admin index-panitia text-center pt-5">
      <h1>Selamat datang, <?= $student["nama_panitia"] ?> </h1>
      <p>Apa yang ingin anda lakukan?</p>
      <div class="row justify-content-center">
        <div class="col-sm-8 mt-3 animate__animated animate__fadeInUp">
          <div class="row">
            <div class="col-sm-12 kolom-direct col-lg-6 text-center p-4">  
              <a href="dashboard-penugasan.php" style="text-decoration: none; color:black;">
                <img class="float-start" src="img/icon/tugas-icon.svg" alt="penugasan" height="100%">
                <div class="d-flex flex-column justify-content-center p-3" style="height: 100%;">
                  <h5>Penugasan</h5>
                  <p class="m-0">Anda dapat melihat tugas dan nilai setiap peserta disini</p>
                </div>
              </a>        
            </div>
            <div class="col-sm-12 kolom-direct col-lg-6 text-center p-4"> 
              <a href="dashboard-absensi.php" style="text-decoration: none; color:black;">
                <img class="float-start" src="img/icon/absensi-icon.svg" alt="penugasan" height="100%">
                <div class="d-flex flex-column justify-content-center p-3" style="height: 100%;">
                  <h5>Absensi</h5>
                  <p class="m-0">Anda dapat melihat kehadiran dan biodata setiap peserta disini</p>
                </div>
              </a>         
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- akhir table -->

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
    <!-- akhir footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
