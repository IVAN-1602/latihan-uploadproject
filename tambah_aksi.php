<?php

include 'koneksi.php';

$kode   = $_POST['Kode_Mahasiswa'];
$nama   = $_POST['Nama_Mahasiswa'];
$NIM    = $_POST["NIM"];
$jurusan= $_POST["Jurusan"];
$alamat = $_POST['Alamat'];
    
mysqli_query($koneksi, "INSERT INTO mahasiswa (Kode_Mahasiswa, Nama_Mahasiswa, NIM, Jurusan, Alamat) VALUES ('$kode', '$nama', '$NIM', '$jurusan', '$alamat')");

header("Location: index.php");
?>