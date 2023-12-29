<?php
session_start();
$host = 'localhost';
 $user = 'root';
 $pass = '';
 $dbname = 'ada_store';
 $con = mysqli_connect($host ,$user, $pass, $dbname);

if (isset($_POST['submit'])) {

    $username = mysqli_real_escape_string($con, $_POST['username']); 
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $sql = "SELECT * FROM user WHERE nama='$username' AND password='$password'";

    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) == 1) {
        // jika data ditemukan, simpan data ke session dan redirect ke halaman dashboard
        $data = mysqli_fetch_assoc($result);
        $_SESSION['id'] = $data['id'];
        $_SESSION['nama'] = $data['nama'];
        $_SESSION['level'] = $data['level']; //simpan juga level sebagai penanda hak akses
        
        if ($data['level'] == 'user') {
            header("Location:  ../../index.html");
        } else {
            header("Location:  ../../index.html");
        }
        exit();
    } else {
            // Password tidak sama dengan yang disimpan di dalam database
            header("Location: login.php?error=wrongpwd");
            exit();
        }
    } else {
        // Jika username tidak ditemukan dalam database
        header("Location: login.php?error=nouser");
        exit();
    }

?>