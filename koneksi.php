<?php
$koneksi = mysqli_connect("localhost", "root", "mysql", "data2");

if (mysqli_connect_error()) {
    echo "Koneksi database gagal: " . mysqli_connect_error();
} else {
    echo "Koneksi berhasil!";
}
?>
