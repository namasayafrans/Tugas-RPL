<?php
session_start();
include "koneksi.php";
?>
<!DOCTYPE html>
<head>
    <title>Halaman daftar</title>
    <style>
        /* Masukkan gaya CSS di sini */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h3 {
            color: #333;
            text-align: center;
        }

        table {
            width: 100%;
        }

        td {
            padding: 10px;
        }

        input {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            margin-bottom: 10px;
        }

        button {
            background-color: #3498db;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: #2980b9;
        }

        a {
            display: block;
            text-align: center;
            margin-top: 10px;
            text-decoration: none;
            color: #333;
        }

        a:hover {
            color: #3498db;
        }
    </style>
</head>
<body>
   <?php
        if(isset($_POST['username'])){
            $nama = $_POST['nama'];
            $username = $_POST['username'];
            $password = $_POST['password']; 

            $query = mysqli_query($koneksi, "INSERT INTO user(nama,username,password) values('$nama','$username','$password')");
            if($query) {
                echo '<script>alert("Selamat, pendaftaran anda berhasil. Silahkan login.")</script>';
            }else{
                echo '<script>alert("pendaftaran gagal.")</script>';
            }
        }
   ?>
    <form method="post">
        <table align="center">
            <tr>
                <td colspan="2" align="center">
                    <h3>Pendaftaran User</h3>
                </td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <tr>
                    <td></td>
                    <td>
                        <button type="submit">Daftar User</button>
                        <a href="login.php">login</a>
                    </td>
                </tr>
            </tr>
        </table>
    </form>
</body>
</html>