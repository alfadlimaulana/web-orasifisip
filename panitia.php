<?php
session_start();
require 'functions.php';

//cek session
if(!isset($_SESSION["login_peserta"])){
  echo "<script>
          window.onload = function(){
          hideNav()};
        </script>";
}else{
  echo "<script>
          window.onload = function(){
          showNav()};
        </script>";
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

    <title>Orasi Fisip Unpad</title>
  </head>
  <body style="background-color: white">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand d-flex align-items-center" href="index.php" style="font-weight: 490;"> <img src="img/Logo.svg" alt="logo" width="auto" height="40" class="d-inline-block align-text-top" style="box-sizing: border-box" />ORASI FISIP UNPAD</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ms-auto">
            <a class="nav-link" href="#gallery">Gallery</a>
            <a class="nav-link" href="panitia.php">Panitia Inti</a>
            <a class="nav-link hide-link" href="penugasan.php">Penugasan</a>
            <a class="nav-link hide-link" href="absensi.php">Absensi</a>
            <a class="nav-link hide-link" href="kelompok.html">Kelompok</a>
            <a class="nav-link" href="login.php">Login</a>
            <a class="nav-link hide-link" href="logout.php">Logout</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- akhir navbar -->

    <!-- grid panitia -->
    <div class="container-fluid panitia-bg">
      <div class="container pt-3">
        <div class="row justify-content-center">
          <div class="col text-center">
            <h2>PANITIA INTI</h2>
          </div>
        </div>
        <div class="row g-5 mt-2">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 text-center align-self-center">
            <h5>About Us</h5>
            <h2>We scratch, build and play together</h2>
            <p>Et has minim elitr intellegat. Mea aeterno eleifend antiopam ad, nam no suscipit quaerendum. At nam minimum ponderum. Est audiam animal molestiae te. Ex duo eripuit mentitum.</p>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 order-lg-first text-center align-self-center">
            <h5>Posisi</h5>
            <img class="img-fluid rounded-circle" src="img/b9dc143762700bee689092a1c96edc98.jpg" alt="" width="70%" />
            <p>Nama</p>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 text-center align-self-center">
            <h5>Posisi</h5>
            <img class="img-fluid rounded-circle" src="img/b9dc143762700bee689092a1c96edc98.jpg" alt="" width="70%" />
            <p>Nama</p>
          </div>
        </div>
        <div class="row g-2 mt-3 text-center justify-content-center">
          <h3>Kabid</h3>
          <div class="col-sm-6 col-md-4">
            <img class="img-fluid rounded-circle" src="img/b9dc143762700bee689092a1c96edc98.jpg" alt="" width="70%" />
            <p>Nama</p>
          </div>
          <div class="col-sm-6 col-md-4">
            <img class="img-fluid rounded-circle" src="img/b9dc143762700bee689092a1c96edc98.jpg" alt="" width="70%" />
            <p>Nama</p>
          </div>
          <div class="col-sm-6 col-md-4">
            <img class="img-fluid rounded-circle" src="img/b9dc143762700bee689092a1c96edc98.jpg" alt="" width="70%" />
            <p>Nama</p>
          </div>
        </div>

        <div class="row mt-3 g-5">
          <div class="col-sm-12 col-md-6">
            <div class="row text-center g-0">
              <h3>Acara</h3>
              <div class="col">
                <img class="img-fluid rounded-circle" src="img/Panitia/2-Kadiv-Kanaya Avitadira.svg" alt="" />
                <p><strong>Kanaya Avitadira</strong><br />Kadiv Acara</p>
              </div>
              <div class="col">
                <img class="img-fluid rounded-circle" src="img/Panitia/2-Wakadiv-Alya Namira.svg" alt="" />
                <p><strong>Alya Namira</strong><br />Wakadiv Acara</p>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-6">
            <div class="row text-center g-0">
              <h3>Humas</h3>
              <div class="col">
                <img class="img-fluid rounded-circle" src="img/Panitia/6-Kadiv-Annisa-Rahmadhani-Angesti 1.svg" alt="" />
                <p><strong>Annisa Rahmadhani Angesti</strong><br />Kadiv Humas</p>
              </div>
              <div class="col">
                <img class="img-fluid rounded-circle" src="img/Panitia/6-Wakadiv-Karina-Imelia-Irfani 1.svg" alt="" />
                <p><strong>Karina Imelia Irfani</strong><br />Wakadiv Humas</p>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-6">
            <div class="row text-center g-0">
              <h3>Fasilitator</h3>
              <div class="col">
                <img class="img-fluid rounded-circle" src="img/Panitia/5-Kadiv-Dina-Larasinta 1.png" alt="" />
                <p><strong>Dina Larasinta</strong><br />Kadiv Fasil</p>
              </div>
              <div class="col">
                <img class="img-fluid rounded-circle" src="img/Panitia/5-Wakadiv-Rifqo-Kavin-Viali 1.png" alt="" />
                <p><strong>Rifqo Kavin Viali</strong><br />Wakadiv Fasil</p>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-6">
            <div class="row text-center g-0">
              <h3>Materi</h3>
              <div class="col">
                <img class="img-fluid rounded-circle" src="img/Panitia/3-Kadiv-Annisa-Nur-Amalina 1.svg" alt="" />
                <p><strong>Annisa Nur Amalina</strong><br />Kadiv Materi</p>
              </div>
              <div class="col">
                <img class="img-fluid rounded-circle" src="img/Panitia/3-Wakadiv-Sarah Naluriyah 1.svg" alt="" />
                <p><strong>Sarah Naluriyah</strong><br />Wakadiv Materi</p>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-6">
            <div class="row text-center g-0">
              <h3>Materi</h3>
              <div class="col">
                <img class="img-fluid rounded-circle" src="img/Panitia/3-Kadiv-Annisa-Nur-Amalina 1.svg" alt="" />
                <p><strong>Annisa Nur Amalina</strong><br />Kadiv Materi</p>
              </div>
              <div class="col">
                <img class="img-fluid rounded-circle" src="img/Panitia/3-Wakadiv-Sarah Naluriyah 1.svg" alt="" />
                <p><strong>Sarah Naluriyah</strong><br />Wakadiv Materi</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- akhir grid panitia -->

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
        <p class="mt-3">©2021. Fisip Unpad. All Rights Reserved.</p>
      </div>
    </footer>
    <!-- akhir footer -->

    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
