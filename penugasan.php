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
            alert('Tugas Life Mapping BERHASIL dikumpulkan!');
            document.location.href = '';
          </script>";
  }else{
    echo "<script>
            alert('Tugas Life Mapping GAGAL dikumpulkan!');
            document.location.href = '';
          </script>";
  }
}

if(isset($_POST["submit2"])){
  //cek berhasil atau tidak
  if(submit_link($_POST, "penugasan2") > 0){
    echo "<script>
            alert('Tugas Video BERHASIL dikumpulkan!');
            document.location.href = '';
          </script>";
  }else{
    echo "<script>
            alert('Tugas Video GAGAL dikumpulkan!');
            document.location.href = '';
          </script>";
  }
}

if(isset($_POST["submit3"])){
  //cek berhasil atau tidak
  if(submit($_POST, "penugasan3") > 0){
    echo "<script>
            alert('Tugas Audio BERHASIL dikumpulkan!');
            document.location.href = '';
          </script>";
  }else{
    echo "<script>
            alert('Tugas Audio GAGAL dikumpulkan!');
            document.location.href = '';
          </script>";
  }
}

  if(isset($_POST["submit4"])){
    //cek berhasil atau tidak
    if(submit($_POST, "penugasan4") > 0){
      echo "<script>
              alert('Tugas Esai BERHASIL dikumpulkan!');
              document.location.href = '';
            </script>";
    }else{
      echo "<script>
              alert('Tugas Esai GAGAL dikumpulkan!');
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

    <!-- AoS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

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

    <!-- Grid Tugas -->
    <div class="container-fluid tugas-container py-5 px-5 ">
      <div class="row g-3 justify-content-center">
        <div class="col-ms-12 col-md-6 col-lg-4">
          <div class="card card-tugas" data-aos="fade-up">
            <div class="card-body text-center p-5">
              <h5 class="card-title">Tugas Life Mapping</h5>
              <p class="card-text mt-3">Deadline : 22 Agustus 2021</p>
              <button type="button" class="btn btn-primary btn-1 mt-4" data-bs-toggle="modal" data-bs-target="#tugas1">Detail</button>
            </div>
          </div>
        </div>
        <div class="col-ms-12 col-md-6 col-lg-4">
          <div class="card card-tugas" data-aos="fade-up">
            <div class="card-body text-center p-5">
              <h5 class="card-title">Tugas Video 21st Century Skill</h5>
              <p class="card-text mt-3">Deadline : 29 Agustus 2021</p>
              <button type="button" class="btn btn-primary btn-2 mt-4" data-bs-toggle="modal" data-bs-target="#tugas2">Detail</button>
            </div>
          </div>
        </div>

        <div class="col-ms-12 col-md-6 col-lg-4">
          <div class="card card-tugas" data-aos="fade-up">
            <div class="card-body text-center p-5">
              <h5 class="card-title">Tugas Review Audio</h5>
              <p class="card-text mt-3">Deadline : 28 Agustus 2021</p>
              <button type="button" class="btn btn-primary btn-3 mt-4" data-bs-toggle="modal" data-bs-target="#tugas3">Detail</button>
            </div>
          </div>
        </div>

        <div class="col-ms-12 col-md-6 col-lg-4">
          <div class="card card-tugas" data-aos="fade-up">
            <div class="card-body text-center p-5">
              <h5 class="card-title">Tugas Esai Kemahasiswaan</h5>
              <p class="card-text mt-3">Deadline : 27 Agustus 2021</p>
              <button type="button" class="btn btn-primary btn-4 mt-4" data-bs-toggle="modal" data-bs-target="#tugas4">Detail</button>
            </div>
          </div>
        </div>
        <div class="col-ms-12 col-md-6 col-lg-4">
          <div class="card card-tugas" data-aos="fade-up">
            <div class="card-body text-center p-5">
              <h5 class="card-title">Tugas Kefisipan & Keorganisasian</h5>
              <p class="card-text mt-3">Deadline : 28 Agustus 2021 </p>
              <button type="button" class="btn btn-primary btn-4 mt-4" data-bs-toggle="modal" data-bs-target="#tugas5">Detail</button>
            </div>
          </div>
        </div>
      </div>

      <div class="row justify-content-center mt-3">
        <div class="col-ms-12 col-md-6 col-lg-4" >
          <div class="card card-tugas" data-aos="fade-up">
            <div class="card-body text-center p-5">
              <p class="card-text">Stay tuned informasi penugasan di instagram @orasi2021 yaa! #SATUFISIPBANGGA</p>
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
              <h2 class="align-midle">Life Mapping</h2>
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
                    Penugasan individu berupa pembuatan skema life mapping diri arkamuda selama 5 tahun yang akan datang dengan dikemas sesuai kreatifitas arkamuda.
                    </p>
                    <p class="px-4">Deadline : 22 Agustus 2021</p>
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
              <h2 class="align-midle">Video 21st Century Skill </h2>
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
                    Penugasan kelompok berupa pembuatan video pengaplikasian Arkamuda terhadap 21st Century Skill dalam menjadi sosok pemimpin ideal di abad 21 dengan melibatkan seluruh anggota kelompok dan dibuat semenarik mungkin. 
                  </p>
                    <p class="px-4">Deadline : 29 Agustus 2021</p>
                    <input type="hidden" name="username_peserta" value="<?= $database["username_peserta"] ?>">
                    <input type="hidden" name="nama_peserta" value="<?= $database["nama_peserta"] ?>">
                    <input type="hidden" name="kelompok" value="<?= $database["kelompok"] ?>">
                    <div class="submit-form text-start mt-5">
                      <label for="file" class="form-label">Pengumpulan</label>
                      <input type="text" class="form-control" id="usernameInput" placeholder="Masukkan link youtube" name="link_tugas_video" required />
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- modal footer -->
            <div class="modal-footer border-0">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
              <button type="submit" class="btn btn-primary" name="submit2" onclick="return confirm('Kumpulkan?\nFile yang telah dikumpulkan tidak dapat diubah\ntekan \'OK\' untuk mengumpulkan')">Selesai</button>
              <!--  -->
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
              <h2 class="align-midle">Review Audio</h2>
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
                    Penugasan individu berupa pengulasan secara lisan atas rangkaian Orasi 2021 pada hari pertama, kedua dan ketiga. 
                  </p>
                    <p class="px-4">Deadline : 28 Agustus 2021</p>
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
              <button type="submit" class="btn btn-primary" name="submit3" onclick="return confirm('Kumpulkan?\nFile yang telah dikumpulkan tidak dapat diubah\ntekan \'OK\' untuk mengumpulkan')">Selesai</button>
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
              <h2 class="align-midle">Esai Kemahasiswaan</h2>
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
                    Penugasan individu berupa pembuatan esai mengenai peran Arkamuda sebagai mahasiswa serta keterkaitannya dengan Tri Dharma Perguruan Tinggi. 
                    </p>
                    <p class="px-4">Deadline : 27 Agustus 2021</p>
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
              <button type="submit" class="btn btn-primary" name="submit4" onclick="return confirm('Kumpulkan?\nFile yang telah dikumpulkan tidak dapat diubah\ntekan \'OK\' untuk mengumpulkan')">Selesai</button>
            </div>
          </div>
        </div>
      </div>
    </form>
    <!-- Akhir Modal 4-->

    <!-- Modal 5-->
    <form action="" method="post" enctype="multipart/form-data">
      <div class="modal fade" id="tugas5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <!-- header modal -->
            <div class="modal-header border-0 d-flex align-items-start text-center">
              <h2 class="align-midle">Penugasan Kefisipan & Keorganisasian</h2>
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
                      Penugasan individu berupa pertanyaan yang harus dijawab oleh Arkamuda mengenai pengetahuan Kefisipan yang disampaikan pada Talkshow dan Keorganisasian yang disampaikan pada podcast.
                    </p>
                    <p class="px-4">Deadline : 28 Agustus 2021</p>
                    <div class=" text-center m-3">
                      <a href="youtube.com">Link Form</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- modal footer -->
            <div class="modal-footer border-0">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            </div>
          </div>
        </div>
      </div>
    </form>
    <!-- Akhir Modal 5-->

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
      //btntoggle();
    </script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({
        duration: 800,
      });
    </script>
  </body>
</html>
