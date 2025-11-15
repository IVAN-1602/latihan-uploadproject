<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT DATA MAHASISWA</title>
</head>
<body style="background-color: #2f4f4f; color: white; font-family: Arial, sans-serif; padding: 20px; text-align: center;">

    <!-- Back Link -->
    <a href="index.php" style="color: #ffcc00; font-size: 18px; text-decoration: none; padding: 8px 16px; background-color: #333; border-radius: 4px; display: inline-block; margin-bottom: 20px;">KEMBALI</a>

    <h3 style="color: #ffcc00;">EDIT DATA MAHASISWA</h3>

    <?php
    // Include database connection
    include 'koneksi.php';
    
    // Retrieve the kode from URL parameters
    $kode = $_GET['Kode_Mahasiswa'];
    
    // Query to fetch the data
    $data = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE Kode_Mahasiswa='$kode'");
    $d = mysqli_fetch_array($data);

    // If successful, display success message
    if (isset($_GET['success'])) {
        echo '<div style="background-color: #4CAF50; color: white; padding: 10px; border-radius: 5px; margin-bottom: 20px;">Data berhasil diperbarui!</div>';
    }
    ?>

    <!-- Form -->
    <form method="post" action="ubah.php" style="max-width: 500px; margin: 0 auto; background-color: #f8f8f8; padding: 20px; border-radius: 8px; border: 1px solid #ddd;">
        <table style="width: 100%; margin-bottom: 20px;">
            <tr>
                <td style="padding: 10px; background-color: #4b8c8c; color: white;">Kode Mahasiswa</td>
                <td style="padding: 10px;"><input type="text" name="Kode_Mahasiswa_display" value="<?php echo $d['Kode_Mahasiswa']; ?>" disabled style="width: 100%; padding: 8px; border: 1px solid #ddd;"></td>
            </tr>
            <tr>
                <td style="padding: 10px; background-color: #4b8c8c; color: white;">Nama Mahasiswa</td>
                <td style="padding: 10px;"><input type="text" name="Nama_Mahasiswa" value="<?php echo $d['Nama_Mahasiswa']; ?>" style="width: 100%; padding: 8px; border: 1px solid #ddd;"></td>
            </tr>
            <tr>
                <td style="padding: 10px; background-color: #4b8c8c; color: white;">NIM</td>
                <td style="padding: 10px;"><input type="number" name="NIM" value="<?php echo $d['NIM']; ?>" style="width: 100%; padding: 8px; border: 1px solid #ddd;"></td>
            </tr>
            <tr>
                <td style="padding: 10px; background-color: #4b8c8c; color: white;">Jurusan</td>
                <td style="padding: 10px;"><input type="text" name="Jurusan" value="<?php echo $d['Jurusan']; ?>" style="width: 100%; padding: 8px; border: 1px solid #ddd;"></td>
            </tr>
            <tr>
                <td style="padding: 10px; background-color: #4b8c8c; color: white;">Alamat</td>
                <td style="padding: 10px;"><input type="text" name="Alamat" value="<?php echo $d['Alamat']; ?>" style="width: 100%; padding: 8px; border: 1px solid #ddd;"></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">
                    <input type="submit" value="SIMPAN" style="padding: 10px 20px; background-color: #333; color: white; border: none; border-radius: 4px; cursor: pointer;">
                </td>
            </tr>
        </table>
    </form>

</body>
</html>
