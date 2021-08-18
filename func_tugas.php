<?php

function setting_tugas($settings, $nama, $index){
    if($settings[$index]['status_setting'] == "buka"){
      	echo '<button type="button" class="btn btn-primary mt-4" data-bs-toggle="modal" data-bs-target="'; 
      	echo $nama;
      	echo '">Detail</button>';
    }else{
		echo '<button type="button" class="btn btn-primary mt-4" data-bs-toggle="modal" data-bs-target="" disabled>Detail</button>';	
	}
}

function berhasil_mengumpulkan($nama_tugas){
	echo "<script> alert('Tugas "; 
	echo $nama_tugas; 
	echo " BERHASIL dikumpulkan!'); document.location.href = ''; </script>";
}

function gagal_mengumpulkan($nama_tugas){
	echo "<script> alert('Tugas "; 
	echo $nama_tugas;
	echo " GAGAL dikumpulkan!'); document.location.href = ''; </script>";
}

function verivikasi_tugas($settings, $index, $tabel, $nama_tugas){
	if($settings[$index]['status_setting'] == "buka"){
		// cek berhasil atau tidak
		if(submit($_POST, "$tabel") > 0){
		  berhasil_mengumpulkan("$nama_tugas");
		}else{
		  gagal_mengumpulkan("$nama_tugas");
		}
	  }else{
		gagal_mengumpulkan("$nama_tugas");
	  }
}

?>