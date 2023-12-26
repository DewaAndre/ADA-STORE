<?php 
$conn=mysqli_connect("localhost","root","","uk_hotel");
if(isset($_POST['submit'])) {
   $id = $_POST['id'];
    $kamar_id = $_POST['kamar_id'];
    $fasilitas = $_POST['fasilitas'];

    $query = "UPDATE fasilitas_kamar SET kamar_id = '$kamar_id' , nama = '$fasilitas' WHERE id = '$id'";
    $result = mysqli_query($conn, $query);
    if($result) {
               header("Location: ../../index.php?pages=fasilitasKamar");
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}

mysqli_close($conn);

?>