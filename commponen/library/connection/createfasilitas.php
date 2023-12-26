<?php
 $con = mysqli_connect("localhost", "root", "", "uk_hotel");
if (isset($_POST['submit'])) {
    
  $kamar = $_POST['kamar_id'];
  $fasilitas = $_POST['fasilitas'];

  $query = "INSERT INTO fasilitas_kamar (`id`, `kamar_id`, `nama`) VALUES (0,'$kamar', '$fasilitas')";
  $result = mysqli_query($con, $query);

  if ($result) {
    $_SESSION['success'] = "Data fasilitas kamar berhasil ditambahkan.";
     header("Location: ../../fasilitas_kamar.php?pages=fasilitasKamar");

  } else {
    $_SESSION['error'] = "Data fasilitas kamar gagal ditambahkan.";
    echo "Error creating database: " . mysqli_error($con);
  }
}
 ?>


