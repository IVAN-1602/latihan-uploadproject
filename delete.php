<?php
// koneksi database
include 'koneksi.php';

// menangkap data Kode_Mahasiswa yang dikirim dari url
$kode = $_GET['Kode_Mahasiswa'];

// menghapus data dari database
mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE Kode_Mahasiswa='$kode'");

// mengalihkan halaman kembali ke index.php
header("Location: index.php");
?>

