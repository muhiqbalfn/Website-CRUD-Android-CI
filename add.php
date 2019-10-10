<?php

	if($_SERVER['REQUEST_METHOD']=='POST'){
		
		//Mendapatkan Nilai Variable
		$id = $_POST['id'];
		$nama = $_POST['nama'];
		$nim = $_POST['nim'];
		$alamat = $_POST['alamat'];
		
		//Pembuatan Syntax SQL
		$sql = "INSERT INTO biodata (id,nama,nim,alamat) VALUES ('$id','$nama','$nim','$alamat')";
		
		//Import File Koneksi database
		require_once('koneksi.php');
		
		//Eksekusi Query database
		if(mysqli_query($con,$sql)){
			echo 'Berhasil Menambahkan Biodata';
		}else{
			echo 'Gagal Menambahkan Biodata';
		}
		
		mysqli_close($con);
	}
?>