<?php 
// Koneksi ke database

$conn = mysqli_connect("localhost", "root", "", "orasi_fisip");

// Koneksi ke database
function query($query){
	global $conn;

	$result = mysqli_query($conn, $query);
	$rows = [];

	while($row = mysqli_fetch_assoc($result)){
		$rows[] = $row;
	}
	return $rows;
}

function registrasi_panitia($data){
	global $conn;

	$nama_panitia = strtolower(stripcslashes($data["nama_panitia"]));
	$divisi = strtolower(stripcslashes($data["divisi"]));
	$username_panitia = strtolower(stripcslashes($data["username_panitia"]));
	$password_panitia = mysqli_real_escape_string($conn, $data["password_panitia"]);
	$password2_panitia = mysqli_real_escape_string($conn, $data["password2_panitia"]);

	//username harus unik
	$result = mysqli_query($conn, "SELECT username_panitia FROM panitia
								   WHERE username_panitia = '$username_panitia'");

	if(mysqli_fetch_assoc($result)){
		echo "<script>
            	alert('Username telah terdaftar!');
          	  </script>";

        return false;
	}

	//validasi password
	if($password_panitia !== $password2_panitia){
		echo "<script>
            	alert('Konfirmasi password tidak sesuai!');
          	  </script>";

        return false;
	}

	//enkripsi password
	//$password_panitia_enkripsi = password_hash($password_panitia, PASSWORD_DEFAULT);

	//insert petugas ke database
	mysqli_query($conn, "INSERT INTO panitia VALUES
						 ('$username_panitia', '$nama_panitia', '$divisi', '$password_panitia')");

	return mysqli_affected_rows($conn);
}

function registrasi_peserta($data){
	global $conn;

	$nama_peserta = strtolower(stripcslashes($data["nama_peserta"]));
	$program_studi = strtolower(stripcslashes($data["program_studi"]));
	$kelompok = strtolower(stripcslashes($data["kelompok"]));
	$username_peserta = strtolower(stripcslashes($data["username_peserta"]));
	$password_peserta = mysqli_real_escape_string($conn, $data["password_peserta"]);
	$password2_peserta = mysqli_real_escape_string($conn, $data["password2_peserta"]);

	//username harus unik
	$result = mysqli_query($conn, "SELECT username_peserta FROM peserta
								   WHERE username_peserta = '$username_peserta'");

	if(mysqli_fetch_assoc($result)){
		echo "<script>
            	alert('Username telah terdaftar!');
          	  </script>";

        return false;
	}

	//validasi password
	if($password_peserta !== $password2_peserta){
		echo "<script>
            	alert('Konfirmasi password tidak sesuai!');
          	  </script>";

        return false;
	}

	//enkripsi password
	//$password_panitia_enkripsi = password_hash($password_panitia, PASSWORD_DEFAULT);

	//insert petugas ke database
	mysqli_query($conn, "INSERT INTO peserta VALUES
						 ('$username_peserta', '$nama_peserta', '$program_studi', '$kelompok', NULL,  NULL,  NULL, '$password_peserta')");

	return mysqli_affected_rows($conn);
}

function upload(){
	$nama_file = $_FILES["file"]["name"];
	$ukuran_file = $_FILES["file"]["size"];
	$error = $_FILES["file"]["error"];
	$temp = $_FILES["file"]["tmp_name"];

	//cek gambar dipuload

	if($error === 4){
		echo "<script>
				alert('Pilih file terlebih dahulu!');
			  </script>";
		return false;
	}

	//cek yg diupload harus gambar
	$ekstensi_valid = ['jpg', 'jpeg', 'png', 'pdf', 'doc', 'docx'];
	//split nama file
	$ekstensi_file = explode('.', $nama_file);
	//amnil ektensi
	$ekstensi_file = strtolower(end($ekstensi_file));
	//cek ekstensi valid
	if(!in_array($ekstensi_file, $ekstensi_valid)){
		echo "<script>
				alert('Format file salah!');
			  </script>";
		return false;
	}

	//cek ukuran
	if($ukuran_file > 5000000){
		echo "<script>
				alert('Ukuran file terlalu besar!');
			  </script>";
		return false;
	}

	//lolos cek, file diupload

	
	//upload ke directory
	move_uploaded_file($temp, 'file/' . $nama_file);

	//return nama file baru untuk diinsert
	return $nama_file;
}

function submit($data, $penugasan){
	global $conn;
	//ambil data dari tiap elemen dalam form
	$username_peserta = htmlspecialchars($data["username_peserta"]);
	//upload gambar
	$file = upload();

	$id_tugas = $username_peserta . '_' . $penugasan;

	if(!$file){return false;}

	//query insert data ke tabel penugasan
	$query = "INSERT INTO $penugasan VALUES
	('$id_tugas', '$file', NOW(),  NULL, '$username_peserta')";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}