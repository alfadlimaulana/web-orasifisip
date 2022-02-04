<?php 
function setting_absensi($students, $absen, $settings, $nama, $index){
    if( $students[$absen] == NULL && $settings[$index]['status_setting'] == "buka"){
      	echo '<button type="submit" class="btn btn-primary" name="'; 
      	echo $nama;
      	echo '">Absen</button>';
    }
}

function cek_hadir($students, $tabel){
	if($students[$tabel] != NULL){
		echo "Hadir";
	}else{
		echo "Tidak Hadir";
	}
}

function berhasil_absen($nama_absen){
	echo "<script> alert('"; 
	echo $nama_absen; 
	echo " BERHASIL!'); document.location.href = ''; </script>";
}

function gagal_absen($nama_absen){
	echo "<script> alert('"; 
	echo $nama_absen;
	echo " GAGAL!'); document.location.href = ''; </script>";
}

function verivikasi_absen($settings, $index, $tabel, $nama_absen){
	if($settings[$index]['status_setting'] == "buka"){
		// cek berhasil atau tidak
		if(absensi($_POST, "$tabel") > 0){
		  berhasil_absen("$nama_absen");
		}else{
		  gagal_absen("$nama_absen");
		}
	  }else{
		gagal_absen("$nama_absen");
	  }
}
?>