<?php 

require 'functions.php'; 

if(isset($_POST["regist_panitia"])){
  if(registrasi_panitia($_POST) > 0){
    echo "<script>
            alert('Petugas baru BERHASIL terdaftar!');
            document.location.href = 'login-panitia.php';
          </script>";
  }else{
    echo "<script>
            alert('Petugas baru GAGAL terdaftar!');
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
            <a class="nav-link" href="dashboard-penugasan.php">Penugasan</a>
            <a class="nav-link" href="dashboard-absensi.php">Absensi</a>
            <a class="nav-link" href="login.html">Login</a>
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
              <h2 class="text-center">REGISTRASI PANITIA</h2>
              <div class="row">
                <div class="col">
                  <label for="nameInput" class="form-label">Nama Lengkap</label>
                  <input type="text" class="form-control" id="nameInput" placeholder="Masukkan Nama Lengkap" name="nama_panitia" value="<?php if(isset($_POST["regist_panitia"])){ echo $_POST['nama_panitia']; }?>" required/>
                </div>
              </div>
              <div class="row mt-2">
                <div class="col">
                  <label for="prodiInput" class="form-label">Divisi</label>
                  <input type="text" class="form-control" id="usernameInput" placeholder="Masukkan Divisi" name="divisi" value="<?php if(isset($_POST["regist_panitia"])){ echo $_POST['divisi']; }?>" required/>
                </div>
              </div>
              <div class="row mt-2">
                <div class="col">
                  <label for="prodiInput" class="form-label">Username</label>
                  <input type="text" class="form-control" id="usernameInput" placeholder="Masukkan Username" name="username_panitia" value="<?php if(isset($_POST["regist_panitia"])){ echo $_POST['username_panitia']; }?>" required/>
                </div>
              </div>
              <div class="row mt-2 g-2 mb-1">
                <div class="col-xs-12 col-md-6">
                  <label for="usernameInput" class="form-label">Password</label>
                  <input type="password" class="form-control" id="usernameInput" placeholder="Masukkan Password" name="password_panitia" value="<?php if(isset($_POST["regist_panitia"])){ echo $_POST['password_panitia']; }?>" required/>
                </div>
                <div class="col-xs-12 col-md-6">
                  <label for="passwordInput" class="form-label">Password</label>
                  <input type="password" class="form-control" id="passwordInput" placeholder="Konfirmasi Password" name="password2_panitia" value="<?php if(isset($_POST["regist_panitia"])){ echo $_POST['password2_panitia']; }?>" required />
                </div>
              </div>
              <div class="sign-button text-center">
                <button class="btn btn-primary align-self-center mt-5" type="submit" name="regist_panitia" style="width: 50%">Registrasi</button>
                <p class="mt-2 align-self-center">Sudah registrasi? <a href="login-panitia.php">Masuk Di sini</a></p>
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
