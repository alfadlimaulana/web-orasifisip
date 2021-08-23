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
    <?php style_orasi(); ?>

    <!-- font -->
    <script src="https://kit.fontawesome.com/b249d00227.js" crossorigin="anonymous"></script>
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>

    <!-- icon -->
    <link rel="shortcut icon" href="img/logo-favicon.ico" />

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
            <a class="nav-link" href="kelompok.php">Info Kelompok</a>
            <?php if(!isset($_SESSION["login_peserta"])) : ?>
            <a class="nav-link" href="login.php">Login</a>
            <?php endif; ?>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Account
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="background-color: #f7c42a;">
                <li><a class="nav-link hide-link" href="profile.html">Profile</a></li>
                <li><a class="nav-link hide-link" href="logout.php">Logout</a></li>
              </ul>
            </li>
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
        data-property="{ videoURL:'https://youtu.be/IcnE5QBus6c', containment:'body', autoPlay:true, mute:true, startAt:0, opacity:1, optimizeDisplay:true, addRaster:true, abundance: 0 }"
      ></div>
      <div id="info" class="flex">
        <i id="volume" class="fas fa-volume-mute"></i>
      </div>
    </section>
    <!-- akhir background video -->
    
    <!-- about us -->
    <div class="index-container container-fluid text-center">
      <div class="container about-us py-4 px-5 mt-5">
        <img class="img-fluid my-4" src="img/Logo.svg" alt="logo" />
        <div class="row mb-2 justify-content-center">
          <div class="col-8 col-md-6 col-lg-4">
            <img class="img-fluid" src="img/Website-Orasi-2021 1.svg" alt="Orasi 2021" data-aos="fade-up">
          </div>
        </div>
        <div class="row">
          <div class="col">
            <p data-aos="fade-up">
              Mahasiswa merupakan salah satu tingkatan tertinggi dalam dunia pendidikan yang ada di Indonesia. Mahasiswa sebagai kaum intelektual muda yang memiliki fungsi kontrol sosial dalam masyarakat dituntut untuk dapat menjadi pribadi yang kritis, visioner, peduli, berkontribusi nyata, kreatif, dan mampu mengoptimalkan potensi mereka sehingga diharapkan mampu berperan sebagai <em>agent of change</em> di masyarakat sesuai dengan tuntutan Tri Dharma Perguruan Tinggi.
            </p>
            <p data-aos="fade-up">
              Perpindahan mahasiswa baru dari lingkungan sekolah menjadi lingkungan kampus tertentu akan mengalami perubahan pola pikir dan pola kehidupan. Proses adaptasi dan mengenal berbagai macam aspek, baik aspek fisik kampus, akademik, sosial, dan organisasi yang ada di lingkungan kampus tingkatan, khususnya tingkat fakultas seperti melalui salah satu program kaderisasi berbasis orientasi yang disebut dengan kegiatan ORASI yang merupakan acara Penerimaan Mahasiswa Baru Fakultas Ilmu Sosial dan Ilmu Politik (PMBF).
            </p>
          </div>
        </div>
        <div class="row justify-content-center mt-4 mb-2">
          <div class="col-12 col-md-10 col-lg-8 p-0">
            <img class="img-fluid" src="img/Website-Empowering-Collaboration 1.svg" alt="EMPOWERING COLLABORATION" data-aos="fade-up">
          </div>
        </div>
        <div class="row">
          <div class="col">
            <p data-aos="fade-up">
              Memberdayakan potensi Mahasiswa Baru melalui penanaman nilai yang ideal sesuai
              dengan <em>Blueprint</em> Kaderisasi yang tertuang dalam nilai dan muatan ORASI yang
              dirancang oleh Dept. KPSDM BEM FISIP Unpad 2021. Serta memperlihatkan
              keberagaman kepada mahasiswa baru yang terdapat di FISIP UNPAD melalui
              kolaborasi bersama ORMAWA se-FISIP sehingga ORASI 2021 dapat memberikan <em>first
              impression</em> terkait banyaknya keberagaman yang bisa saling melengkapi. Serta
              sebagai perpanjangan tangan kepada ospek di masing-masing jurusan di FISIP Unpad.
              Bermitra dengan berbagai pemangku kepentingan agar memperoleh
              kesuksesan dalam seluruh rangkaian acara ORASI 2021. <strong><em>Empowering Collaboration</em></strong>
              sendiri diangkat dengan <em>background</em> jurusan terbanyak yang berada di Unpad.
            </p>
          </div>
        </div>
      </div>

      <!-- akhir about us -->

      <!-- Gallery -->
      <section id="gallery" class="container text-center bg-transparent p-4 mb-5" style="background-color: lightgrey">
        <div class="row justify-content-center">
          <div class="col-10 col-md-8 col-lg-6">
            <img class="img-fluid" src="img/Website-Check-This-Out-2 1.svg" alt="Check This Out" data-aos="fade-up">
          </div>
        </div>
        <div class="row justify-content-center pt-3 g-4">
          <div class="col-sm-6 col-lg-3 card-1">
            <div class="card card-gallery" data-aos="fade-up">
              <iframe src="https://www.youtube.com/embed/i3MJVR8NJ-w" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              <div class="card-body">
                <h5 class="card-title">FISIPedia: Get to Know All About FISIP Unpad!</h5>
                <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#">Watch on Youtube</a> -->
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="card card-gallery" data-aos="fade-up">
              <img src="img/thumbnail website 1.svg" class="card-img-top" alt="coming soon" />
              <div class="card-body">
                <h5 class="card-title">COMING SOON</h5>
                <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#">Watch on Youtube</a> -->
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="card card-3 card-gallery" data-aos="fade-up">
              <img src="img/thumbnail website 1.svg" class="card-img-top" alt="coming soon" />
              <div class="card-body">
                <h5 class="card-title">COMING SOON</h5>
                <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#">Watch on Youtube</a> -->
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
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
    <script>
      muteVideo();
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
