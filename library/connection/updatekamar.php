<?php 
$conn = mysqli_connect("localhost", "root", "", "uk_hotel");
if(isset($_POST['submit'])) {
     $id = $_POST["id"];
     $tipe = $_POST["tipe"];
     $jumlah_kamar = $_POST["jumlah_kamar"];


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
               $query = "UPDATE kamar SET tipe = '$tipe', jumlah = '$jumlah_kamar', image = '$target_file' WHERE id = $id";
                mysqli_query($conn,$query);
                echo "The file ". htmlspecialchars( basename( $_FILES["image"]["name"])). " has been uploaded.";
               header("Location: ../../kamar.php?pages=kamar");
            } 
            else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    }
    else {
      $query = "UPDATE kamar SET tipe = '$tipe', jumlah = '$jumlah_kamar' WHERE id = $id";
        mysqli_query($conn,$query);
        echo "The data has been updated.";
               header("Location: ../../kamar.php?pages=kamar");
    }

    mysqli_close($conn);
}


?>
