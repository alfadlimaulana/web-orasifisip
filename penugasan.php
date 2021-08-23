<?php

session_start();
require 'functions.php';
require 'func_tugas.php';

wajib_login("login.php");

$username_peserta = $_SESSION["login_peserta"];

$database = query("SELECT * FROM peserta WHERE username_peserta = '$username_peserta'")[0];
$settings = query("SELECT * FROM settings");

$tugas1 = status_tugas("penugasan1", $username_peserta);
$tugas2 = status_tugas("penugasan2", $username_peserta);
$tugas3 = status_tugas("penugasan3", $username_peserta);
$tugas4 = status_tugas("penugasan4", $username_peserta);



if(isset($_POST["submit1"])){
  verivikasi_tugas($settings, 3, "penugasan1", "Life Mapping");
}

if(isset($_POST["submit2"])){
  //cek berhasil atau tidak
  if($settings[4]['status_setting'] == "buka"){
    if(submit_link($_POST, "penugasan2") > 0){
      berhasil_mengumpulkan("Video 21st Century Skill");
    }else{
      gagal_mengumpulkan("Video 21st Century Skill");
    }
  }else{
    gagal_mengumpulkan("Video 21st Century Skill");
  }
}


if(isset($_POST["submit3"])){
  verivikasi_tugas($settings, 5, "penugasan3", "Review Audio");
}

