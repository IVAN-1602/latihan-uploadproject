<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; background-color: #511a1aff;">
    <div style="width: 420px;">
        <h3 style="text-align: center; margin-bottom: 12px;">FORM MAHASISWA</h3>
        <form method="post" action="tambah_aksi.php" style="display: block;">
            <fieldset style="border: 2px solid #000000; padding: 16px; border-radius: 8px;  background-color: #532929ff;">
                <table style="width: 100%; border-collapse: collapse;">
                    <tr>
                        <td style="padding: 6px; vertical-align: middle;">Kode Mahasiswa</td>
                        <td style="padding: 6px;"><input type="text" name="Kode_Mahasiswa" style="width: 100%; box-sizing: border-box;"></td>
                    </tr>
                    <tr>
                        <td style="padding: 6px; vertical-align: middle;">Nama Mahasiswa</td>
                        <td style="padding: 6px;"><input type="text" name="Nama_Mahasiswa" style="width: 100%; box-sizing: border-box;"></td>
                    </tr>
                    <tr>
                        <td style="padding: 6px; vertical-align: middle;">NIM</td>
                        <td style="padding: 6px;"><input type="text" name="NIM" style="width: 100%; box-sizing: border-box;"></td>
                    </tr>
                    <tr>
                        <td style="padding: 6px; vertical-align: middle;">Jurusan</td>
                        <td style="padding: 6px;"><input type="text" name="Jurusan" style="width: 100%; box-sizing: border-box;"></td>
                    </tr>
                    <tr>
                        <td style="padding: 6px; vertical-align: middle;">Alamat</td>
                        <td style="padding: 6px;"><input type="text" name="Alamat" style="width: 100%; box-sizing: border-box;"></td>
                    </tr>
                    <tr>
                        <td colspan="2" style="padding: 6px; text-align: center;">
                            <input type="submit" value="Simpan" style="padding: 8px 16px;">
                        </td>   
                    </tr>
                </table>
            </fieldset>
        </form>
    </div>
</body>
</html>
