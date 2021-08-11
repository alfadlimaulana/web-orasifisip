<?php

session_start();
require 'functions.php';

//aing nambahin ini bener kan wap??
if(!isset($_SESSION["login_peserta"])){
    echo "<script>
            alert('Mohon Login terlebih dahulu.');
            document.location.href = 'login.php';
        </script>";
  exit;
}

$username_peserta = $_SESSION["login_peserta"];

//die;

$database = query("SELECT * FROM peserta WHERE username_peserta = '$username_peserta'")[0];

if(isset($_POST["submit1"])){
  //cek berhasil atau tidak
  if(submit($_POST, "penugasan1") > 0){
    echo "<script>
            alert('Tugas 1 BERHASIL dikumpulkan!');
            document.location.href = '';
          </script>";
  }else{
    echo "<script>
            alert('Tugas 1 GAGAL dikumpulkan!');
            document.location.href = '';
          </script>";
  }
}

if(isset($_POST["submit2"])){
  //cek berhasil atau tidak
  if(submit($_POST, "penugasan2") > 0){
    echo "<script>
            alert('Tugas 2 BERHASIL dikumpulkan!');
            document.location.href = '';
          </script>";
  }else{
    echo "<script>
            alert('Tugas 2 GAGAL dikumpulkan!');
            document.location.href = '';
          </script>";
  }
}

