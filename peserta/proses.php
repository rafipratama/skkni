<?php

	include 'koneksi.php';
	if (@$_GET['ambil'] == 'tambah_peserta') 
	{
	  $nama       = $_POST['nama'];
	  $nik    = $_POST['nik'];
	  $hp     = $_POST['hp'];
	  $email       = $_POST['email'];
	  $skema_sertifikasi    = $_POST['skema_sertifikasi'];
	  $tempat_uji_kompetensi     = $_POST['tempat_uji_kompetensi'];
	  $rekomendasi     = $_POST['rekomendasi'];
	  $tanggal_terbit_sertifikat    = date("Y-m-d",strtotime($_POST['tanggal_terbit_sertifikat']));
	  $tanggal_lahir    = date("Y-m-d",strtotime($_POST['tanggal_lahir']));
	  $organisasi          	= $_POST['organisasi'];
	$alamat          	= $_POST['alamat'];
	  mysqli_query($koneksi,"INSERT INTO data_peserta (nama,nik,hp,email,skema_sertifikasi,tempat_uji_kompetensi,rekomendasi,tanggal_terbit_sertifikat,tanggal_lahir,organisasi,alamat) 
	  VALUES ('$nama','$nik','$hp','$email','$skema_sertifikasi','$tempat_uji_kompetensi','$rekomendasi','$tanggal_terbit_sertifikat','$tanggal_lahir','$organisasi','$alamat')");

	  header('location:peserta.php?&ms=1');
	}

	else if(@$_GET['ambil'] == 'edit_peserta') 
	{
	  $nama       = $_POST['nama'];
	  $nik    = $_POST['nik'];
	  $hp     = $_POST['hp'];
	  $email       = $_POST['email'];
	  $skema_sertifikasi    = $_POST['skema_sertifikasi'];
	  $tempat_uji_kompetensi     = $_POST['tempat_uji_kompetensi'];
	  $rekomendasi     = $_POST['rekomendasi'];
	  $tanggal_terbit_sertifikat    = date("Y-m-d",strtotime($_POST['tanggal_terbit_sertifikat']));
	  $tanggal_lahir    = date("Y-m-d",strtotime($_POST['tanggal_lahir']));
	  $organisasi          	= $_POST['organisasi'];
	  $mysqli_query=mysqli_query($koneksi,"UPDATE data_peserta set  nama ='$nama',hp='$hp',email='$email',skema_sertifikasi='$skema_sertifikasi',tempat_uji_kompetensi='$tempat_uji_kompetensi',rekomendasi='$rekomendasi',tanggal_terbit_sertifikat='$tanggal_terbit_sertifikat',tanggal_lahir='$tanggal_lahir',organisasi='$organisasi' WHERE nik = '$nik'"); 
	  header('location:peserta.php?&ms=2');
	}

	elseif (@$_GET['ambil'] == 'hapus_peserta') 
	{
	  $nik=$_GET['nik'];
	  $query=mysqli_query($koneksi,"DELETE FROM data_peserta WHERE nik='$nik'");

	 header('location:peserta.php?&ms=3');
	}

?>