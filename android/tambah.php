<?php
  
	if($_SERVER['REQUEST_METHOD']=='POST'){
		
		//Mendapatkan Nilai Variable
		$nama = $_POST['nama'];
		$nohp = $_POST['nohp'];
		$alamat = $_POST['alamat'];
		$jk = $_POST['jk'];
		
		//Pembuatan Syntax SQL
		$sql = "INSERT INTO `haji`(`nama`, `nohp`, `alamat`, `jk`) VALUES ('$nama', '$nohp', '$alamat', '$jk')";
		//$sql = "INSERT INTO tb_pegawai (nama,posisi,gajih) VALUES ('$name','$desg','$sal')";
		
		//Import File Koneksi database
		require_once('koneksi.php');
		
		//Eksekusi Query database
		if(mysqli_query($con,$sql)){
		echo 'Berhasil Menambahkan Haji';
		}else{
		echo 'Gagal Menambahkan Haji';
		}
		
		mysqli_close($con);
	}
?>