if(isset($_POST["submit3"])){
  //cek berhasil atau tidak
  if(submit($_POST, "penugasan3") > 0){
    echo "<script>
            alert('Tugas 3 BERHASIL dikumpulkan!');
            document.location.href = '';
          </script>";
  }else{
    echo "<script>
            alert('Tugas 3 GAGAL dikumpulkan!');
            document.location.href = '';
          </script>";
  }
}

  if(isset($_POST["submit4"])){
    //cek berhasil atau tidak
    if(submit($_POST, "penugasan4") > 0){
      echo "<script>
              alert('Tugas 4 BERHASIL dikumpulkan!');
              document.location.href = '';
            </script>";
    }else{
      echo "<script>
              alert('Tugas 4 GAGAL dikumpulkan!');
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- font -->
    <script src="https://kit.fontawesome.com/b249d00227.js" crossorigin="anonymous"></script>

    <title>Orasi Fisip Unpad</title>
  </head>
  <body>
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

    <!-- Grid Tugas -->
    <div class="container-fluid tugas-container py-5 px-5 d-flex flex-column align-items-center justify-content-center">
      <div class="row g-3 animate__animated animate__fadeIn">
        <div class="col-ms-12 col-md-6 col-lg-3">
          <div class="card card-tugas">
            <div class="card-body text-center p-5">
              <h5 class="card-title">Tugas 1</h5>
              <p class="card-text mt-3">Some quick example text to build on the Tugas and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-primary btn-1 mt-4" data-bs-toggle="modal" data-bs-target="#tugas1">Detail</button>
            </div>
          </div>
        </div>
        <div class="col-ms-12 col-md-6 col-lg-3">
          <div class="card card-tugas">
            <div class="card-body text-center p-5">
              <h5 class="card-title">Tugas 2</h5>
              <p class="card-text mt-3">Some quick example text to build on the Tugas and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-primary btn-2 mt-4" data-bs-toggle="modal" data-bs-target="#tugas2">Detail</button>
            </div>
          </div>
        </div>

        <div class="col-ms-12 col-md-6 col-lg-3">
          <div class="card card-tugas">
            <div class="card-body text-center p-5">
              <h5 class="card-title">Tugas 3</h5>
              <p class="card-text mt-3">Some quick example text to build on the Tugas and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-primary btn-3 mt-4" data-bs-toggle="modal" data-bs-target="#tugas3">Detail</button>
            </div>
          </div>
        </div>

        <div class="col-ms-12 col-md-6 col-lg-3">
          <div class="card card-tugas">
            <div class="card-body text-center p-5">
              <h5 class="card-title">Tugas 4</h5>
              <p class="card-text mt-3">Some quick example text to build on the Tugas and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-primary btn-4 mt-4" data-bs-toggle="modal" data-bs-target="#tugas4">Detail</button>
            </div>
          </div>
        </div>
      </div>

      <div class="row animate__animated animate__fadeInUp">
        <a href="nilai.html" role="button" class="btn btn-primary mt-5">Lihat Nilai</a>
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
                    <p class="mt-3 px-4">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea quidem quo quam iusto cumque! Dolores impedit totam repellendus ratione odio unde. Ducimus provident veritatis odio minus quisquam sint similique, illum odit
                      inventore? Aut enim unde debitis dicta, est fugit recusandae consectetur nesciunt consequuntur eius!
                    </p>
                    <input type="hidden" name="username_peserta" value="<?= $database["username_peserta"] ?>">
                    <input type="hidden" name="nama_peserta" value="<?= $database["nama_peserta"] ?>">
                    <input type="hidden" name="kelompok" value="<?= $database["kelompok"] ?>">
                    <div class="submit-form text-start mt-5">
                      <label for="file" class="form-label">Pengumpulan</label>
                      <input class="form-control" type="file" id="file" name="file" required />
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- modal footer -->
            <div class="modal-footer border-0">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
              <button type="submit" class="btn btn-primary" name="submit1" onclick="return confirm('Kumpulkan?\nFile yang telah dikumpulkan tidak dapat diubah\ntekan \'OK\' untuk mengumpulkan')">Selesai</button>
              <!--  -->
            </div>
          </div>
        </div>
      </div>
    </form>
    <!-- Akhir Modal 1-->

    <!-- Modal 2-->
    <form action="" method="post" enctype="multipart/form-data">
      <div class="modal fade" id="tugas2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <!-- header modal -->
            <div class="modal-header border-0 d-flex align-items-start text-center">
              <h2 class="align-midle"><strong>Tugas 2</strong></h2>
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
                    <p class="mt-3 px-4">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea quidem quo quam iusto cumque! Dolores impedit totam repellendus ratione odio unde. Ducimus provident veritatis odio minus quisquam sint similique, illum odit
                      inventore? Aut enim unde debitis dicta, est fugit recusandae consectetur nesciunt consequuntur eius!
                    </p>
                    <div class=" text-center m-3">
                      <a href="">Link Form</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- modal footer -->
            <div class="modal-footer border-0">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
              <button type="submit" class="btn btn-primary" name="submit2" onclick="return confirm('Kumpulkan?\nFile yang telah dikumpulkan tidak dapat diubah\ntekan \'OK\' untuk mengumpulkan')">Selesai</button>
              <!-- onclick="return confirm('Kumpulkan?\nFile yang telah dikumpulkan tidak dapat diubah\ntekan \'OK\' untuk mengumpulkan') -->
            </div>
          </div>
        </div>
      </div>
    </form>
    <!-- Akhir Modal 2-->

    <!-- Modal 3-->
    <form action="" method="post" enctype="multipart/form-data">
      <div class="modal fade" id="tugas3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <!-- header modal -->
            <div class="modal-header border-0 d-flex align-items-start text-center">
              <h2 class="align-midle"><strong>Tugas 3</strong></h2>
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
                    <p class="mt-3 px-4">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea quidem quo quam iusto cumque! Dolores impedit totam repellendus ratione odio unde. Ducimus provident veritatis odio minus quisquam sint similique, illum odit
                      inventore? Aut enim unde debitis dicta, est fugit recusandae consectetur nesciunt consequuntur eius!
                    </p>
                    <input type="hidden" name="username_peserta" value="<?= $database["username_peserta"] ?>">
                    <div class="submit-form text-start mt-5">
                      <label for="file" class="form-label">Pengumpulan</label>
                      <input class="form-control" type="file" id="file" name="file" required />
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- modal footer -->
            <div class="modal-footer border-0">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
              <button type="submit" class="btn btn-primary" name="submit3" onclick="return confirm('Kumpulkan?\nFile yang telah dikumpulkan tidak dapat diubah\ntekan \'OK\' untuk mengumpulkan')">Selesai</button>
              <!-- onclick="return confirm('Kumpulkan?\nFile yang telah dikumpulkan tidak dapat diubah\ntekan \'OK\' untuk mengumpulkan') -->
            </div>
          </div>
        </div>
      </div>
    </form>
    <!-- Akhir Modal 3-->

    <!-- Modal 4-->
    <form action="" method="post" enctype="multipart/form-data">
      <div class="modal fade" id="tugas4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <!-- header modal -->
            <div class="modal-header border-0 d-flex align-items-start text-center">
              <h2 class="align-midle"><strong>Tugas 4</strong></h2>
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
                    <p class="mt-3 px-4">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea quidem quo quam iusto cumque! Dolores impedit totam repellendus ratione odio unde. Ducimus provident veritatis odio minus quisquam sint similique, illum odit
                      inventore? Aut enim unde debitis dicta, est fugit recusandae consectetur nesciunt consequuntur eius!
                    </p>
                    <div class=" text-center m-3">
                      <a href="youtube.com">Go To Youtube</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- modal footer -->
            <div class="modal-footer border-0">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
              <button type="submit" class="btn btn-primary" name="submit4" onclick="return confirm('Kumpulkan?\nFile yang telah dikumpulkan tidak dapat diubah\ntekan \'OK\' untuk mengumpulkan')">Selesai</button>
              <!-- onclick="return confirm('Kumpulkan?\nFile yang telah dikumpulkan tidak dapat diubah\ntekan \'OK\' untuk mengumpulkan') -->
            </div>
          </div>
        </div>
      </div>
    </form>
    <!-- Akhir Modal 3-->

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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
    <script>
      //btntoggle();
    </script>
  </body>
</html>
