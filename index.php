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
  $username_peserta = $_SESSION["login_peserta"];
  $student = query("SELECT nama_peserta FROM peserta WHERE username_peserta = '$username_peserta'")[0];
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
    <link rel="shortcut icon" href="img/favicon.ico" />
    <script src="https://kit.fontawesome.com/b249d00227.js" crossorigin="anonymous"></script>
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>

    <!-- AoS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- bg video -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="js/jquery.mb.YTPlayer.js"></script>

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
            <a class="nav-link" href="#gallery">Gallery</a>
            <a class="nav-link" href="panitia.php">Panitia</a>
            <a class="nav-link hide-link" href="penugasan.php">Penugasan</a>
            <a class="nav-link hide-link" href="absensi.php">Absensi</a>
            <a class="nav-link hide-link" href="kelompok.html">Kelompok</a>
            <?php if(!isset($_SESSION["login_peserta"])) : ?>
            <a class="nav-link" href="login.php">Login</a>
            <?php endif; ?> 
            <a class="nav-link hide-link" href="logout.php">Logout</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- akhir navbar -->
    
    <!-- background video -->
    <section id="teaser">
    <?php if(isset($_SESSION["login_peserta"])) : ?>
      <div class="sambutan">
        <h2>Selamat Datang,</h2>
        <h2><?= $student["nama_peserta"]; ?></h2>
      </div>
    <?php endif; ?> 
      <div
        id="video-teaser"
        class="player"
        data-property="{ videoURL:'https://youtu.be/YbbqUjFwz-g', containment:'body', autoPlay:true, mute:true, startAt:0, opacity:1, optimizeDisplay:true, addRaster:true, abundance: 0 }"
      ></div>
    </section>
    <!-- akhir background video -->
    
    <!-- about us -->
    <div class="index-container container-fluid text-center p-4">
      <img class="img-fluid my-2" src="img/Logo.svg" alt="logo" />
      <div class="row mx-2">
        <div class="col">
          <h2 data-aos="fade-up">ORASI 2021</h2>
        </div>
      </div>
      <div class="row mx-2">
        <div class="col">
          <p data-aos="fade-up">
          Mahasiswa merupakan salah satu tingkatan tertinggi dalam dunia pendidikan yang ada di Indonesia. Mahasiswa sebagai kaum intelektual muda yang memiliki fungsi kontrol sosial dalam masyarakat dituntut untuk dapat menjadi pribadi yang kritis, visioner, peduli, berkontribusi nyata, kreatif, dan mampu mengoptimalkan potensi mereka sehingga diharapkan mampu berperan sebagai agent of change di masyarakat sesuai dengan tuntutan Tri Dharma Perguruan Tinggi
          </p>
          <p data-aos="fade-up">
          Perpindahan mahasiswa baru dari lingkungan sekolah menjadi lingkungan kampus tertentu akan mengalamu perubahan pola pikir dan pola kehidupan. Proses adaptasi dan mengenal berbagai macam aspek, baik aspek fisik kampus, akademik, sosial, dan organisasi yang ada di lingkungan kampus tingkatan, khususnya tingkat fakultas sepertu melalui salah satu program kaderisasi berbasis orientasi yang disebut dengan kegiatan ORASI yang merupakan acara Penerimaan Mahasiswa Baru Fakultas Ilmu Sosial dan Ilmu Politik (PMBF)          </p>
        </div>
      </div>
      <div class="row mx-2">
        <div class="col">
          <h2 data-aos="fade-up"><em>EMPOWERING COLLABORATION</em></h2>
        </div>
      </div>
      <div class="row mx-2">
        <div class="col">
          <p data-aos="fade-up">
          Memberdayakan potensi mahasiswa baru melalui penanaman nilai yang ideal sesuai dengan blueprint kaderisasi yang tertuang dalam nilai dan muatan ORASI yang dirancang oleh Dept. KPSDM BEM FISIP 2021. Serta memperlihatkan keberagaman kepada mahasiswa baru yang terdapat di FISIP Unpad melalui kolaborasi bersama 12 himpunan sehingga ORASI 2021 dapat menjadi perpanjangan tangan kepada ospek di masing-masing jurusan. Dan juga bermitra dengan berbagai pemangku kepentingan agar memperoleh kesuksesan dalam seluruh rangkaian acara ORASI 2021. Empowering Collaboration sendiri diangkat dengan background fakultas terbanyak yang berada di Unpad
          </p>
        </div>
      </div>

      <!-- akhir about us -->

      <!-- Gallery -->
      <section id="gallery" class="container-fluid text-center bg-transparent p-5" style="background-color: lightgrey">
        <h2 data-aos="fade-up">CHECK THIS OUT</h2>
        <div class="row justify-content-center pt-3 g-4">
          <div class="col-sm-6 col col-md-4 card-1">
            <div class="card card-gallery" data-aos="fade-up">
              <img src="img/thumbnail website 1.svg" class="card-img-top" alt="coming soon" />
              <div class="card-body">
                <h5 class="card-title">COMING SOON</h5>
                <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#">Watch on Youtube</a> -->
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4">
            <div class="card card-gallery" data-aos="fade-up">
              <img src="img/thumbnail website 1.svg" class="card-img-top" alt="coming soon" />
              <div class="card-body">
                <h5 class="card-title">COMING SOON</h5>
                <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#">Watch on Youtube</a> -->
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4">
            <div class="card card-3 card-gallery" data-aos="fade-up">
              <img src="img/thumbnail website 1.svg" class="card-img-top" alt="coming soon" />
              <div class="card-body">
                <h5 class="card-title">COMING SOON</h5>
                <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#">Watch on Youtube</a> -->
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!-- akhir gallery -->
    <img class="poro img-fluid" src="img/bluerabbit.svg" alt="poro" />
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
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      const teaserVideo = jQuery("#video-teaser");
      jQuery(function () {
        teaserVideo.YTPlayer();
        jQuery("#P1").YTPlayer();
      });
    </script>
    <script>
      AOS.init({
        duration: 800,
      });
    </script>
  </body>
</html>
