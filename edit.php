<?php 

	if($_SERVER['REQUEST_METHOD']=='POST'){
		//MEndapatkan Nilai Dari Variable 
		$id = $_POST['id'];
		$nama = $_POST['nama'];
		$nim = $_POST['nim'];
		$alamat = $_POST['alamat'];
		
		//import file koneksi database 
		require_once('koneksi.php');
		
		//Membuat SQL Query
		$sql = "UPDATE biodata SET nama = '$nama', nim = '$nim', alamat = '$alamat' WHERE id = $id;";
		
		//Meng-update Database 
		if(mysqli_query($con,$sql)){
			echo 'Berhasil Update Data Biodata';
		}else{
			echo 'Gagal Update Data Biodata';
		}
		
		mysqli_close($con);
	}
?>