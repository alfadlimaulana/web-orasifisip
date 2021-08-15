<?php 

require 'functions.php'; 

if(isset($_POST["regist_peserta"])){
  if(registrasi_peserta($_POST) > 0){
    echo "<script>
            alert('Peserta baru BERHASIL registrasi!');
            document.location.href = 'login.php';
          </script>";
  }else{
    echo "<script>
            alert('Peserta baru GAGAL terdaftar!');
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
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand d-flex align-items-center" href="index.php" style="font-weight: 490;"> <img src="img/Logo w text.svg" alt="logo" width="auto" height="40" class="d-inline-block align-text-top" style="box-sizing: border-box" /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ms-auto">
            <a class="nav-link" href="panitia.php">Panitia</a>
            <a class="nav-link" href="login.php">Login</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- akhir navbar -->

    <!-- sign up container -->
    <form action="" method="post">
      <div class="sign-bg">
        <div class="container">
          <div class="row d-flex align-items-center justify-content-center pt-5 mx-2 g-3">
            <div class="sign-form align-self-center col-md-8 col-lg-6 mb-4 p-5">
              <h2 class="text-center">REGISTRASI</h2>
              <div class="row">
                <div class="col">
                  <label for="nameInput" class="form-label">Nama Lengkap</label>
                  <input type="text" class="form-control" id="nameInput" placeholder="Masukkan Nama Lengkap" name="nama_peserta" value="<?php if(isset($_POST["regist_peserta"])){ echo $_POST['nama_peserta']; }?>" required/>
                </div>
              </div>
              <div class="row mt-2">
              <div class="col">
                <label class="form-label" for="inputGroupSelect01">Program Studi</label>
                <select class="form-select" name="program_studi" id="inputGroupSelect01">
                  <option selected>Pilih Prodi</option>
                  <option value="D4 Administrasi Keuangan Publik">D4 Administrasi Keuangan Publik</option>
                  <option value="D4 Administrasi Pemerintahan">D4 Administrasi Pemerintahan</option>
                  <option value="D4 Bisnis Logistik">D4 Bisnis Logistik</option>
                  <option value="D4 Kearsipan Digital">D4 Kearsipan Digital</option>
                  <option value="S1 Administrasi Publik">S1 Administrasi Publik</option>
                  <option value="S1 Hubungan Internasional">S1 Hubungan Internasional</option>
                  <option value="S1 Kesejahteraan Sosial">S1 Kesejahteraan Sosial</option>
                  <option value="S1 Ilmu Pemerintahan">S1 Ilmu Pemerintahan</option>
                  <option value="S1 Antropologi">S1 Antropologi</option>
                  <option value="S1 Administrasi Bisnis">S1 Administrasi Bisnis</option>
                  <option value="S1 Sosiologi">S1 Sosiologi</option>
                  <option value="S1 Ilmu Politik">S1 Ilmu Politik</option>
                  <option value="S1 Administrasi Bisnis PSDKU">S1 Administrasi Bisnis PSDKU</option>
                </select>
              </div>
            </div>
              <div class="row mt-2">
                <div class="col">
                  <label for="kelInput" class="form-label">Kelompok</label>
                  <input type="text" class="form-control" id="kelInput" placeholder="Masukkan Kelompok" name="kelompok" value="<?php if(isset($_POST["regist_peserta"])){ echo $_POST['kelompok']; }?>" required/>
                </div>
              </div>
              <div class="row mt-2">
                <div class="col">
                  <label for="usernameInput" class="form-label">Username</label>
                  <input type="text" class="form-control" id="usernameInput" placeholder="Masukkan Username" name="username_peserta" value="<?php if(isset($_POST["regist_peserta"])){ echo $_POST['username_peserta']; }?>" required/>
                </div>
              </div>
              <div class="row mt-2 g-2 mb-1">
                <div class="col-xs-12 col-md-6">
                  <label for="passInput" class="form-label">Password</label>
                  <input type="password" class="form-control" id="passInput" placeholder="Masukkan Password" name="password_peserta" value="<?php if(isset($_POST["regist_peserta"])){ echo $_POST['password_peserta']; }?>" required/>
                </div>
                <div class="col-xs-12 col-md-6">
                  <label for="pass2Input" class="form-label">Konfirmasi Pasword</label>
                  <input type="password" class="form-control" id="pass2Input" placeholder="Konfirmasi Password" name="password2_peserta" value="<?php if(isset($_POST["regist_peserta"])){ echo $_POST['password2_peserta']; }?>" required />
                </div>
              </div>
              <div class="sign-button text-center">
                <button class="btn btn-primary align-self-center mt-5" type="submit" name="regist_peserta" style="width: 50%">Registrasi</button>
                <p class="mt-2 align-self-center">Sudah registrasi? <a href="login.php">Masuk Di sini</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
    <!-- akhir sign up container -->

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
