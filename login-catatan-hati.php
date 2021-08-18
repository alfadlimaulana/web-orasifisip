<?php 

session_start();
require 'functions.php';

//cek cookie
if(isset($_COOKIE["username"]) && isset($_COOKIE["key"])){
  $username = $_COOKIE["username"];
  $key = $_COOKIE["key"];

  //ambil username dari database
  $result = mysqli_query($conn, "SELECT username_panitia FROM panitia WHERE username_panitia = '$username'");
  $database = mysqli_fetch_assoc($result);

  //cek cookie dan username
  if($key === hash('sha256', $database['username_panitia'])){
    $_SESSION["login_panitia"] = true;
  }
}

//cek session
if(isset($_SESSION["login_panitia"])){
  echo "<script>
            alert('Anda telah login');
            document.location.href = 'dashboard.php';
        </script>";
  exit;
} 

if(isset($_POST["login_panitia"])){
  
  $username_panitia = $_POST["username_panitia"];
  $password_panitia = $_POST["password_panitia"];
  
  $result = mysqli_query($conn, "SELECT * FROM panitia WHERE username_panitia = '$username_panitia'");
  $result2 = mysqli_query($conn, "SELECT * FROM panitia WHERE password_panitia = '$password_panitia'");

  //cek username
  if(mysqli_num_rows($result) === 1 && mysqli_num_rows($result2) === 1){
    //cek password
    $database = mysqli_fetch_assoc($result);
    //if(password_verify($password_panitia, $database["password_panitia"])){
      
      //set session
      $_SESSION["login_panitia"] = $username_panitia;

      //cek tetap masuk
      if(isset($_POST["keep_login"])){
        //buat cookie
        setcookie('username', $database['username_panitia'], time()+300);
        setcookie('key', hash('sha256', $database['username_panitia']), time()+300);
      }

      header("Location: dashboard.php");
      exit;
    //}
  }
  
  $error = true;
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

    <!-- icon -->
    <link rel="shortcut icon" href="img/logo-favicon-panitia.ico" />

    <title>Orasi Fisip Unpad</title>
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
      <div class="container-fluid">
      <a class="navbar-brand" href="dashboard.php"> <img src="img/Logo w text.svg" alt="logo" width="auto" height="40" class="d-inline-block align-text-top" style="box-sizing: border-box" /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>
    <!-- akhir navbar -->



    <!-- login container -->
    <form action="" method="post">
      <div class="sign-bg">
        <div class="container">
          <!-- apabila error -->
          <?php if(isset($error)) : ?>
            <p class="text-center" style="color:red; font-style: italic;">username / password salah</p>
          <?php endif; ?>  
          <!-- akhir apabila error -->
          <div class="row d-flex align-items-center justify-content-center pt-5 mx-2 g-3">
            <div class="sign-form align-self-center col-md-8 col-lg-6 mb-4 p-5">
              <h2 class="text-center">LOG IN PANITIA</h2>
              <label for="usernameInput" class="form-label mt-3 mb-1">Username</label>
              <input type="text" class="form-control" id="usernameInput" placeholder="Masukkan Usename" name="username_panitia" value="<?php if(isset($_POST["login_panitia"])){ echo $_POST['username_panitia']; }?>" required/>
              <label for="passwordInput" class="form-label mt-2 mb-1">Password</label>
              <input type="password" class="form-control" id="passwordInput" placeholder="Masukkan Password" name="password_panitia" value="<?php if(isset($_POST["login_panitia"])){ echo $_POST['password_panitia']; }?>" required/>
              <div class="form-check mt-1">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" name="keep_login"/>
                <label class="form-check-label" for="defaultCheck1"> Ingat Saya </label>
              </div>
              <div class="sign-button text-center">
                <button href="#" class="btn btn-primary mt-4" type="submit" name="login_panitia" style="width: 50%">LOG IN</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
    <!-- akhir login container -->

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
