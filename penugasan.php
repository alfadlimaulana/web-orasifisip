<?php
 
require 'functions.php';

$username_peserta = $_COOKIE["username"];

$database = query("SELECT * FROM peserta WHERE username_peserta = '$username_peserta'")[0];

if(isset($_POST["submit"])){
  //cek berhasil atau tidak
  if(submit($_POST) > 0){
    echo "<script>
            alert('Tugas BERHASIL dikumpulkan!');
            document.location.href = '';
          </script>";
  }else{
    echo "<script>
            alert('Tugas GAGAL dikumpulkan!');
            document.location.href = '';
          </script>";
  }
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
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.html"> <img src="img/Logo w text.svg" alt="logo" width="60" height="25" class="d-inline-block align-text-top" style="box-sizing: border-box" /> </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ms-auto">
            <a class="nav-link" href="#gallery">Gallery</a>
            <a class="nav-link" href="#informasi">Informasi</a>
            <a class="nav-link" href="panitia.html">Panitia Inti</a>
            <a class="nav-link" href="livestream.html">Livestream</a>
            <a class="nav-link" href="penugasan.html">Penugasan</a>
            <a class="nav-link" href="absensi.html">Absensi</a>
            <a class="nav-link" href="login.html">Login</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- akhir navbar -->

    <!-- Grid Tugas -->
    <div class="container-fluid tugas-container py-5 px-5 d-flex align-items-center">
      <div class="row g-3">
        <div class="col-ms-12 col-md-6 col-lg-4">
          <div class="card card-tugas">
            <div class="card-body text-center p-5">
              <h5 class="card-title">Tugas 1</h5>
              <p class="card-text mt-3">Some quick example text to build on the Tugas and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-primary mt-4" data-bs-toggle="modal" data-bs-target="#tugas1">Detail</button>
            </div>
          </div>
        </div>

        <div class="col-ms-12 col-md-6 col-lg-4">
          <div class="card card-tugas">
            <div class="card-body text-center p-5">
              <h5 class="card-title">Tugas 2</h5>
              <p class="card-text mt-3">Some quick example text to build on the Tugas and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-primary mt-4" data-bs-toggle="modal" data-bs-target="#tugas2">Detail</button>
            </div>
          </div>
        </div>

        <div class="col-ms-12 col-md-6 col-lg-4">
          <div class="card card-tugas">
            <div class="card-body text-center p-5">
              <h5 class="card-title">Tugas 3</h5>
              <p class="card-text mt-3">Some quick example text to build on the Tugas and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-primary mt-4" data-bs-toggle="modal" data-bs-target="#tugas3">Detail</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- akhir grid tugas -->

     <!-- Modal 1-->
    <form action="" method="post" enctype="multipart/form-data">
    <div class="modal fade" id="tugas1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <!-- header modal -->
          <div class="modal-header border-0 d-flex align-items-start text-center">
            <h2 class="align-midle"><strong>Tugas 1</strong></h2>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <!-- body modal -->
          <div class="rounded-bottom">
            <div class="modal-body margin-left-20 margin-right-20 border-0">
              <div class="row margin-bottom-30">
                <div class="col-md-5">
                  <div class="border-grad">
                    <img class="img" src="img/image-test.png" width="100%" />
                  </div>
                </div>
                <div class="col-md-7">
                  <div>
                <p class="mt-3 px-4">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea quidem quo quam iusto cumque! Dolores impedit totam repellendus ratione odio unde. Ducimus provident veritatis odio minus quisquam sint similique, illum odit ut
                  inventore? Aut enim unde debitis dicta, est fugit recusandae consectetur nesciunt consequuntur eius!
                </p>
                <input type="hidden" name="username_peserta" value="<?= $database["username_peserta"] ?>">
                  <div class="submit-form text-start mt-5">
                    <label for="file" class="form-label">Pengumpulan</label>
                    <input class="form-control" type="file" id="file" name="file" required/>
                  </div>
                </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer border-0">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary" name="submit" ">Selesai</button>
            <!-- onclick="return confirm('Kumpulkan?\nFile yang telah dikumpulkan tidak dapat diubah\ntekan \'OK\' untuk mengumpulkan') -->
          </div>
        </div>
      </div>
    </div>
    </form>
    <!-- Akhir Modal 1-->

         <!-- Modal 2-->
         <div class="modal fade" id="tugas2" tabindex="-1" aria-labelledby="modal-click" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <!-- header modal -->
          <div class="modal-header border-0 d-flex align-items-start text-center">
            <h2 class="align-midle"><strong>Tugas 2</strong></h2>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <!-- body modal -->
          <div class="rounded-bottom">
            <div class="modal-body margin-left-20 margin-right-20">
              <div class="row margin-bottom-30">
                <div class="col-md-5">
                  <div class="border-grad">
                    <img class="img" src="img/image-test2.jpg" width="100%" />
                  </div>
                </div>
                <div class="col-md-7">
                  <div>
                <p class="mt-3 px-4">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea quidem quo quam iusto cumque! Dolores impedit totam repellendus ratione odio unde. Ducimus provident veritatis odio minus quisquam sint similique, illum odit ut
                  inventore? Aut enim unde debitis dicta, est fugit recusandae consectetur nesciunt consequuntur eius!
                </p>
                <div class="submit-form text-start mt-5">
                  <label for="formFile" class="form-label">Default file input example</label>
                  <input class="form-control" type="file" id="formFile" />
                </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Akhir Modal 2-->

             <!-- Modal 3-->
             <div class="modal fade" id="tugas3" tabindex="-1" aria-labelledby="modal-click" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <!-- header modal -->
          <div class="modal-header border-0 d-flex align-items-start text-center">
            <h2 class="align-midle"><strong>Tugas 2</strong></h2>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <!-- body modal -->
          <div class="rounded-bottom">
            <div class="modal-body margin-left-20 margin-right-20">
              <div class="row margin-bottom-30">
                <div class="col-md-5">
                  <div class="border-grad">
                    <img class="img" src="img/image-test3.png" width="100%" />
                  </div>
                </div>
                <div class="col-md-7">
                  <div>
                <p class="mt-3 px-4">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea quidem quo quam iusto cumque! Dolores impedit totam repellendus ratione odio unde. Ducimus provident veritatis odio minus quisquam sint similique, illum odit ut
                  inventore? Aut enim unde debitis dicta, est fugit recusandae consectetur nesciunt consequuntur eius!
                </p>
                <div class="submit-form text-start mt-5">
                  <label for="formFile" class="form-label">Default file input example</label>
                  <input class="form-control" type="file" id="formFile" />
                </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Akhir Modal 3-->

    <!-- footer -->
    <footer class="text-center">
      <div class="container d-flex flex-column justify-content-center" style="height: 100%">
        <h5>FOLLOW US</h5>
        <div class="icons mx-auto d-flex flex-inline justify-content-evenly">
          <a href="https://www.instagram.com/atma.asta" target="_blank"><i class="fab fa-instagram-square"></i></a>
          <a href="https://www.youtube.com/channel/UCAzW7UFyXe5EG_ehdQXt3fA" target="_blank"><i class="fab fa-youtube"></i></a>
          <a href="https://vt.tiktok.com/ZSJb6g35o/" target="_blank"><i class="fab fa-tiktok"></i></a>
        </div>
        <p class="mt-3">©2021. Fisip Unpad. All Rights Reserved.</p>
      </div>
    </footer>
    <!-- akhir footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
