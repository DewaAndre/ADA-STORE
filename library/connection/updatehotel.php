
<?php 
$conn = mysqli_connect("localhost", "root", "", "uk_hotel");
if(isset($_POST['submit'])) {
     $id = $_POST['id'];
    $nama = $_POST['fasilitas'];
    $keterangan = $_POST['keterangan'];


    if ($_FILES["image"]["name"] != "") {
        $target_dir = "./img/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
     $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            exit();
        }
        else{
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            $query = "UPDATE fasilitas_hotel SET nama = '$nama' , keterangan = '$keterangan', image = '$target_file' WHERE id = '$id'";
                mysqli_query($conn,$query);
                echo "The file ". htmlspecialchars( basename( $_FILES["image"]["name"])). " has been uploaded.";
               header("Location: ../../fasilitas_hotel.php?pages=hotel");
            } 
            else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    }
    else {
      $query = "UPDATE fasilitas_hotel SET nama = '$nama' , keterangan = '$keterangan' WHERE id = '$id'";
        mysqli_query($conn,$query);
        echo "The data has been updated.";
               header("Location: ../../fasilitas_hotel.php?pages=hotel");
    }

    mysqli_close($conn);
}


?>
