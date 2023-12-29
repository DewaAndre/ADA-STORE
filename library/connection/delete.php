<!-- delete Table kamar -->
<?php
$conn = mysqli_connect('localhost', 'root', '', 'uk_hotel');

if (!$conn) {
  die('Failed to connect to the database: '.mysqli_connect_error());
}

if (isset($_GET['delete_id_kamar'])) {
  $id = $_GET['delete_id_kamar'];

  $sql = "DELETE FROM kamar WHERE id = $id";

  if (mysqli_query($conn, $sql)) {
    header("Location: ../../index.php?pages=kamar");
  } else {
    echo "Error deleting record: ".mysqli_error($conn);
  }
}

// Close the database connection
mysqli_close($conn);
?>

<!-- delete Table fasilitas -->
<?php
$conn = mysqli_connect('localhost', 'root', '', 'uk_hotel');

if (!$conn) {
  die('Failed to connect to the database: '.mysqli_connect_error());
}

if (isset($_GET['delete_id_fasilitas'])) {
  $id = $_GET['delete_id_fasilitas'];

  $sql = "DELETE FROM fasilitas_kamar WHERE kamar_id = $id";

  if (mysqli_query($conn, $sql)) {
    header("Location: ../../index.php?pages=fasilitasKamar");
  } else {
    echo "Error deleting record: ".mysqli_error($conn);
  }
}

// Close the database connection
mysqli_close($conn);
?>


<!-- delete Table hotel -->
<?php
$conn = mysqli_connect('localhost', 'root', '', 'uk_hotel');

if (!$conn) {
  die('Failed to connect to the database: '.mysqli_connect_error());
}

if (isset($_GET['delete_id_hotel'])) {
  $id = $_GET['delete_id_hotel'];

  $sql = "DELETE FROM fasilitas_hotel WHERE id = $id";

  if (mysqli_query($conn, $sql)) {
    header("Location: ../../index.php?pages=hotel");
  } else {
    echo "Error deleting record: ".mysqli_error($conn);
  }
}

// Close the database connection
mysqli_close($conn);
?>



