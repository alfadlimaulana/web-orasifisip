<?php 
// Koneksi ke database

// $conn = mysqli_connect("localhost", "root", "", "orasi_fisip");
$conn = mysqli_connect("localhost", "u263889387_wafifz", "AdminWafiFadli8", "u263889387_orasi_fisip");

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

function registrasi_peserta($data){
	global $conn;

	$nama_peserta = htmlspecialchars(stripcslashes($data["nama_peserta"]));
	$program_studi = htmlspecialchars(strtolower(stripcslashes($data["program_studi"])));
	$kelompok = htmlspecialchars(strtolower(stripcslashes($data["kelompok"])));
	$username_peserta = htmlspecialchars(strtolower(stripcslashes($data["username_peserta"])));
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
	$password_peserta_enkripsi = password_hash($password_peserta, PASSWORD_DEFAULT);

	//insert petugas ke database
	mysqli_query($conn, "INSERT INTO peserta VALUES
						 ('$username_peserta', '$nama_peserta', '$program_studi', '$kelompok', NULL,  NULL,  NULL, '$password_peserta_enkripsi')");

	return mysqli_affected_rows($conn);
}

function upload($penugasan){
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
	$ekstensi_valid = ['pdf ', 'png', 'jpg', 'jpeg', 'png', 'pdf', 'mp3', 'wav', 'wma', 'm4a'];
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
	move_uploaded_file($temp, 'file/' . $penugasan . '/' . $nama_file);

	//return nama file baru untuk diinsert
	return $nama_file;
}

function submit($data, $penugasan){
	global $conn;
	//ambil data dari tiap elemen dalam form
	$username_peserta = htmlspecialchars($data["username_peserta"]);
	$nama_peserta = htmlspecialchars($data["nama_peserta"]);
	$kelompok = htmlspecialchars($data["kelompok"]);
	//upload gambar
	$file = upload($penugasan);

	$id_tugas = $nama_peserta . '_' . $penugasan;

	if(!$file){return false;}

	//query insert data ke tabel penugasan
	$query = "INSERT INTO $penugasan VALUES
	('$id_tugas', '$nama_peserta', '$kelompok', '$file', NOW(),  NULL, '$username_peserta')";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function submit_link($data, $penugasan){
	global $conn;
	//ambil data dari tiap elemen dalam form
	$username_peserta = htmlspecialchars($data["username_peserta"]);
	$nama_peserta = htmlspecialchars($data["nama_peserta"]);
	$kelompok = htmlspecialchars($data["kelompok"]);
	//upload gambar
	$link_tugas_video = htmlspecialchars($data["link_tugas_video"]);

	$id_tugas = $nama_peserta . '_' . $penugasan;

	//query insert data ke tabel penugasan
	$query = "INSERT INTO $penugasan VALUES
	('$id_tugas', '$nama_peserta', '$kelompok', '$link_tugas_video', NOW(),  NULL, '$username_peserta')";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function absensi($data, $absen){
	global $conn;
	//ambil data dari tiap elemen dalam form
	$username_peserta = htmlspecialchars($data["username_peserta"]);

	//query insert data ke tabel penugasan
	$query = "UPDATE peserta SET $absen = NOW() WHERE username_peserta = '$username_peserta'";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function cari_tugas($tabel, $kata_kunci){
	$query = "SELECT * FROM $tabel
			  WHERE id_tugas LIKE '%$kata_kunci%' 
			  OR nama_peserta LIKE '%$kata_kunci%'
			  OR kelompok LIKE '%$kata_kunci%'
			  OR username_peserta LIKE '%$kata_kunci%'
			  ";
	return query($query);
}

function cari_fasil($tabel, $kata_kunci){
	$query = "SELECT * FROM $tabel
			  WHERE nama_fasil LIKE '%$kata_kunci%' 
			  OR kelompok LIKE '$kata_kunci'
			  ";
	return query($query);
}

function input_nilai($tabel, $data){
	global $conn;
	//ambil data dari tiap elemen dalam form
	$id_tugas = htmlspecialchars($data["id_tugas"]);

	//query update data
	$query = "UPDATE $tabel SET 
				penilaian = 'Done'
			  WHERE id_tugas = '$id_tugas'
			  ";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

//pagination
function pagination($tabel){
	$jumlah_data_per_halaman = 5;
	$jumlah_data = count(query("SELECT * FROM $tabel"));
	$jumlah_halaman = ceil($jumlah_data / $jumlah_data_per_halaman);
	$halaman_aktif = ( isset($_GET["halaman"]) ) ? $_GET["halaman"] : 1;

	$data_awal = ($jumlah_data_per_halaman * $halaman_aktif) - $jumlah_data_per_halaman;

	$students = query("SELECT * FROM $tabel LIMIT $data_awal, $jumlah_data_per_halaman");

	return $students;
	
}

function wajib_login($page){
	if(isset($_SESSION["login_peserta"]) or isset($_SESSION["login_panitia"])){
	}else{
		echo "<script>
			alert('Mohon Login terlebih dahulu.');
			document.location.href = '$page';
			</script>";
		exit;
	}
}

function ubah_setting($status, $data){
	global $conn;
	//ambil data dari tiap elemen dalam form
	$id_setting = htmlspecialchars($data["id_setting"]);

	//query update data
	$query = "UPDATE settings SET 
				status_setting = '$status'
			  WHERE id_setting = '$id_setting'
			  ";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}
?>

