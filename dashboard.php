<?php
session_start();

if(!isset($_SESSION["login_panitia"])){

  echo "<script>
            alert('Login Terlebih Dahulu!');
            document.location.href = 'login-panitia.php';
        </script>";
  exit;
}  

require 'functions.php';
$students = query("SELECT * FROM peserta");

//tombol cari ditekan
if(isset($_POST["cari"])){
  $students = cari($_POST["kata_kunci"]);
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
            <a class="nav-link" href="logout.php">Logout</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- akhir navbar -->

    <div class="container-fluid">
      <table class="table align-middle mt-4">
        <thead>
          <tr>
            <th scope="col">Username</th>
            <th scope="col">Nama</th>
            <th scope="col">Prodi</th>
            <th scope="col">tugas1</th>
            <th scope="col">tugas2</th>
            <th scope="col">tugas3</th>
            <th scope="col">absen1</th>
            <th scope="col">absen2</th>
            <th scope="col">absen3</th>
            <th scope="col">password</th>
          </tr>
        </thead>
        <tbody>
        <?php  foreach($students as $student): ?>
          <?php $username_peserta = $student["username_peserta"]; ?>  
          <tr>
            <td><?= $student["username_peserta"]; ?></td>
            <th scope="row"><?= $student["nama_peserta"]; ?></th>
            <td><?= $student["program_studi"]; ?></td>
            <td><?= $student["tugas1"]; ?></td>
            <td><?= $student["tugas2"]; ?></td>
            <td><?= $student["tugas3"]; ?></td>
            <td><?= $student["absen1"]; ?></td>
            <td><?= $student["absen2"]; ?></td>
            <td><?= $student["absen3"]; ?></td>
            <td><?= $student["password_peserta"]; ?></td>
            <td>
              <a href="ubah.php?username_peserta=<?= $student["username_peserta"]; ?>" onclick="return confirm('Ubah data <?= $username_peserta ?> ?')">Ubah</a> | 
              <a href="hapus.php?username_peserta=<?= $student["username_peserta"]; ?>" onclick="return confirm('Hapus data <?= $username_panitia ?> ?')">Hapus</a>
            </td>
          </tr>
          <?php  endforeach; ?>
        </tbody>
      </table>
    </div>

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