if(isset($_POST["submit4"])){
  verivikasi_tugas($settings, 6, "penugasan4", "Esai Kemahasiswaan");
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

    <!-- Grid Tugas -->
    <div class="container-fluid tugas-container py-5 px-5 ">
      <div class="row g-3 justify-content-center">
        <div class="col-ms-12 col-md-6 col-lg-4">
          <div class="card card-tugas" data-aos="fade-up">
            <div class="card-body text-center p-5">
              <h5 class="card-title">Tugas Life Mapping</h5>
              <p class="card-text mt-3">Deadline : 22 Agustus 2021</p>
              <?php if($tugas1 === 'Sudah' ) : ?>
                <p class="text-center" style="color: green;">Tugas telah dikumpulkan</p>
              <?php endif; ?>
              <?php setting_tugas($settings, "#tugas1", 3); ?>
            </div>
          </div>
        </div>
        
        <div class="col-ms-12 col-md-6 col-lg-4">
          <div class="card card-tugas" data-aos="fade-up">
            <div class="card-body text-center p-5">
              <h5 class="card-title">Tugas Video 21st Century Skill</h5>
              <p class="card-text mt-3">Deadline : 29 Agustus 2021</p>
              <?php if($tugas2 === 'Sudah' ) : ?>
                <p class="text-center" style="color: green;">Tugas telah dikumpulkan</p>
              <?php endif; ?>
              <?php setting_tugas($settings, "#tugas2", 4); ?>
            </div>
          </div>
        </div>

        <div class="col-ms-12 col-md-6 col-lg-4">
          <div class="card card-tugas" data-aos="fade-up">
            <div class="card-body text-center p-5">
              <h5 class="card-title">Tugas Review Audio</h5>
              <p class="card-text mt-3">Deadline : 28 Agustus 2021</p>
              <?php if($tugas3 === 'Sudah' ) : ?>
                <p class="text-center" style="color: green;">Tugas telah dikumpulkan</p>
              <?php endif; ?>
              <?php setting_tugas($settings, "#tugas3", 5); ?>
            </div>
          </div>
        </div>

        <div class="col-ms-12 col-md-6 col-lg-4">
          <div class="card card-tugas" data-aos="fade-up">
            <div class="card-body text-center p-5">
              <h5 class="card-title">Tugas Esai Kemahasiswaan</h5>
              <p class="card-text mt-3">Deadline : 27 Agustus 2021</p>
              <?php if($tugas4 === 'Sudah' ) : ?>
                <p class="text-center" style="color: green;">Tugas telah dikumpulkan</p>
              <?php endif; ?>
              <?php setting_tugas($settings, "#tugas4", 6); ?>
            </div>
          </div>
        </div>
        <div class="col-ms-12 col-md-6 col-lg-4">
          <div class="card card-tugas" data-aos="fade-up">
            <div class="card-body text-center p-5">
              <h5 class="card-title">Tugas Ke-FISIP-an & Keorganisasian</h5>
              <p class="card-text mt-3">Deadline : 28 Agustus 2021 </p>
              <?php setting_tugas($settings, "#tugas5", 7); ?>
            </div>
          </div>
        </div>
      </div>

      <div class="row justify-content-center mt-3">
        <div class="col-ms-12 col-md-6 col-lg-4" >
          <div class="card card-tugas align-items-center" data-aos="fade-up">
            <div class="card-body text-center p-5">
              <p class="card-text">Stay tuned informasi penugasan di instagram @orasifisipunpad yaa! #SATUFISIPBANGGA</p>
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
                      <img class="img" src="img/penugasan/tugas-form.jpeg" width="100%" />
                    </div>
                  </div>
                  <div class="col-md-7">
                    <p class="mt-3 px-4">
                    Penugasan individu berupa pembuatan skema life mapping diri Arkamuda selama 5 tahun yang akan datang dengan dikemas sesuai kreatifitas Arkamuda.
                    </p>
                    <p class="px-4">Deadline : 22 Agustus 2021</p>
                    <?php if($tugas1 === 'Sudah' ) : ?>
                      <p class="text" style="color: green;">Tugas telah dikumpulkan : </p>
                      <a href="download.php?tabel=penugasan1&filename=<?= $penugasan1["nama_file"]; ?>" target="_new"><?= $penugasan1["nama_file"]; ?></a>
                    <?php endif; ?>

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
                      <img class="img" src="img/penugasan/tugas-video.jpeg" width="100%" />
                    </div>
                  </div>
                  <div class="col-md-7">
                    <p class="mt-3 px-4">
                    Penugasan kelompok berupa pembuatan video pengaplikasian Arkamuda terhadap 21st Century Skill dalam menjadi sosok pemimpin ideal di abad 21 dengan melibatkan seluruh anggota kelompok dan dibuat semenarik mungkin. 
                  </p>
                    <p class="px-4">Deadline : 29 Agustus 2021</p>
                    <?php if($tugas2 === 'Sudah' ) : ?>
                      <p class="text" style="color: green;">Tugas telah dikumpulkan : </p>
                      <a href="<?= $penugasan2["nama_file"]; ?>" target="_blank"><?= $penugasan2["nama_file"];?></a>
                    <?php endif; ?>

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
                      <img class="img" src="img/penugasan/tugas-audio.jpeg" width="100%" />
                    </div>
                  </div>
                  <div class="col-md-7">
                    <p class="mt-3 px-4">
                    Penugasan individu berupa pengulasan secara lisan atas rangkaian Orasi 2021 pada hari pertama, kedua, dan ketiga. 
                  </p>
                    <p class="px-4">Deadline : 28 Agustus 2021</p>
                    <?php if($tugas3 === 'Sudah' ) : ?>
                      <p class="text" style="color: green;">Tugas telah dikumpulkan : </p>
                      <audio controls>
                        <source src="file/penugasan3/<?= $penugasan3["nama_file"]; ?>" type="audio/mpeg">
                      </audio>
                    <?php endif; ?>


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
                      <img class="img" src="img/penugasan/tugas-esai.jpeg" width="100%" />
                    </div>
                  </div>
                  <div class="col-md-7">
                    <p class="mt-3 px-4">
                    Penugasan individu berupa pembuatan esai mengenai peran Arkamuda sebagai mahasiswa serta keterkaitannya dengan Tri Dharma Perguruan Tinggi. 
                    </p>
                    <p class="px-4">Deadline : 27 Agustus 2021</p>

                    <?php if($tugas4 === 'Sudah' ) : ?>
                      <p class="text" style="color: green;">Tugas telah dikumpulkan : </p>
                      <a href="download.php?tabel=penugasan4&filename=<?= $penugasan4["nama_file"]; ?>" target="_new"><?= $penugasan4["nama_file"]; ?></a>
                    <?php endif; ?>

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
                      <img class="img" src="img/penugasan/tugas-form.jpeg" width="100%" />
                    </div>
                  </div>
                  <div class="col-md-7">
                    <p class="mt-3 px-4">
                      Penugasan individu berupa pertanyaan yang harus dijawab oleh Arkamuda mengenai pengetahuan Kefisipan yang disampaikan pada Talkshow dan Keorganisasian yang disampaikan pada podcast.
                    </p>
                    <p class="px-4">Deadline : 28 Agustus 2021</p>
                    <div class=" text-center m-3">
                      <a href="https://docs.google.com/forms/d/e/1FAIpQLScWJjgO6C93cHZD3QRJIEvuw7xOm4iKjF47PemAk_z3EQPCqg/viewform">Link Form</a>
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
      navbarcollapse();
    </script>
  </body>
</html>
