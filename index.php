<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: #2f4f4f; color: white; font-family: Arial, sans-serif;">
    <br/><br/>
    <center>
        <table border="1" style="border-collapse: collapse; width: 80%; color: #333; background-color: #f8f8f8;">
            <tr style="background-color: #4b8c8c; color: white; padding: 6px;">
                <th>NO</th>
                <th>Kode Mahasiswa</th>
                <th>Nama Mahasiswa</th>
                <th>NIM</th>
                <th>Jurusan</th>
                <th>Alamat</th>
                <th>OPSI</th>
            </tr>

            <?php
            include 'koneksi.php';  // Koneksi ke database

            $no = 1;
            $data = mysqli_query($koneksi, "SELECT * FROM mahasiswa"); // Ganti tabel ke mahasiswa

            while ($d = mysqli_fetch_array($data)) {
            ?>
                <tr style="background-color: #e0f7fa; padding: 6px;">
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['Kode_Mahasiswa']; ?></td>
                    <td><?php echo $d['Nama_Mahasiswa']; ?></td>
                    <td><?php echo $d['NIM']; ?></td>
                    <td><?php echo $d['Jurusan']; ?></td>
                    <td><?php echo $d['Alamat']; ?></td>
                    <td>
                        <a href="update.php?Kode_Mahasiswa=<?php echo $d['Kode_Mahasiswa']; ?>" style="color: #ffcc00; text-decoration: none;">UPDATE</a> |
                        <a href="delete.php?Kode_Mahasiswa=<?php echo $d['Kode_Mahasiswa']; ?>" style="color: #ffcc00; text-decoration: none;">DELETE</a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </table>
    </center>
    <center>
        <a href="form.php" style="color: #ffcc00; font-size: 18px; text-decoration: none; padding: 8px 16px; background-color: #333; border-radius: 4px; margin-top: 20px; display: inline-block;">+ TAMBAH MAHASISWA</a>
    </center>
</body>
</html>
