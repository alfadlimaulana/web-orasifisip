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
    <?php style_orasi(); ?>

    <!-- font -->
    <script src="https://kit.fontawesome.com/b249d00227.js" crossorigin="anonymous"></script>

    <!-- AoS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- icon -->
    <link rel="shortcut icon" href="img/logo-favicon.ico" />

    <title>Orasi Fisip Unpad</title>
  </head>
  <body style="background-color: white">
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
            <a class="nav-link" href="kelompok.php">Info Kelompok</a>
            <a class="nav-link" href="sponsors.php">Sponsors</a>
            <?php if(!isset($_SESSION["login_peserta"])) : ?>
            <a class="nav-link" href="login.php">Login</a>
            <?php endif; ?>
            <li class="nav-item dropdown hide-link">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Account
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="background-color: #f7c42a;">
                <li><a class="nav-link" href="profile.php">Profile</a></li>
                <li><a class="nav-link" href="logout.php">Logout</a></li>
              </ul>
            </li>
          </div>
        </div>
      </div>
    </nav>
    <!-- akhir navbar -->

    <!-- grid panitia -->
    <div class="container p-5">
      <div class="row text-center" data-aos="fade-up">
        <h2>Sponsors</h2>
      </div>
      <div class="row my-1 g-2 justify-content-center">
        <div class="col-12 col-sm-10 col-lg-5 hover-scale-up">
          <div class="sponsors text-center" data-aos="fade-up">
            <a href="https://ajaib.co.id/" target="_blank">
              <img class="img-fluid" src="img/sponsor/xl_ajaib.png" alt="" />
            </a>
          </div>
        </div>
        <div class="col-12 col-sm-10 col-lg-5 hover-scale-up">
          <div class="sponsors text-center" data-aos="fade-up">
            <a href="https://www.auntieannes.com/" target="_blank">
              <img class="img-fluid" src="img/sponsor/xl_auntie_annes3.png" alt="" />
            </a>
          </div>
        </div>
        <div class="col-10 col-sm-6 col-lg-4 hover-scale-up">
          <div class="sponsors text-center" data-aos="fade-up">
            <a href="https://www.hydrococo.com/" target="_blank">
              <img class="img-fluid" src="img/sponsor/m_hydro_coco.png" alt="" />
            </a>
          </div>
        </div>
        <div class="col-10 col-sm-6 col-lg-4 hover-scale-up">
          <div class="sponsors text-center" data-aos="fade-up">
            <a href="https://www.byu.id/id" target="_blank">
              <img class="img-fluid" src="img/sponsor/m_by_u.png" alt="" />
            </a>
          </div>
        </div>
        <div class="col-8 col-sm-5 col-lg-2 hover-scale-up">
          <div class="sponsors text-center" data-aos="fade-up">
            <a href="https://instagram.com/paperwhitepro?utm_medium=copy_link" target="_blank">
              <img class="img-fluid" src="img/sponsor/s_paperwhite.png" alt="" />
            </a>
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
        <p class="mt-3">©2021. Orasi FISIP Unpad. All Rights Reserved.</p>
      </div>
    </footer>
    <!-- akhir footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
    <script>
      navbarcollapse();
    </script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({
        duration: 800,
      });
    </script>
  </body>
</html>
