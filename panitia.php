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
        <a class="navbar-brand d-flex align-items-center" href="index.php" style="font-weight: 490;"> <img src="img/Logo w text.svg" alt="logo" width="auto" height="40" class="d-inline-block align-text-top" style="box-sizing: border-box" /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ms-auto">
            <a class="nav-link" href="panitia.php">Panitia</a>
            <?php if(isset($_SESSION["login_peserta"])) : ?>
              <a class="nav-link" href="penugasan.php">Penugasan</a>
              <a class="nav-link" href="absensi.php">Absensi</a>
              <a class="nav-link" href="kelompok.php">Info Kelompok</a>
            <?php endif; ?> 
            <?php if(!isset($_SESSION["login_peserta"])) : ?>
              <a class="nav-link" href="index.php">Home</a>
              <a class="nav-link" href="login.php">Login</a>
            <?php endif; ?> 
            <?php if(isset($_SESSION["login_peserta"])) : ?>
            <a class="nav-link hide-link" href="logout.php">Logout</a>
            <?php endif; ?> 
          </div>
        </div>
      </div>
    </nav>
    <!-- akhir navbar -->

    <!-- grid panitia -->
    <div class="container-fluid panitia-bg">
      <div class="container p-5">
        <div class="row g-3 justify-content-center">
          <div class="col-8 col-md-6 col-lg-4 text-center">
            <img class="img-fluid rounded-circle" src="img/panitia/incil/1-PS-Fikri-Fauzi 1.svg" alt="Supervisor 1" />
            <div class="tulisan-panit">
              <p>
                <strong>Fikri Fauzi</strong><br />
                Project Supervisor
              </p>
            </div>
          </div>
          <div class="col-8 col-md-6 col-lg-4 text-center">
            <img class="img-fluid rounded-circle" src="img/panitia/incil/1-PS-Dimas-Dwi-F. 2.svg" alt="Supervisor" />
            <div class="tulisan-panit">
              <p>
                <strong>Dimas Dwi F</strong><br />
                Project Supervisor
              </p>
            </div>
          </div>
        </div>
        <div class="row g-2 mt-3 text-center justify-content-center">
          <div class="col-8 col-md-4">
            <img class="img-fluid rounded-circle" src="img/panitia/incil/1-PO-Putri-Adinda.svg" alt="PO" />
            <div class="tulisan-panit">
              <p>
                <strong>Putri Adinda</strong><br />
                Project Officer
              </p>
            </div>
          </div>
          <div class="col-6 col-md-4 order-md-first">
            <img class="img-fluid rounded-circle" src="img/panitia/incil/1-VPO-Fadhil-Akmali 2.svg" alt="VPO" />
            <div class="tulisan-panit">
              <p>
                <strong>Fadhil Akmali</strong><br />
                Vice Project Officer
              </p>
            </div>
          </div>
          <div class="col-6 col-md-4">
            <img class="img-fluid rounded-circle" src="img/panitia/incil/1-VPO-Nizar-Firdaus 1.svg" alt="VPO" />
            <div class="tulisan-panit">
              <p>
                <strong>M. Nizar Firdaus</strong><br />
                Vice Project Officer
              </p>
            </div>
          </div>
        </div>

        <div class="row mt-3 g-3 divisi">
          <div class="col-sm-12 col-md-6 text-center">
            <div class="text-divisi">
              <h3>Sekretaris</h3>
            </div>
            <div class="row text-center g-2">
              <div class="col">
                <img class="img-fluid rounded-circle" src="img/panitia/incil/1-Sekretaris-Hasna 2.svg" alt="Sekretaris 1" />
                <div class="tulisan-panit">
                  <p>
                    <strong>Hasna</strong><br />
                    Sekretaris
                  </p>
                </div>
              </div>
              <div class="col">
                <img class="img-fluid rounded-circle" src="img/panitia/incil/1-Sekretaris-Sayyidati-Farissa 1.svg" alt="Sekretaris 2" />
                <div class="tulisan-panit">
                  <p>
                    <strong>Sayyidati Farissa</strong><br />
                    Sekretaris
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 text-center">
            <div class="text-divisi">
              <h3>Bendahara</h3>
            </div>
            <div class="row text-center g-2">
              <div class="col">
                <img class="img-fluid rounded-circle" src="img/panitia/incil/1-Bendahara-Hasya-Aiman-Nadhir 2.svg" alt="Bendahara 1" />
                <div class="tulisan-panit">
                  <p>
                    <strong>Hasya Aiman N</strong><br />
                    Bendahara
                  </p>
                </div>
              </div>
              <div class="col">
                <img class="img-fluid rounded-circle" src="img/panitia/incil/1-Bendahara-Nanda-Eka-F. 1.svg" alt="Bendahara 2" />
                <div class="tulisan-panit">
                  <p><strong>Nanda Eka F</strong><br />Bendahara</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 text-center">
            <a class="text-divisi" href="acara.html">
              <h3>Acara</h3>
            </a>
            <div class="row text-center g-2">
              <div class="col">
                <img class="img-fluid rounded-circle" src="img/panitia/acara/2-Kadiv-Kanaya-Avitadira.svg" alt="Kadiv Acara" />
                <div class="tulisan-panit">
                  <p><strong>Kanaya Avitadira</strong><br />Kadiv Acara</p>
                </div>
              </div>
              <div class="col">
                <img class="img-fluid rounded-circle" src="img/panitia/acara/2-Wakadiv-Alya-Namira.svg" alt="Wakadiv Acara" />
                <div class="tulisan-panit">
                  <p><strong>Alya Namira</strong><br />Wakadiv Acara</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 text-center">
            <a class="text-divisi" href="humas.html">
              <h3>Humas</h3>
            </a>
            <div class="row text-center g-2">
              <div class="col">
                <img class="img-fluid rounded-circle" src="img/panitia/humas/6-Kadiv-Annisa-Rahmadhani-Angesti 1.svg" alt="Kadiv Humas" />
                <div class="tulisan-panit">
                  <p><strong>Annisa R.A</strong><br />Kadiv Humas</p>
                </div>
              </div>
              <div class="col">
                <img class="img-fluid rounded-circle" src="img/panitia/humas/6-Wakadiv-Karina-Imelia-Irfani 1.svg" alt="Wakadiv Humas" />
                <div class="tulisan-panit">
                  <p><strong>Karina Imelia Irfani</strong><br />Wakadiv Humas</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 text-center">
            <a class="text-divisi" href="fasil.html">
              <h3>Fasilitator</h3>
            </a>
            <div class="row text-center g-2">
              <div class="col">
                <img class="img-fluid rounded-circle" src="img/panitia/fasil/5-Kadiv-Dina-Larasinta 1.svg" alt="Kadiv Fasil" />
                <div class="tulisan-panit">
                  <p><strong>Dina Larasinta</strong><br />Kadiv Fasil</p>
                </div>
              </div>
              <div class="col">
                <img class="img-fluid rounded-circle" src="img/panitia/fasil/5-Wakadiv-Rifqo-Kavin-Viali 1.svg" alt="Wakadiv Fasil" />
                <div class="tulisan-panit">
                  <p><strong>Rifqo Kavin Viali</strong><br />Wakadiv Fasil</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 text-center">
            <a class="text-divisi" href="materi.html">
              <h3>Materi</h3>
            </a>
            <div class="row text-center g-2">
              <div class="col">
                <img class="img-fluid rounded-circle" src="img/panitia/materi/3-Kadiv-Annisa-Nur-Amalina 1.svg" alt="Kadiv Materi" />
                <div class="tulisan-panit">
                  <p><strong>Annisa Nur A</strong><br />Kadiv Materi</p>
                </div>
              </div>
              <div class="col">
                <img class="img-fluid rounded-circle" src="img/panitia/materi/3-Wakadiv-Sarah-Naluriyah 1.svg" alt="Wakadiv Materi" />
                <div class="tulisan-panit">
                  <p><strong>Sarah Naluriyah</strong><br />Wakadiv Materi</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 text-center">
            <a class="text-divisi" href="operasional.html">
              <h3>Operasional</h3>
            </a>
            <div class="row text-center g-2">
              <div class="col">
                <img class="img-fluid rounded-circle" src="img/panitia/op/9-Kadiv-Bagas-Aji-Prakoso.svg" alt="Kadiv Operasional" />
                <div class="tulisan-panit">
                  <p><strong>Bagas Aji Prakoso</strong><br />Kadiv Operasional</p>
                </div>
              </div>
              <div class="col">
                <img class="img-fluid rounded-circle" src="img/panitia/op/9-Wakadiv-Raka-Putra.svg" alt="Wakadiv Operasional" />
                <div class="tulisan-panit">
                  <p><strong>Raka Putra</strong><br />Wakadiv Operasional</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 text-center">
            <a class="text-divisi" href="pdd.html">
              <h3>PDD</h3>
            </a>
            <div class="row text-center g-2">
              <div class="col">
                <img class="img-fluid rounded-circle" src="img/panitia/pdd/7-Kadiv-Ken-Ratu-Annida 1.svg" alt="Kadiv Publikasi & Dokumentasi" />
                <div class="tulisan-panit">
                  <p><strong>Ken Ratu Annida</strong><br />Kadiv PDD</p>
                </div>
              </div>
              <div class="col">
                <img class="img-fluid rounded-circle" src="img/panitia/pdd/7-Wakadiv-Riska-Desfitha-Rachmadanty 1.svg" alt="Wakadiv Publikasi & Dokumentasi" />
                <div class="tulisan-panit">
                  <p><strong>Riska Desfitha R</strong><br />Wakadiv PDD</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 text-center">
            <a class="text-divisi" href="sponsorship.html">
              <h3>Sponsorship</h3>
            </a>
            <div class="row text-center g-2">
              <div class="col">
                <img class="img-fluid rounded-circle" src="img/panitia/sponsor/8-Kadiv-Fira-Julia 1.svg" alt="Kadiv Sponsor" />
                <div class="tulisan-panit">
                  <p><strong>Fira Julia</strong><br />Kadiv Sponsorship</p>
                </div>
              </div>
              <div class="col">
                <img class="img-fluid rounded-circle" src="img/panitia/sponsor/9-Wakadiv-M-Bintang-Ramadhan 1.svg" alt="Wakadiv Sponsor" />
                <div class="tulisan-panit">
                  <p><strong>M. Bintang R</strong><br />Wakadiv Sponsorship</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 text-center">
            <a class="text-divisi" href="kotik.html">
              <h3>Kode Etik</h3>
            </a>
            <div class="row text-center g-2">
              <div class="col">
                <img class="img-fluid rounded-circle" src="img/panitia/kotik/4-Kadiv-Nabila-Nurhaliza 1.svg" alt="Kadiv Kode Etik" />
                <div class="tulisan-panit">
                  <p><strong>Nabila Nurhaliza</strong><br />Kadiv Kode Etik</p>
                </div>
              </div>
              <div class="col">
                <img class="img-fluid rounded-circle" src="img/panitia/kotik/4-Wakadiv-Duta-Smaradana 1.svg" alt="Wakadiv Kode Etik" />
                <div class="tulisan-panit">
                  <p><strong>Duta Smaradana</strong><br />Wakadiv Kode Etik</p>
                </div>
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
        <p class="mt-3">©2021. Orasi FISIP Unpad. All Rights Reserved.</p>
      </div>
    </footer>
    <!-- akhir footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
