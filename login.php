<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class='container'>
        <h2> Login </h2>
        <form method="post">
            <fieldset>
            <table>
                <tr>
                    <td>
                        <label for="username">Masukan Username</label>
                    </td>
                    <td>:</td>
                    <td>
                        <input type="text" name="username" placeholder="username"><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="password">Masukan Password</label>
                    </td>
                    <td>:</td>
                    <td>
                        <input type="password" name="password" placeholder="pass"><br>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align:center">
                        <button type="submit" name="login">LOGIN</button><br>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align:center">
                        <p>belum punya akun? <a href="register.php">daftar</a></p>
                    </td>
                </tr>
            </table>
            </fieldset>
        </form>
    </div>
</body>
</html>
