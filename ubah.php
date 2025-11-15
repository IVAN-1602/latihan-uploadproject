<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form
$kode    = $_POST['Kode_Mahasiswa'];
$nama    = $_POST['Nama_Mahasiswa'];
$nim     = $_POST['NIM'];
$jurusan = $_POST['Jurusan'];
$alamat  = $_POST['Alamat'];

// update data ke database
mysqli_query($koneksi, "UPDATE mahasiswa SET Nama_Mahasiswa='$nama', NIM='$nim', Jurusan='$jurusan', Alamat='$alamat' WHERE Kode_Mahasiswa='$kode'");

// mengalihkan halaman kembali ke index.php
header("Location: index.php");
?>