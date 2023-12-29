<?php
 $con = mysqli_connect("localhost", "root", "", "ada_store");
if (isset($_POST['submit'])) {
  
  $nama = $_POST['nama'];
  $level = $_POST['level'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  $query = "INSERT INTO user (`id`, `nama`, `level`, `email`, `password`) VALUES (0,'$nama', '$level', '$email', '$password')";
  $result = mysqli_query($con, $query);

  if ($result) {
    $_SESSION['success'] = "Data berhasil ditambahkan.";
     header("Location: ../../index.php");

  } else {
    $_SESSION['error'] = "Data gagal ditambahkan";
    echo "Error creating database: " . mysqli_error($con);
  }
}
 ?>


